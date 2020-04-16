<?php 
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller {

	public function __construct(){
		$this->middleware('auth'); 
	}
	public function index(){
		  $user  = $this->getuser(Session::get('uid'));	
		  $data = $this->getUserMemberDetails(Session::get('uid'));	
		  $data = (object)$data;
		  return view('user.account',['user'=>$user[0],'data'=>$data]);
	}
	public function profile(){
	  $results = DB::select('SELECT  ss.*, sp.name as packname  FROM `stead_student` ss left join stead_package sp on ss.package_id = sp.pack_id  WHERE ss.id ='.Session::get('uid'));
	  return view('user.profile',['users'=>$results[0]]);
	}
	public function feedback(){
		  return view('user.feedback');
	}
	public function myfeedback(){ 
		  $result = DB::select('SELECT * FROM `stead_feedback` where user_id='.Session::get('uid'));
		  return view('user.myfeedback',['myfeedbacks'=>$result,'i'=>1]);
	}
	public function postfeedback(Request $request){ 	 
	   if($request->input('subject') && $request->input('description') && $request->input('fulldescription')) {	 
			$userid = DB::table('stead_feedback')->insertGetId(
				 ['user_id' => Session::get('uid'), 
				  'subject' => $request->input('subject'),
				  'sortDescription'   => $request->input('description'),
				  'longDescription' => $request->input('fulldescription'),
				  'date' => date('Y-m-d')
				  ]);		
			return redirect('feedback')->with('message', 'Thanks for given your valuable feedback...');	  		
		} else {
			return redirect('feedback')->withErrors(['Required All fields...']);	
		}
	}			
		
	public function cpass(){ 	       
		if(!Session::get('uid')){		 
		  return redirect('login')->withErrors(['Please login']);   
		} else {
		  return view('user.cpass');
		}		 
	}
	public function fees(){ 
		  $result = DB::select("SELECT sf.*,sp.name,sp.price FROM `stead_fees` sf left join stead_package sp on sf.package_id = sp.pack_id WHERE sf.student_id = ".Session::get('uid'));
		  return view('user.fees',['feeses'=>$result,'i'=>1]);		 		 
	}
	public function welcomelatter(){ 	       
		if(!Session::get('uid')){		 
		  return redirect('login')->withErrors(['Please login']);   
		} else {
		  return view('user.welcomelatter');
		}		 
	}
	public function reciept(){ 	       
		if(!Session::get('uid')){		 
		  return redirect('login')->withErrors(['Please login']);   
		} else {
		  return view('user.reciept');
		}		 
	}
	//Get User  Information
	public function getuser($id){
		   $userdetail = DB::select('SELECT  ss.id, ss.name,ss.status, ss.sponcer_id, ss.parent_id, ss.package_id, ss.joining_date,ss.fees, sp.name as packname  FROM `stead_student` ss left join stead_package sp on ss.package_id = sp.pack_id  WHERE ss.id ='.$id);
		   return $userdetail;
	}
	//Get Left User  Information	
	public function leftcount($id) {
		$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid = '$id'"); 
		if(isset($array[0])) { 
			$array = $array[0];	
		}		
		$list = array();
		if(!empty($array->lnode)){
			 $list[] = $array->lnode.'-'.$this->sponcer($array->lnode);
			 $list = array_merge($list, $this->allcount($array->lnode));
		}
		return $list;
	}
	//Get Right User  Information
	public function rightcount($id) {
     	$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid = '$id'"); 
		if(isset($array[0])) { 
			$array = $array[0];
		}	
		$list = array();
		if(!empty($array->rnode)){
		     $list[] = $array->rnode.'-'.$this->sponcer($array->rnode);
			 $list = array_merge($list, $this->allcount($array->rnode));
		}
		return $list;
	}
	//Get All  User  Information
	public function allcount($id){
		$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid ='$id'"); 		 
		if(isset($array[0])) { 
			$array = $array[0];
		}
		$list = array();		 
		if(!empty($array->lnode)){
			 $list[] = $array->lnode.'-'.$this->sponcer($array->lnode);
			 $list = array_merge($list, $this->allcount($array->lnode));
		}
		if(!empty($array->rnode)){
			$list[] = $array->rnode.'-'.$this->sponcer($array->rnode);
			$list = array_merge($list, $this->allcount($array->rnode));
		}
		return $list;
	}
	public function sponcer($id) {
     	$array = DB::select("SELECT sponcer_id FROM stead_student WHERE id = '$id'"); 
		if(isset($array[0])) { 
			$array = $array[0];
		}	    
		return $array->sponcer_id;
	}		
	/*
	public function allcount($id){
		$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid = '$id'"); 		 
		$array = $array[0];
		$count = 0;
		if(!empty($array->lnode)){
			$count += $this->allcount($array->lnode) +1;
		}
		if(!empty($array->rnode)){
			$count += $this->allcount($array->rnode) +1;
		}
		return $count;
	}*/		
	public function changepassword(Request $request){		 
				$result = DB::select('select * from stead_student where id='.Session::get('uid').' and password = "'.md5($request->input('password')).'"');			
	if($result) {
			if($request->input('cpassword') == $request->input('npassword')){
				DB::table('stead_student')->where('id',  Session::get('uid'))->update(['password' => md5($request->input('npassword'))]);	
				//return redirect('cpass')->withErrors(['Password change successfully.']);
				return redirect('cpass')->with('message', 'Password change successfully.');
			} else {
				return redirect('cpass')->withErrors(['Confirm and new password are not match.']);
			}
		} else{
				 return redirect('cpass')->withErrors(['Wrong old password.']);
		} 
	} 
	//Get Member Detail
	public function getUserMemberDetails($mem) {
		$array = DB::select("SELECT * FROM stead_tree WHERE nodeid = '$mem'");
		$lmem  = explode(",", $array[0]->lmem);
		$lmem  = array_filter($lmem);
		$rmem  = explode(",", $array[0]->rmem);
		$rmem  = array_filter($rmem);
				
		$directArray = DB::select("SELECT count(*) as count FROM stead_tree WHERE dpnode = '$mem'");
		$list = array(
				'tlmem' => count($lmem),
				'trmem' => count($rmem),
				'dmem' => $directArray[0]->count,
				'ulmem' => $array[0]->pair,
				'urmem' => $array[0]->pair,
				'lunit' => $array[0]->lunit,
				'runit' => $array[0]->runit,
				);
		return $list; 
	}
	
	// Incomes Menu 
	public function directincome(){
		$directincome = DB::select("SELECT * FROM stead_closing where student_id = '".Session::get('uid')."' and income_type= 1 group by closingid");		
		if(count($directincome) > 0) {
		  $result = $directincome;	
		} else {
		  $result = '';
		}
		return view("user.directincome",["data"=>$result,"i"=>1]);		
	}
	public function pairincome(){	
		$directincome = DB::select("SELECT * FROM stead_closing where student_id = '".Session::get('uid')."' and income_type= 2 group by closingid");		
		if(count($directincome) > 0) {
		  $result = $directincome;	
		} else {
		  $result = '';
		}
		return view("user.pairincome",["data"=>$result,"i"=>1]);		
	}
	public function rewardincome(){
		$directincome = DB::select("SELECT * FROM stead_closing where student_id = '".Session::get('uid')."' and income_type= 3 group by closingid");		
		if(count($directincome) > 0) {
		  $result = $directincome;	
		} else {
		  $result = '';
		}
		return view("user.rewardincome",["data"=>$result,"i"=>1]);
	}
	
	public function wallet(){	    
		$directincome = DB::select("SELECT SUM(price) as price, SUM(lapsprice) as lapsprice FROM stead_closing WHERE student_id = '".Session::get('uid')."' and   income_type = 1");		
		if(count($directincome) > 0) {
		  $directincomes = $directincome[0]->price ;
		  $directlaps = $directincome[0]->lapsprice ;		  
		} else {
		  $directincomes = 0;	
		  $directlaps = 0;	   
		}
		$pairincome = DB::select("SELECT SUM(price) as price, SUM(lapsprice) as lapsprice FROM stead_closing WHERE student_id = '".Session::get('uid')."' and   income_type = 2");		
		if(count($pairincome) > 0) {
		  $pairincomes = $pairincome[0]->price ;
		  $pairlaps = $pairincome[0]->lapsprice ;		  
		} else {
		  $pairincomes = 0;	
		  $pairlaps = 0;	   
		}
		$recived = 0;					
		$data = array("recived"=>$recived,"directincome"=>$directincomes,"directlaps"=>$directlaps,"pairincome"=>$pairincomes,"pairlaps"=>$pairlaps);	
		
		return view("user.wallet",["data"=>$data,"i"=>1]);	
	}					
}