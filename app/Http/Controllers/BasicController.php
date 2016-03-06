<?php namespace App\Http\Controllers;

//use App\Http\Requests;
//use App\Http\Controllers\Controller;

use Request;
use Validator ; 
use Hash ; 
use DB; 

use App\model\User;


class BasicController extends Controller {

	//
	public function index(){

		return view('pages.index') ; 
	}

	public function about(){
		return view('pages.about') ;

	}
	public function service(){
		return view('pages.service') ;

	}
	public function portfolio(){
		return view('pages.portfolio') ;

	}
	public function blog(){
		return view('pages.blog') ;

	}
	public function contact(){
		return view('pages.contact') ;

	}
	public function register(){
		return view('pages.register') ;

	}
	public function register_submit(){
	
	//validate form 
		//รับค่าจาก form 
		//echo Request::input('first_name');
		//รับค่าตัวแปรทั้งหมดจากฟอร์ม
		/*echo '<pre>'; 
		print_r(Request::all()); 
		echo '</pre>'; 
		*/
		//custum massage
		$messages	 = [
		'required' 	=> 'ข้อมูล :attribute จำเป็นต้องกรอก',
		'numeric'	=> 'ข้อมูล :attribute ต้องเป็นตัวเลข :digits หลัก',
		'unique'	=> 'มีข้อมูลอีเมล์นี้ในระบบแล้ว'

		];
/**/		
		$rules = [
			'first_name' 	=> 'required' , 
			'last_name' 	=> 'required' , 
			'email' 		=> 'required|unique:users' , 
			'tel' 		=> 'required|numeric|digits:10' , 
			'password' 	=> 'required' , 
			'password_confirmation' => 'required'
		];

		$validator  = Validator::make(Request::all(),$rules,$messages); 


		if ($validator->fails()){
			//echo "Validate fail !" ;
			return redirect()->back()->withErrors($validator)->withInput() ;
		}else {
			//echo  "Validate Successfull" ;
			//ชื่อ model :: โค้ด insert into ใช้กรอกนี้ ชื่อตัวแปรในฟอร์มเหมือนชื่อฟิวในตาราง
			//User::create(Request::all()); 
			$data_user = array(

				'firstname' 	=> Request::input('first_name') , 
				'lastname' 	=> Request::input('last_name') , 
				'email'		=> Request::input('email') , 
				'tel'		=> Request::input('tel'),
				'password' 	=> Hash::make(Request::input('password')), 

				);
			$insert_user = User::create($data_user); 

			if($insert_user->exists()){  //exists มีข้อมูลในดาต้าเบสแล้ว insert ซ้ำไม่ได้
				//echo "insert Successfull" ; 

				//คีย์,เวลู
				//->with('key','value') ตัวแปร with รับหน้า view ด้วยคำสั่ง session
return redirect('register')->with('status','<div class="alert alert-success">บันทึกสำเร็จ</div>'); 
				
			}else {
				return redirect('register')->with('status','<div class="alert alert-danger">บันทึกไม่สำเร็จ</div>'); 
				
			}

		}


	}

	public function customers_list(){
		
		//print_r(DB::table('customers')->get());  //ออกมาทั้งหมด
		/*$data = DB::table('customers')->where('postalCode','44000')->first();
		echo "<pre>" ;
		print_r($data) ; 
		echo "</pre>" ; */
		//$data = DB::table('customers')->get();
		//paging 
		$data = DB::table('customers')->paginate(20);
		$data_count = DB::table('customers')->count(); 
//data_customer ชื่อตัวแปร 
//return view('pages.customers-list')->with('data_customer',$data) ; 
//ส่งค่าไปหลาย table 
return view('pages.customers-list')->with(array('data_customer'=>$data,'data_count'=>$data_count)) ; 

	}

	public function products_list(){

		$data_product = DB::table('product')
		->join('category','product.category_id','=','category.category_id')
		->join('manufacturer','product.menufac_id','=','manufacturer.menufac_id')
		->select('*')
		->get() ; 
		$data_cnt = count($data_product); 
		/*
		echo "<pre>" ;
		print_r($data_product) ; 
		echo "</pre>" ;
		*/
		return view('pages.products-list')->with(array('data_product'=>$data_product,'data_cnt'=>$data_cnt));


	}






}
