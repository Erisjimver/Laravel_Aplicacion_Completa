<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Foto;

class AdminUsersController extends Controller
{
    //

    public function index(){
    	$users=User::all();
    	return view('admin.users.index',compact('users'));
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){
    	//User::create($request->all());
    	//return redirect ('/admin/users/');
    	//return $request->all();
        $entrada=$request->all();
        if($archivo=$request->file('foto_id')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $foto=Foto::create(['ruta_foto'=>$nombre]);
            $entrada['foto_id']=$foto->id;
        }else{
           // Users::create($entrada);
        }
        $entrada['password']=bcrypt($request->password);
        User::create($entrada);
        return redirect('/admin/users');
    }
}
