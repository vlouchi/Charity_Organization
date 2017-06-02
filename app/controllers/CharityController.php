<?php

class CharityController extends BaseController{
	
	public function popularCharity(){
		if (Session::get('username')==null) return Redirect::to('/login');
		else{
		 $data['charity'] = DB::table('charity1')
		 			->orderBy('jmlhdonatur','desc')
		 			->take(3)
		 			->get();
		
		// $data['viewcharity']=DB::table('charity1')
		// 					-> where('iddcharity',$id)
		// 					-> get();
		}
			return View::make('donate',$data);

	}

	public function seeall(){
		if (Session::get('username')==null) return Redirect::to('/login');
		else{
		 $data['charity'] = DB::table('charity1')
		 					->get();
		
			}
			return View::make('seeall',$data);

	}

	public function showCharity($id){
		if (Session::get('username')==null) return Redirect::to('/login');
		else{
			$data['charity']=DB::table('charity1')
							-> where('iddcharity',$id)
							-> get();
			$data['listgambar']=DB::table('gambar')				
							->where('idcharity',$id)
							->get();
			$data['progress'] = ($data['charity'][0]->jumlahskg/$data['charity'][0]->target)*100;

			return View::make('donateext',$data);
		}

	}
	
	public function yourCharity(){
		if (Session::get('username')==null) return Redirect::to('/login');
		else{
			
			$data['charity']=DB::table('charity1')
							-> where('usernameowner',Session::get('username'))
							-> get();
			

			return View::make('yourcharity',$data);
		}

	}

	public function viewcharity(){
		if (Session::get('username')!=null){
			$data['charedit'] = DB::select('select * from charity1 where iddcharity like ?',array($_POST['iddcharity']));
			
			$data['listgambar']=DB::table('gambar')
							  ->where('idcharity',$_POST['iddcharity'])
							  ->get();

			return View::make('editcharity',$data);
			}else{
			return View::make('login');
		}

	}

		public function charityedit(){
		if (Session::get('username')!=null){
			
			DB::table('charity1')->where('iddcharity', $_POST['iddcharity'])
								->update(array(
									  	'namacharity' => $_POST['title'],
					  				  	'contact' => $_POST['contact'],
					  				  	'target' => $_POST['fund'],
					  				  	'rekening' => $_POST['rekening'],
					  				  	'lokasi' => $_POST['lokasi'],
					  				  	'urlgambar' => $_POST['imagelink'],
					  				  	'ketcharity' => $_POST['description'],
					  				  	'usernameowner'=>Session::get('username')
					  				  	));

			DB::table('gambar')
			  ->where('idcharity',$_POST['iddcharity'])
			  ->delete();

			if($_POST['addimage1']==!null){
				$url=DB::table('gambar')->insert(
					array(
							'urlgambar'=>$_POST['addimage1'],
							'idcharity'=>$_POST['iddcharity']
						)
					);
			}
			if($_POST['addimage2']==!null){
				$url=DB::table('gambar')->insert(
					array(
						'urlgambar'=>$_POST['addimage2'],
						'idcharity'=>$_POST['iddcharity']						)
					);
			}
			if($_POST['addimage3']==!null){
				$url=DB::table('gambar')->insert(
					array(
							'urlgambar'=>$_POST['addimage3'],
							'idcharity'=>$_POST['iddcharity']
						)
					);

					
				}
				return Redirect::to('/charity/'.$_POST['iddcharity']);

			}else{
					return View::make('login');
		}
	}

	public function donating(){
		if(Session::get('username')!=null){
			DB::table('donasi')->insert(array(
							   			'jumlahdonasi'=>$_POST['fund'],
							   			'idcharity'=>$_POST['iddcharity'],
							   			'statusdonasi'=>0,
							   			'usernamedonatur'=>Session::get('username')
							   			));
			return Redirect::to('/charity/'.$_POST['iddcharity']);


		}else{
			return View::make('login');
		}

	}

	public function getDonatur(){
		if(Session::get('username')!=null){
		
		$data['charity']=DB::table('charity1')
							-> where('usernameowner',Session::get('username'))
							-> get();			

		$listdonatur = array();

		foreach ($data['charity'] as $datas) {
			$q1 = DB::select('select * from donasi where idcharity = ?', array($datas->iddcharity));
			foreach ($q1 as $d2) {
				$listdonatur[] = array(
										'namacharity'	  => $datas->namacharity,
										'usernamedonatur' => $d2->usernamedonatur,
										'jumlahdonasi'	  => $d2->jumlahdonasi,
										'idcharity'		  => $d2->idcharity,
										'statusdonasi'	  => $d2->statusdonasi,
										'iddonasi'		  => $d2->iddonasi
					);
			}
		} 

		$data['listdonatur']=$listdonatur;

		return View::make('statusdonation',$data);
		}else{
			return View::make('login');	
		}


	}

	public function getDonated(){
		if(Session::get('username')!=null){
			$data['charity']=DB::table('donasi')
							-> where('usernamedonatur',Session::get('username'))
							-> get();			

		$listdonasi = array();

		foreach ($data['charity'] as $datas) {
			$q1 = DB::select('select * from charity1 where iddcharity = ?', array($datas->idcharity));
			//foreach ($q1 as $d2) {
				$listdonasi[] = array(
										'namacharity'	  => $q1[0]->namacharity,
										'usernameowner'   => $q1[0]->usernameowner,
										'jumlahdonasi'	  => $datas->jumlahdonasi,
										'idcharity'		  => $q1[0]->iddcharity,
										'statusdonasi'	  => $datas->statusdonasi,
										'iddonasi'		  => $datas->iddonasi
					);
			//}
		} 

		$data['listdonasi']=$listdonasi;

		return View::make('donated',$data);
		}else{
			return View::make('login');
		}
	}


	public function approved($cid,$did){
		if(Session::get('username')!=null){
			$data['approve']=DB::table('charity1')->where('iddcharity',$cid)
												 ->get();
			if ($data['approve'][0]->usernameowner==Session::get('username')){
				DB::table('donasi')->where('iddonasi',$did)
								   ->update(array(
								   		'statusdonasi'=>1

								   	));
			$sum= DB::select('select * from donasi where iddonasi=?', array($did));
			$sums = $data['approve'][0]->jmlhdonatur+1;
			DB::table('charity1')->where('iddcharity',$cid)
								 ->update(array(
								 		'jumlahskg'=> $data['approve'][0]->jumlahskg+$sum[0]->jumlahdonasi,
								 		'jmlhdonatur'=> $sums

								 		));

			}
			return Redirect::to('/donate/statusdonation');
		}else{
			return View::make('login');	
		}

	}



	public function listDonatur(){
		
		
		$data['charity']=DB::table('charity1')
							-> get();			

		$listdonatur = array();

		foreach ($data['charity'] as $datas) {
			$q1 = DB::select('select * from donasi ');
			foreach ($q1 as $d2) {
				$listdonatur[] = array(
										'namacharity'	  => $datas->namacharity,
										'usernamedonatur' => $d2->usernamedonatur,
										'jumlahdonasi'	  => $d2->jumlahdonasi,
										'idcharity'		  => $d2->idcharity,
										'statusdonasi'	  => $d2->statusdonasi,
										'iddonasi'		  => $d2->iddonasi
					);
				return View::make('donation',$data);
			}
		}

}

	
}
