<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\User;
    use Validator;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function index()
        {
          //retorna a todos los usuarios y sus órdenes
            return response()->json(User::with(['orders'])->get());
        }

        public function login(Request $request)
        {
          //Autentica al usuario y genera un access token para ese usuario
            $status = 401;
            $response = ['error' => 'Unauthorised'];

            if (Auth::attempt($request->only(['email', 'password']))) {
                $status = 200;
                $response = [
                    'user' => Auth::user(),
                    'token' => Auth::user()->createToken('SateProject')->accessToken,
                ];
            }

            return response()->json($response, $status);
        }

        public function register(Request $request)
        {
          //Crea una cuenta nueva, la autentica y genera un access token
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:50',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'c_password' => 'required|same:password',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }

            $data = $request->only(['name', 'email', 'password']);
            $data['password'] = bcrypt($data['password']);

            $user = User::create($data);
            $user->is_admin = 0;

            return response()->json([
                'user' => $user,
                'token' => $user->createToken('SateProject')->accessToken,
            ]);
        }

        public function showOrders(User $user)
        {
          //Obtiene todas las órdenes de un usuario y las retorna
            return response()->json($user->orders()->with(['product'])->get());
        }

        public function show(User $user)
        {
          //Obtiene los detalles del usuario y retorna
            return response()->json($user);
        }
        public function logout(Request $request) {
          Auth::logout();
          return redirect('/');
        }
    }
