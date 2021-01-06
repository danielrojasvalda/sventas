<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Hash;
use Sucursal;
use DB;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        //$users = User::All();
	//return view('user.index', compact('users'));
		$users = DB::table('users')->select(
			'name',
			'CargoUsuario',
			'email',
			'CelUsuario',
			'NroSucursal'
		)
		->join('sucursal', 'users.IdSucursal', '=', 'sucursal.id')
		->paginate(10);
		//->get();
		//return view('user.index', ['users' => $users]);
		return view('user.index')
		//->with("sucursales", $sucursales)
		->with("users", $users);	 	
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//	return "Hola Mundo store";
//	return $request;

	User::create([
		'name' => $request->name,
		'password' => $request->password,
		'CargoUsuario' => $request->CargoUsuario,
		'CiUsuario' => $request->CiUsuario,
		'CelUsuario' => $request->CelUsuario,		
		'email' => $request->email,		
		'IdSucursal' => $request->IdSucursal,
		'AccesoUsuario' => $request->AccesoUsuario
	]);
	return redirect('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //This was created by ME
			$users = User::find($id);
			return view('user.edit', compact('users'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //This was created by ME
        //before: public function update(Request $request, $id)
        $users = User::find($id);
        //$users->update($request->all());
        //->update(['password' => bcrypt($request->password)]);
        $users->update(['password' => bcrypt($request->password)]);
        Session::flash('update', 'Se ha actualizado correctamente');
        return redirect('logout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
		public function password() {
			    return view('user.password');
    
    }
     public function updatePassword(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('user/password')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('user')->with('status', 'Password cambiado con éxito');
            }
            else
            {
                return redirect('user/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }    
}
