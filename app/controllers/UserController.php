<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function validateReset(){
		$result = DB::select('select *from user where username like ? and pin like ?', array ($_POST['username'],$_POST['pin']));
		if($result!=null){
			return Redirect::to('login/resetpassword')->with('passMessage',"Your Password : ".$result[0]->password);
		}else{
			return Redirect::to('login/resetpassword')->with('errMessage',"Your account wasn't exist");
		}
	}

	public function validateReg()
	{
		$result = DB::select('select * from user where username like ?', array($_POST['username']));

		if($result == null){
			if($_POST['password'] != $_POST['password_conf']){
				return Redirect::to('register')->with('errMessage','Password not match');
			}else{
				if ($_POST['username'] == '' || $_POST['pin'] =='' || $_POST['namalengkap'] == '' || $_POST['email'] == '') return Redirect::to('register')->with('errMessage',"You have to complete the registration form!");		

				DB::table('user')->insert(
					array( 'username'=> $_POST['username'],
							'password'=>$_POST['password'],
							'pin'=>$_POST['pin'],
							'nama'=>$_POST['namalengkap'],
							'email'=>$_POST['email'])

						);
					return Redirect::to('login')->with('sucMessage',"Account Created");				
			}
		}else{
			return Redirect::to('register')->with('errMessage',"Username has been used");
		}
	}

	public function login(){
		if (Session::get('username')!=null){
			return Redirect::to('/');
		}else{
			return View::make('login');
		}
	}

	public function validateLog(){
		$result=DB::select('select * from user where username like ? and password like ?',array($_POST['username'],$_POST['password']));

		if($result == null){
			return Redirect::to('login')->with('errMessage',"Username and Password did not found");
		}else{
			Session::put('username',$_POST['username']);
			return Redirect::to('/');
		}
	}



	public function startcharity(){
		if (Session::get('username')==null) return Redirect::to('/login');	
		else {
			$fund = $_POST['fund'];
			if(is_numeric($fund)){
				 $id = DB::table('charity1')->insertGetId(
  				  array(
  				  	'namacharity' => $_POST['title'],
  				  	'contact' => $_POST['contact'],
  				  	'target' => $_POST['fund'],
  				  	'rekening' => $_POST['rekening'],
  				  	'lokasi' => $_POST['lokasi'],
  				  	'urlgambar' => $_POST['imagelink'],
  				  	'ketcharity' => $_POST['description'],
  				  	'summary'=>$_POST['summary'],
  				  	'usernameowner'=>Session::get('username'),
  				  	'jumlahskg' => 0,
					'jmlhdonatur' => 0
  				  	)
			);
			if($_POST['addimage1']==!null){
				$url=DB::table('gambar')->insert(
					array(
							'urlgambar'=>$_POST['addimage1'],
							'idcharity'=>$id
						)
					);
			}
			if($_POST['addimage2']==!null){
				$url=DB::table('gambar')->insert(
					array(
							'urlgambar'=>$_POST['addimage2'],
							'idcharity'=>$id
						)
					);
			}
			if($_POST['addimage2']==!null){
				$url=DB::table('gambar')->insert(
					array(
							'urlgambar'=>$_POST['addimage3'],
							'idcharity'=>$id
						)
					);
			}
			} else{
				return Redirect::to('/startcharity')->with('errMessage','Your fund must be a number!');
			}
			
			return Redirect::to('/startcharity')->with('sucMessage','Congratulation!');
		}
	}

	public function profil(){
		if (Session::get('username')!=null){
			$data['profile'] = DB::select('select * from user where username like ?',array(Session::get('username')));
			return View::make('profil',$data);}

			else{
			return View::make('login');
		}

	}

	public function profilupdate(){
		if (Session::get('username')!=null){
			$data['profile'] = DB::select('select * from user where username like ?',array(Session::get('username')));
					if($_POST['password'] != $_POST['password_conf']){
						return Redirect::to('register')->with('errMessage','Password not match');
						}else{
							DB::table('user')->where('username', Session::get('username'))
											 ->update(array(
											  	'password'=>$_POST['password'],
												'nama'=>$_POST['namalengkap'],
												'email'=>$_POST['email']));
					return Redirect::to('/profil')->with('sucMessage','Your profile has been updated');
				}
			}
				else{
			return View::make('login');
		}
	
	}

	
	


}

