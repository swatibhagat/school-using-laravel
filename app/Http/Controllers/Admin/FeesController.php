<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
use Validator;

class FeesController extends Controller {

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
	
	
	
	
	/*fee category*/
	
	
	
	public function fee_category(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_fee_category","Y");
		
		
		return view("admin.fee_category_list",["data"=>$data]);			
	}
	public function save_fee_category() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		return view("admin.fee_category_add",["course"=>""]);			
	} 
	public function create_fee_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_receipt"=>$request->input('fee_receipt'),
			"desc"=>$request->input('desc'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_fee_category",$data);
		if(count($result) > 0) {
			 return redirect('fee_category')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('fee_category')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_fee_category($id){
		$result = $this->delete_data("zurich_fee_category","fee_cat_id",$id);
		if(count($result) > 0) {
			 return redirect('fee_category')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('fee_category')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_fee_category(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		
		$data = $this->getrow("zurich_fee_category","fee_cat_id",$id);
		return view("admin.edit_fee_category",["data"=>$data]);			
	}
	
	public function update_fee_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_receipt"=>$request->input('fee_receipt'),
			"desc"=>$request->input('desc'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_fee_category","fee_cat_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('fee_category')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('fee_category')->withErrors(['Some error occurred']);
		}	
	}
	
	/*fee sub category*/
	
	
	
	public function fee_sub_category(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_fee_sub_category","Y");
		$cate = $this->getAlldata("zurich_fee_category","Y");
		
		return view("admin.fee_sub_category",["data"=>$data,"cate"=>$cate]);			
	}
	public function save_fee_sub_category() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$cate = $this->getAlldata("zurich_fee_category","Y");
		return view("admin.fee_sub_category_add",["cate"=>$cate]);			
	} 
	public function create_fee_sub_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_sub_cat"=>$request->input('fee_sub_cat'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('fee_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_fee_sub_category",$data);
		if(count($result) > 0) {
			 return redirect('fee_sub_category')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('fee_sub_category')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_fee_sub_category($id){
		$result = $this->delete_data("zurich_fee_sub_category","fee_sub_cat_id",$id);
		if(count($result) > 0) {
			 return redirect('fee_sub_category')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('fee_sub_category')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_fee_sub_category(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$cate = $this->getAlldata("zurich_fee_category","Y");
		
		$data = $this->getrow("zurich_fee_sub_category","fee_sub_cat_id",$id);
		return view("admin.edit_fee_sub_category",["data"=>$data,"cate"=>$cate]);			
	}
	
	public function update_fee_sub_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_sub_cat"=>$request->input('fee_sub_cat'),
			"amount"=>$request->input('amount'),
			"fee_type"=>$request->input('fee_type'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_fee_sub_category","fee_sub_cat_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('fee_sub_category')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('fee_sub_category')->withErrors(['Some error occurred']);
		}	
	}
	
	/*fee Allocation*/
	
	
	public function fee_allocation(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_fee_allocation","Y");
		$sub_cat = $this->getAlldata("zurich_fee_sub_category","Y");
		$cate = $this->getAlldata("zurich_fee_category","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		return view("admin.fee_allocation_list",["data"=>$data,"cate"=>$cate,"sub_cat"=>$sub_cat,"course"=>$course,"batch"=>$batch]);			
	}
	public function save_fee_allocation() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$sub_cat = $this->getAlldata("zurich_fee_sub_category","Y");
		$cate = $this->getAlldata("zurich_fee_category","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		return view("admin.fee_allocation_add",["cate"=>$cate,"sub_cat"=>$sub_cat,"course"=>$course,"batch"=>$batch]);			
	} 
	public function select_batch_for_allocation($id){
		
		
		$batch = $this->getrow("zurich_batch","course_id",$id);
		
		//print_r($batch);
		echo '<option value="">Select Section</option>';
		if($batch != ""){
		foreach($batch as $dep){
			echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}	
		}	
	}
	public function create_fee_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_sub_cat"=>$request->input('fee_sub_cat'),
			"fee_for"=>$request->input('fee_for'),
			"course"=>$request->input('course'),
			"batch"=>$request->input('batch'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_fee_allocation",$data);
		if(count($result) > 0) {
			 return redirect('fee_allocation')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('fee_allocation')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_fee_allocation($id){
		$result = $this->delete_data("zurich_fee_allocation","fee_allocation_id",$id);
		if(count($result) > 0) {
			 return redirect('fee_allocation')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('fee_allocation')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_fee_allocation(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$sub_cat = $this->getAlldata("zurich_fee_sub_category","Y");
		$cate = $this->getAlldata("zurich_fee_category","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$data = $this->getrow("zurich_fee_allocation","fee_allocation_id",$id);
		return view("admin.edit_fee_allocation",["data"=>$data,"cate"=>$cate,"sub_cat"=>$sub_cat,"course"=>$course,"batch"=>$batch]);			
	}
	public function select_section_edit_allocation($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			
			foreach($batch as $batc){
				echo '<option value="'.$batc->batch_id.'">'.$batc->batch_name.'</option>';
			}
		}
	}
	public function update_fee_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_sub_cat"=>$request->input('fee_sub_cat'),
			"fee_for"=>$request->input('fee_for'),
			"course"=>$request->input('course'),
			"batch"=>$request->input('batch'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_fee_allocation","fee_allocation_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('fee_allocation')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('fee_allocation')->withErrors(['Some error occurred']);
		}	
	}
	
	/*fee_collection*/
	
	public function fee_collection(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$sub_cat = $this->getAlldata("zurich_fee_sub_category","Y");
		$cate = $this->getAlldata("zurich_fee_category","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$acadamic_year=$this->getAlldata("zurich_academic","Y");
		return view("admin.fee_collection",["cate"=>$cate,"sub_cat"=>$sub_cat,"course"=>$course,"batch"=>$batch,"acadamic_year"=>$acadamic_year]);
	}
	public function select_batch($id){
		
		
		$batch = $this->getrow("zurich_batch","course_id",$id);
		
		//print_r($batch);
		echo '<option value="">Select Section</option>';if($batch != ""){
							foreach($batch as $dep){
						echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
							}	
						}	
	}
	public function select_student($id){
				$nid=(explode("---",$id));
		//echo $nid[0]." ".$nid[1];
		$student = $this->triplewhere("zurich_student_registration","course",$nid[0],"batch",$nid[1],"acadmic_year",$nid[2]);
		
		//print_r($student);
		
		
		echo '<option value="">Select Student</option>';if($student != ""){
							foreach($student as $dep){
						echo '<option value="'.$dep->student_id.'">'.$dep->fname." ".$dep->mname." ".$dep->lname.'</option>';
							}	
						}	
	}
	public function fetch_fee_sub_category(){
		$sub_cat = $this->getAlldata("zurich_fee_sub_category","Y");		
		//print_r($sub_cat);
		$i=1;$j=1;
		echo '<style>th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style><table border="1" cellpadding: 0 cellspacing="0" align="center" style=" border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;">
					<tr>
						<th style="padding: 5px;">S. No.</th>
						<th >Fee Sub Category</th>
						
						<th >Amount</th>
						<th >Fee Type</th>
						<th >Fine</th>
						<th >Discount</th>
						<th >Select</th>
					</tr>';
					
					foreach($sub_cat as $dep){
						echo '
					<tr>
						<td style="padding: 5px;">'.$j++.'</td>
						<td >'.$dep->fee_sub_cat.'</td>
						<td >'.$dep->amount .'</td>
						<td ><input type="hidden" id="fee_type'.$i.'" value="'.$dep->fee_type.'" >'.$dep->fee_type.'</td>
						<td style="padding: 5px;" ><input type="text" id="fine'.$i.'" name="fine'.$i.'" ></td>
						<td style="padding: 5px;" ><input type="text"  name="discount'.$i.'" id="discount'.$i.'" ></td>
						<td style="padding: 5px;" ><input type="button"  name="submit'.$i.'" value="Submit" onclick="fee_submit('.$i.','.$dep->amount.','.$dep->fee_sub_cat_id.','.$dep->fee_cat.');"></td>
					</tr>
					';$i++;} echo '</table>';
	}
	
	public function submit_fee(Request $request){
		$validator = Validator::make($request->all(), [
         
			'cat' => 'cat',
            'sub_cat' => 'sub_cat',
            'amount' => 'amount',
            'academic' => 'academic',
            'course' => 'course',
            'batch' => 'batch',
            'student' => 'student',
            'dis' => 'dis',
            'fin' => 'fin',
        ]);
		echo $validator;

        /*if ($validator->passes()) {


			return response()->json(['success'=>'Added new records.']);
        }


    	return response()->json(['error'=>$validator->errors()->all()]);*/
		/*if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		
		$data = [
			"fee_cat"=>$request->input('fee_cat'),
			"fee_sub_cat"=>$request->input('fee_sub_cat'),
			"fee_for"=>$request->input('fee_for'),
			"course"=>$request->input('course'),
			"batch"=>$request->input('batch'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_fee_allocation",$data);
		if(count($result) > 0) {
			 return redirect('fee_allocation')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('fee_allocation')->withErrors(['Some error occurred']);
		}	*/
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
	
	public function doublewhere($table,$col1,$val1,$col2,$val2){
		$row=DB::table($table)->where($col1,$val1)->where($col2,$val2)->get();
		return $row;
	}
	public function triplewhere($table,$col1,$val1,$col2,$val2,$col3,$val3){
		$row=DB::table($table)->where($col1,$val1)->where($col2,$val2)->where($col3,$val3)->get();
		return $row;
	}

}
