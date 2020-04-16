<?php 
namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class BinaryController extends Controller {

	public function __construct(){
		$this->middleware('auth'); 
	}
	public function index(Request $request){
		  if($request->input("user")) {
			$treeUsers = $this->getTreeMember($request->input("user"));				 
		  } else {
			$treeUsers = $this->getTreeMember(Session::get('uid'));
		  } 
 		  return view('user.treeview',['results'=>$treeUsers,'login'=>Session::get('uid')]);
	}
	
	public function downline(){
		  $lnodes = $this->leftcount(Session::get('uid')); 
		  $rnodes = $this->rightcount(Session::get('uid'));
		  $str = '';	
		  $user = [];
		  foreach ($lnodes as $lnode) {
		  	$ex = explode("-", $lnode);
			if($ex[1] == Session::get('uid')) {
				if($str =='') {
					$str .= "and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}
			}
		  }
		  foreach ($rnodes as $rnode) {
		  	$ex = explode("-", $rnode);
			if($ex[1] == Session::get('uid')) {
				if($str =='') {
					$str .= " and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}
			}
		  }	
		  if($str !=''){
		    $user = DB::select("select username,name,sponcer_id,sponcer_name,parent_id,position,joining_date from stead_student where status =1 ".$str.' order by position');
		  
		  } 		  
		  return view('user.downline',['users'=>$user,'i'=>1]);
	}
	public function fullview(){
		  $lnodes = $this->leftcount(Session::get('uid')); 
		  $rnodes = $this->rightcount(Session::get('uid'));
		  $str = '';	
		  $user = [];
		  foreach ($lnodes as $lnode) {
		  	$ex = explode("-", $lnode);			 
				if($str =='') {
					$str .= "and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}			 
		  }
		  foreach ($rnodes as $rnode) {
		  	$ex = explode("-", $rnode);			 
				if($str =='') {
					$str .= " and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}			 
		  }	
		  if($str !=''){
		    $user = DB::select("select username,name,sponcer_id,sponcer_name,parent_id,position,joining_date from stead_student where status =1 ".$str.' order by position');		  
		  } 		 
		  return view('user.fullview',['users'=>$user,'i'=>1]);
	}
	public function leftview(){
		  $lnodes = $this->leftcount(Session::get('uid'));		  
		  $str = '';	
		  $user = [];
		  foreach ($lnodes as $lnode) {
		  	$ex = explode("-", $lnode);			 
				if($str =='') {
					$str .= "and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}			 
		  } 
		  if($str !=''){
		    $user = DB::select("select username,name,sponcer_id,sponcer_name,parent_id,position,joining_date from stead_student where status =1 ".$str.' order by position');		  
		  } 	
		  return view('user.leftview',['users'=>$user,'i'=>1]);
	}		
	public function rightview(){		  
		  $rnodes = $this->rightcount(Session::get('uid'));
		  $str = '';	
		  $user = []; 
		  foreach ($rnodes as $rnode) {
		  	$ex = explode("-", $rnode);			 
				if($str =='') {
					$str .= " and id=".$ex[0];
				} else {
					$str .= " or id=".$ex[0];
				}			 
		  }	
		  if($str !=''){
		    $user = DB::select("select username,name,sponcer_id,sponcer_name,parent_id,position,joining_date from stead_student where status =1 ".$str.' order by position');		  
		  } 	
		  return view('user.rightview',['users'=>$user,'i'=>1]);
	}	
	//Get User  Information
	public function getuser($id){
		   $userdetail = DB::select('SELECT ss.id, ss.name,ss.status, ss.sponcer_id, ss.parent_id, ss.package_id, ss.joining_date,ss.fees, sp.name as packname  FROM `stead_student` ss left join stead_package sp on ss.package_id = sp.pack_id WHERE ss.id = '.$id);
		   return $userdetail;
	}
	//Get Left User  Information	
	public function leftcount($id) {
		$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid = '$id'"); 
		$array = $array[0];		
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
		$array = $array[0];
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
		$array = $array[0];
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
		$array = $array[0];
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
	public function getTreeMember($id){
		$result = $this->alltreemember($id,0);
		foreach($result as $uid){			  
			  if($uid->nodeid > 0) {
			  	$user  = $this->getuser($uid->nodeid);
				$array = DB::select("SELECT lmem, rmem, lunit,runit,pair  FROM stead_tree WHERE nodeid ='$uid->nodeid'"); 
				$lmem = explode(",",$array[0]->lmem);
				$rmem = explode(",",$array[0]->rmem);
				if(count($lmem) > 0 ) {
					$lmem = count($lmem) - 1;
				} else {
					$lmem = 0;
				}
				if(count($rmem) > 0 ) {
					$rmem = count($rmem) - 1;
				} else {
					$rmem = 0;
				}	
				$dnode = DB::select("SELECT count(*) as dnode FROM stead_tree WHERE dpnode = '$uid->nodeid'"); 	
				if(count($dnode) > 0 ) {
				   $dpnode = $dnode[0]->dnode;
				} else {
					$dpnode = 0;
				}
				$users[] = array('user'=>$user[0],'lnode'=>$lmem,'rnode'=>$rmem,'lunit'=>$array[0]->lunit,'runit'=>$array[0]->runit,'pair'=>$array[0]->pair,'dnode'=>$dpnode);			  
			  } else {
			    	$user = (object) array('id'=>'','name'=>'','status'=>'','sponcer_id'=>'','parent_id'=>'','package_id'=>'','joining_date'=>'','fees'=>'','packname'=>''); 
			    $users[] = array('user'=>$user,'lnode'=>'','rnode'=>'','lunit'=>'','runit'=>'','pair'=>'','dnode'=>'');
			  } 
		}
		if(count($result) <15){
			for($i=0;$i<(15-count($result));$i++){
				  $users[] = array('user'=>"");
			}
		}		 
 		 return $users;		 	
	}	
      public function alltreemember($id,$level){
	       //Level 0		   
		   $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(), 'nodeid' =>  $id,'level' => $level]);
			 
		  //Level 1
		  $level++;		 
		  $array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid ='$id'"); 		 
		  if(isset($array[0])) { 
		  	$array = $array[0];
			$lmem1  = $array->lnode;
			$rmem1  = $array->rnode;
		  } else {
		  	$lmem1  = 0;
			$rmem1  = 0;
		  }		   		  		  
		  $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $lmem1,'level' =>  $level]);
		  $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $rmem1,'level' =>  $level]);		  		  
		  //Level 2
		  $array = DB::select("SELECT * FROM tmp_tree WHERE level ='$level'");
		  $level++;
		  foreach($array as $uid){		  	 
			$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid ='$uid->nodeid'"); 		 
			if(isset($array[0])) { 
			 	$array = $array[0];
				$lmem2  = $array->lnode;
				$rmem2  = $array->rnode;
			 } else {
				$lmem2  = 0;
				$rmem2  = 0;
			 } 		    		  
		    $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $lmem2,'level' =>  $level]);
		    $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $rmem2,'level' =>  $level]);
		  }
		  
		  //Level 3
		  $array = DB::select("SELECT * FROM tmp_tree WHERE level ='$level'");
		  $level++;
		  foreach($array as $uid){		  	
			$array = DB::select("SELECT id, nodeid, lnode, rnode, pnode  FROM stead_tree WHERE nodeid ='$uid->nodeid'"); 		 
			if(isset($array[0])) { 
			 	$array = $array[0];
				$lmem3  = $array->lnode;
				$rmem3  = $array->rnode;
			 } else {
				$lmem3  = 0;
				$rmem3  = 0;
			 } 		   		  
		    $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $lmem3,'level' =>  $level]);
		    $userid = DB::table('tmp_tree')->insertGetId(['session' => Session::getId(),'nodeid' =>  $rmem3,'level' =>  $level]);
		  }		  
		  $result = DB::select('select * from tmp_tree where session="'.Session::getId().'" ORDER BY `id` ASC');
		  DB::delete('delete from tmp_tree where session="'.Session::getId().'"');
		  return $result;
	   }
		
	//Get Member Detail
	public function getUserMemberDetails($mem) {
		$array = DB::select("SELECT * FROM stead_tree WHERE id = '$mem'");
		$lmem  = explode(",", $array[0]->lmem);
		$lmem  = array_filter($lmem);
		$rmem  = explode(",", $array[0]->rmem);
		$rmem  = array_filter($rmem);
				
		$directArray = DB::select("SELECT count(*) as count FROM stead_tree WHERE dpnode = '$mem'");
		$list = array(
				'tlmem' => count($lmem),
				'trmem' => count($rmem),
				'dmem' => $directArray[0]->count,
				'ulmem' => $array[0]->used_lmem,
				'urmem' => $array[0]->used_rmem,
				'lunit' => $array[0]->lunit,
				'runit' => $array[0]->runit,
				);
		return $list; 
	}			
}
