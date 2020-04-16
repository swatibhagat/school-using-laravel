<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class TransportController extends Controller {

	public function __construct(){
	}
	
	/**
	 * @Dashboard
	 */
	public function index(){ 
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}			
		return view("admin.home");
	}
	
	/*----------------------------------------------Transport-----------------------------------*/
	
	/*transport vehicle*/
	
	public function transport_vehicle(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_transport_vehicle","Y");
		return view("admin.transport_vehicle",["data"=>$data]);			
	}
	public function save_transport_vehicle() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		return view("admin.transport_vehicle_add",["data"=>""]);			
	} 
	public function create_transport_vehicle(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"vehicle_seat"=>$request->input('vehicle_seat'),
			"max_allow"=>$request->input('max_allow'),
			"contact_person"=>$request->input('contact'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_transport_vehicle",$data);
		if(count($result) > 0) {
			 return redirect('vehicle')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('vehicle')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_transport_vehicle($id){
		$result = $this->delete_data("zurich_transport_vehicle","v_id",$id);
		if(count($result) > 0) {
			 return redirect('vehicle')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('vehicle')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_transport_vehicle(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_transport_vehicle","v_id",$id);
		return view("admin.edit_transport_vehicle",["data"=>$data]);			
	}
	
	public function update_transport_vehicle(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"vehicle_seat"=>$request->input('vehicle_seat'),
			"max_allow"=>$request->input('max_allow'),
			"contact_person"=>$request->input('contact'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_transport_vehicle","v_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('vehicle')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('vehicle')->withErrors(['Some error occurred']);
		}	
	}
	
	/*transport Driver*/
	
	public function transport_driver(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data1 = $this->getAlldata("zurich_transport_vehicle","Y");
		$data = $this->getAlldata("zurich_transport_driver","Y");
		return view("admin.transport_driver_list",["data"=>$data,"data1"=>$data1]);			
	}
	public function save_transport_driver() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_transport_vehicle","Y");
		return view("admin.transport_driver_add",["data"=>$data]);			
	} 
	public function create_transport_driver(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"drive_name"=>$request->input('driver_name'),
			"license_no"=>$request->input('license_no'),
			
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_transport_driver",$data);
		if(count($result) > 0) {
			 return redirect('driver')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('driver')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_transport_driver($id){
		$result = $this->delete_data("zurich_transport_driver","d_id",$id);
		if(count($result) > 0) {
			 return redirect('driver')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('driver')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_transport_driver(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data1 = $this->getAlldata("zurich_transport_vehicle","Y");
		$data = $this->getrow("zurich_transport_driver","d_id",$id);
		return view("admin.edit_transport_driver",["data"=>$data,"data1"=>$data1]);			
	}
	
	public function update_transport_driver(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"drive_name"=>$request->input('driver_name'),
			"license_no"=>$request->input('license_no'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_transport_driver","d_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('driver')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('driver')->withErrors(['Some error occurred']);
		}	
	}
	
	/*transport route*/
	
	public function transport_route(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
			$data1 = $this->getAlldata("zurich_transport_vehicle","Y");
		$data = $this->getAlldata("zurich_transport_route","Y");
		return view("admin.transport_route_list",["data"=>$data,"data1"=>$data1]);			
	}
	public function save_transport_route() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data1 = $this->getAlldata("zurich_transport_vehicle","Y");
		return view("admin.transport_route_add",["data1"=>$data1]);			
	} 
	public function create_transport_route(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"code"=>$request->input('code'),
			"start_place"=>$request->input('start'),
			"stop_place"=>$request->input('stop'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_transport_route",$data);
		if(count($result) > 0) {
			 return redirect('route')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('route')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_transport_route($id){
		$result = $this->delete_data("zurich_transport_route","r_id",$id);
		if(count($result) > 0) {
			 return redirect('route')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('route')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_transport_route(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data1 = $this->getAlldata("zurich_transport_vehicle","Y");
		$data = $this->getrow("zurich_transport_route","r_id",$id);
		return view("admin.edit_teacher_route",["data"=>$data,"data1"=>$data1]);			
	}
	
	public function update_transport_route(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"vehicle_no"=>$request->input('vehicle_no'),
			"code"=>$request->input('code'),
			"start_place"=>$request->input('start'),
			"stop_place"=>$request->input('stop'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_transport_route","r_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('route')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('route')->withErrors(['Some error occurred']);
		}	
	}
	
	/*transport destination fee*/
	
	public function transport_destination_fee(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_transport_destination_fee","Y");
		$route=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.transport_destination_fees",["data"=>$data,"route"=>$route]);			
	}
	public function save_transport_destination_fee() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.transport_destination_fees_add",["data"=>$data]);			
	} 
	public function create_transport_destination_fee(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"code"=>$request->input('r_code'),
			"pickup"=>$request->input('pickup'),
			"drop_point"=>$request->input('drop'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('f_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_transport_destination_fee",$data);
		if(count($result) > 0) {
			 return redirect('destination_fee')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_transport_destination_fee($id){
		$result = $this->delete_data("zurich_transport_destination_fee","f_id",$id);
		if(count($result) > 0) {
			 return redirect('destination_fee')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_transport_destination_fee(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data1=$this->getAlldata("zurich_transport_route","Y");
		$data = $this->getrow("zurich_transport_destination_fee","f_id",$id);
		return view("admin.edit_transport_free",["data"=>$data,"data1"=>$data1]);			
	}
	
	public function update_transport_destination_fee(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"code"=>$request->input('r_code'),
			"pickup"=>$request->input('pickup'),
			"drop_point"=>$request->input('drop'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('f_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_transport_destination_fee","f_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('destination_fee')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	
	/*transport Allocation*/
	
	public function transport_allocation(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_transport_allocation","Y");
		$route=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.transport_allocation.list",["data"=>$data,"route"=>$route]);			
	}
	public function save_transport_allocation() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.transport_destination_fees_add",["data"=>$data]);			
	} 
	public function create_transport_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"code"=>$request->input('r_code'),
			"pickup"=>$request->input('pickup'),
			"drop_point"=>$request->input('drop'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('f_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_transport_destination_fee",$data);
		if(count($result) > 0) {
			 return redirect('transport_destination_fee')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('transport_destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_transport_allocation($id){
		$result = $this->delete_data("zurich_transport_destination_fee","f_id",$id);
		if(count($result) > 0) {
			 return redirect('transport_destination_fee')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('transport_destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_transport_allocation(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_transport_destination_fee","f_id",$id);
		return view("admin.edit_transport_free",["data"=>$data]);			
	}
	
	public function update_transport_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"code"=>$request->input('r_code'),
			"pickup"=>$request->input('pickup'),
			"drop_point"=>$request->input('drop'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('f_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_transport_destination_fee","f_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('transport_destination_fee')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('transport_destination_fee')->withErrors(['Some error occurred']);
		}	
	}
	
	
	
/*
| Common functions 
|
*/
	public function getAlldata($table,$flag) {
	    $results =  DB::table($table)->get();		
		if($flag=="Y"){
			if(count($results) > 0) {
			  $result = $results;	
			} else {
			  $result = '';
			}
		} else {
			$result  = $results[0];			 
		}
		return $result;
	}
	public function getAlldataDesc($table,$col,$flag) {
	    $results =  DB::table($table)->orderBy($col, 'desc')->get();		
		if($flag=="Y"){
			if(count($results) > 0) {
			  $result = $results;	
			} else {
			  $result = '';
			}
		} else {
			$result  = $results[0];			 
		}
		return $result;
	}
	
	
	public function getrow($table,$mid,$id) {
		//$rows = DB::select('select * from '.$table.' where '.$mid.' = ?',[$id]);
            //->update($data);
			$rows = DB::table($table) 
            ->where($mid, $id)
            ->get();
	    return $rows;
	}
	public function getrowdouble($table,$col1,$val1,$col2,$val2) {
		
			$rows = DB::table($table) 
            ->where($col1, $val1)
            ->where($col2, $val2)
            ->get();
	    return $rows;
	}
	public function updateRecords($table,$id,$value,$data) {
		$result = DB::table($table) 
            ->where($id, $value)
            ->update($data);
	    return $result;
	}

	public function save($table,$data) {
		$id = DB::table($table)->insertGetId($data);
	    return $id;
	}	
	
	public function delete_data($table,$col,$id){
		$del = DB::table($table)
		->where($col,$id)
		->delete();
		return $del;
	}

}
