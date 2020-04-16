<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class EmployeeController extends Controller {

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

	/*--------------------------------------Employee------------------------------------------------*/
	/*Employee type*/
	
	public function employee_type() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldata("zurich_employee_type","Y");	 
		 
		return view("admin.emp_type_list",["data"=>$data,"i"=>1]);			
	}
	
	 public function save_employee_type() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.emp_type_add",["data"=>""]);			
	}   
	
	public function create_employee_type(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"emp_type"=>$request->input('emp_type'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_employee_type",$data);
		if(count($result) > 0) {
			 return redirect('employee_type')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('employee_type')->withErrors(['Some error occurred']);
		}	
	}
	
	
	public function delete_employee_type($id){
		$result = $this->delete_data("zurich_employee_type","emp_id",$id);
		if(count($result) > 0) {
			 return redirect('employee_type')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('employee_type')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_employee_type(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_employee_type","emp_id",$id);
		return view("admin.edit_emp_type",["data"=>$data]);			
	}
	
	public function update_employee_type(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"emp_type"=>$request->input('emp_type'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_employee_type","emp_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('employee_type')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('employee_type')->withErrors(['Some error occurred']);
		}	
	}

	/*employee department*/
	
	
	public function employee_dept() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldata("zurich_employee_dept","Y");	 
		 
		return view("admin.emp_dept_list",["data"=>$data,"i"=>1]);			
	}
	 public function save_employee_dept() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.emp_dept_add",["data"=>""]);			
	} 
	public function create_employee_dept(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"dept_name"=>$request->input('emp_dept'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_employee_dept",$data);
		if(count($result) > 0) {
			 return redirect('employee_dept')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('employee_dept')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_employee_dept($id){
		$result = $this->delete_data("zurich_employee_dept","dept_id",$id);
		if(count($result) > 0) {
			 return redirect('employee_dept')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('employee_dept')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_employee_dept(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_employee_dept","dept_id",$id);
		return view("admin.edit_emp_dept",["data"=>$data]);			
	}
	
	public function update_employee_dept(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"dept_name"=>$request->input('emp_dept'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_employee_dept","dept_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('employee_dept')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('employee_dept')->withErrors(['Some error occurred']);
		}	
	}
	
	/*employee Designation*/
	
	
	public function employee_desi() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_designation","desi_id","Y");	 
		 
		return view("admin.emp_designation_list",["data"=>$data,"i"=>1]);			
	}
	 public function save_employee_desi() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.emp_designation_add",["data"=>""]);			
	} 
	public function create_employee_desi(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"desi_name"=>$request->input('emp_desi'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_designation",$data);
		if(count($result) > 0) {
			 return redirect('employee_designation')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('employee_designation')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_employee_desi($id){
		$result = $this->delete_data("zurich_designation","desi_id",$id);
		if(count($result) > 0) {
			 return redirect('employee_designation')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('employee_designation')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_employee_desi(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_designation","desi_id",$id);
		return view("admin.edit_emp_designation",["data"=>$data]);			
	}
	
	public function update_employee_desi(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"desi_name"=>$request->input('emp_desi'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_designation","desi_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('employee_designation')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('employee_designation')->withErrors(['Some error occurred']);
		}	
	}
	
	/*employee Detail*/
	
	
	public function employee_detail() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_employee_regt","emp_id","Y");	  
		 $dept = $this->getAlldata("zurich_employee_dept","Y");
		$desi = $this->getAlldata("zurich_designation","Y");
		return view("admin.emp_registration_list",["dept"=>$dept,"desi"=>$desi,"data"=>$data,"i"=>1]);			
	}
	public function delete_employee_detail($id){
		$result = $this->delete_data("zurich_employee_regt","emp_id",$id);
		if(count($result) > 0) {
			 return redirect('employee_detail')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('employee_detail')->withErrors(['Some error occurred']);
		}	
	}
	
	 	
	public function save_employee_detail() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$dept = $this->getAlldata("zurich_employee_dept","Y");
		$desi = $this->getAlldata("zurich_designation","Y");
		$etype = $this->getAlldata("zurich_employee_type","Y");
		$country = $this->getAlldata("country","Y");
		$state = $this->getAlldata("states_cities","Y");
		
		return view("admin.emp_registration_add",["dept"=>$dept,"desi"=>$desi,"etype"=>$etype,"country"=>$country,"state"=>$state]);			
	}
	
	public function create_employee_detail(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		
		if(Input::hasFile('emp_photo')){
			
			$file = Input::file('emp_photo');
			$file->move('upload', $file->getClientOriginalName());
				$filename = $file->getClientOriginalName();
		}else{
			return redirect('employee_detail/add')->withErrors(['Please select Photo']);
		}
		$data = [
			"emp_code"=>$request->input('emp_code'),
			"emp_doj"=>$request->input('emp_doj'),
			"emp_dept"=>$request->input('emp_dept'),
			"emp_designation"=>$request->input('emp_desi'),
			"emp_qualification"=>$request->input('emp_qualification'),
			"emp_exp"=>$request->input('emp_experience'),
			"emp_user_type"=>$request->input('emp_utype'),
			"emp_fname"=>$request->input('emp_fname'),
			"emp_mid_name"=>$request->input('emp_mname'),
			"emp_lname"=>$request->input('emp_lname'),
			"emp_dob"=>$request->input('emp_dob'),
			"emp_gender"=>$request->input('emp_gender'),
			"emp_present_add"=>$request->input('emp_present_add'),
			"emp_permanent_add"=>$request->input('emp_parmanent_add'),
			"emp_city"=>$request->input('emp_city'),
			"emp_pin"=>$request->input('emp_Pin'),
			"emp_country"=>$request->input('emp_country'),
			"emp_state"=>$request->input('emp_state'),
			"emp_phone"=>$request->input('emp_phone'),
			"emp_mobile"=>$request->input('emp_mobile'),
			"emp_email"=>$request->input('emp_email'),
			"emp_photo"=>$filename,
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
			//print_r($data);
		$result = $this->save("zurich_employee_regt",$data);
		if(count($result) > 0) {
			 return redirect('employee_detail/add')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('employee_detail/add')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_employee_detail(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$dept = $this->getAlldata("zurich_employee_dept","Y");
		$desi = $this->getAlldata("zurich_designation","Y");
		$etype = $this->getAlldata("zurich_employee_type","Y");
		$country = $this->getAlldata("country","Y");
		$state = $this->getAlldata("states_cities","Y");
		$data = $this->getrow("zurich_employee_regt","emp_id",$id);
		
		return view("admin.emp_registration_edit",["dept"=>$dept,"desi"=>$desi,"etype"=>$etype,"country"=>$country,"state"=>$state,"data"=>$data]);			
	}
	
	public function update_employee_detail(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$photo=$this->getrow("zurich_employee_regt","emp_id",$id);
		if($photo >0){
			foreach($photo as $pro_photo){
				if(!empty($pro_photo->emp_photo)){
					$data = [
			"emp_code"=>$request->input('emp_code'),
			"emp_doj"=>$request->input('emp_doj'),
			"emp_dept"=>$request->input('emp_dept'),
			"emp_designation"=>$request->input('emp_desi'),
			"emp_qualification"=>$request->input('emp_qualification'),
			"emp_exp"=>$request->input('emp_experience'),
			"emp_user_type"=>$request->input('emp_utype'),
			"emp_fname"=>$request->input('emp_fname'),
			"emp_mid_name"=>$request->input('emp_mname'),
			"emp_lname"=>$request->input('emp_lname'),
			"emp_dob"=>$request->input('emp_dob'),
			"emp_gender"=>$request->input('emp_gender'),
			"emp_present_add"=>$request->input('emp_present_add'),
			"emp_permanent_add"=>$request->input('emp_parmanent_add'),
			"emp_city"=>$request->input('emp_city'),
			"emp_pin"=>$request->input('emp_Pin'),
			"emp_country"=>$request->input('emp_country'),
			"emp_state"=>$request->input('emp_state'),
			"emp_phone"=>$request->input('emp_phone'),
			"emp_mobile"=>$request->input('emp_mobile'),
			"emp_email"=>$request->input('emp_email'),
			"emp_photo"=>$pro_photo->emp_photo,
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_employee_regt","emp_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('employee_detail/edit/'.$id)->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('employee_detail/edit/'.$id)->withErrors(['Some error occurred']);
		}	
				}else if(Input::hasFile('emp_photo')){
				
						$file = Input::file('emp_photo');
						$file->move('upload', $file->getClientOriginalName());
						$filename = $file->getClientOriginalName();
						
						$data = [
			"emp_code"=>$request->input('emp_code'),
			"emp_doj"=>$request->input('emp_doj'),
			"emp_dept"=>$request->input('emp_dept'),
			"emp_designation"=>$request->input('emp_desi'),
			"emp_qualification"=>$request->input('emp_qualification'),
			"emp_exp"=>$request->input('emp_experience'),
			"emp_user_type"=>$request->input('emp_utype'),
			"emp_fname"=>$request->input('emp_fname'),
			"emp_mid_name"=>$request->input('emp_mname'),
			"emp_lname"=>$request->input('emp_lname'),
			"emp_dob"=>$request->input('emp_dob'),
			"emp_gender"=>$request->input('emp_gender'),
			"emp_present_add"=>$request->input('emp_present_add'),
			"emp_permanent_add"=>$request->input('emp_parmanent_add'),
			"emp_city"=>$request->input('emp_city'),
			"emp_pin"=>$request->input('emp_Pin'),
			"emp_country"=>$request->input('emp_country'),
			"emp_state"=>$request->input('emp_state'),
			"emp_phone"=>$request->input('emp_phone'),
			"emp_mobile"=>$request->input('emp_mobile'),
			"emp_email"=>$request->input('emp_email'),
			"emp_photo"=>$filename,
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_employee_regt","emp_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('employee_detail/edit/'.$id)->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('employee_detail/edit/'.$id)->withErrors(['Some error occurred']);
		}	
					}else if(empty($pro_photo->emp_photo)){
					return redirect('employee_detail/edit/'.$id)->withErrors(['Please select Photo']);
				}
			}
			
		}
		
		
	}
		/*Bank*/
	
	public function bank() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_bank","bank_id","Y");	  
		
		return view("admin.bank",["data"=>$data,"i"=>1]);			
	}
	public function save_bank() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.bank_add",["data"=>""]);			
	} 
	public function create_bank(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"bank_name"=>$request->input('bank_name'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_bank",$data);
		if(count($result) > 0) {
			 return redirect('bank')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('bank')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_bank($id){
		$result = $this->delete_data("zurich_bank","bank_id",$id);
		if(count($result) > 0) {
			 return redirect('bank')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('bank')->withErrors(['Some error occurred']);
		}	
	}
	
	/*Bank Employee detail*/
	
	
	public function emplyoyee_bank() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_employee_bank","e_bank_id","Y");	  
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		return view("admin.employee_bank_list",["data"=>$data,"emp"=>$emp,"i"=>1]);			
	}
	public function save_emplyoyee_bank() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		$data=$this->getAlldata("zurich_designation","Y");
		$bank=$this->getAlldata("zurich_bank","Y");
		return view("admin.employee_bank_add",["data"=>$data,"emp"=>$emp,"bank"=>$bank]);			
	} 
	public function create_emplyoyee_bank(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"employee_designation"=>$request->input('emp_desi'),
			"employee_code"=>$request->input('emp_code'),
			"employee_name"=>$request->input('emp_name'),
			"bank__name"=>$request->input('emp_bank_name'),
			"bank_branch"=>$request->input('emp_bank_branch'),
			"bank_address"=>$request->input('emp_bank_add'),
			"bank_phone"=>$request->input('emp_bank_phone'),
			"bank_ifsc_code"=>$request->input('emp_bank_ifsc'),
			"bank_account_no"=>$request->input('emp_acc'),
			"bank_dd"=>$request->input('emp_dd'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_employee_bank",$data);
		if(count($result) > 0) {
			 return redirect('emplyoyee_bank')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('emplyoyee_bank')->withErrors(['Some error occurred']);
		}	
	}
	public function get_employee_code($id){
		$emp = $this->getrow("zurich_employee_regt","emp_designation",$id);
		if($emp != ""){
			foreach($emp as $em){
				echo '<option value="">Select Employee Code</option><option value="'.$em->emp_id.'"  >'.$em->emp_code.'</option>';
			}
		}	
	}
	public function get_employee_name($id){
		$emp = $this->getrow("zurich_employee_regt","emp_id",$id);
		if($emp != ""){
			foreach($emp as $em){
				echo '<option value="">Select Employee Name</option>
				<option value="'.$em->emp_id.'" >'.$em->emp_fname.' '.$em->emp_mid_name.' '.$em->emp_lname.'</option>';
			}
		}	
	}
	
	/*Employee Attendance*/
	
	public function emplyoyee_daily_attendance() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$dept = $this->getAlldata("zurich_employee_dept","Y");
		return view("admin.daily_attendance_add",["dept"=>$dept]);			
	} 
	/*ajax code to display employee on the daily attendance page*/
	public function emplyoyee_select_attendance($id){
		
		
		$dept = $this->getrow("zurich_employee_regt","emp_dept",$id);
		//print_r($dept);
		$i=0;$j=1;
		echo '<style>th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style><table border="1" cellpadding: 0 cellspacing="0"  align="center" style=" border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;">
					<tr>
						<th style="padding: 5px;">S.No.</th>
						<th >Employee Code</th>
						<th >Name</th>
						<th >Attendance</th>
					</tr>';
					
					foreach($dept as $dep){
						echo '
					<tr>
						<td style="padding: 5px;">'.$j++.'</td>
						<td >'.$dep->emp_code.'</td>
						<td >'.$dep->emp_fname.' '. $dep->emp_mid_name.' '.$dep->emp_lname .'</td>
						
						<td style="padding: 5px;" >
<input type="radio" name="attandance'.$i.'"  value="Present" onclick="taking_attendabce('.$dep->emp_id.', this.value);" >Present &nbsp;&nbsp;
<input type="radio"  name="attandance'.$i.'" value="Absent" onclick="taking_attendabce('.$dep->emp_id.', this.value);" >Absent &nbsp;&nbsp;
<input type="radio"  name="attandance'.$i.'" value="Leave" onclick="taking_attendabce('.$dep->emp_id.',this.value);" >Leave</td>
					</tr>
					';$i++;} echo '</table>';
	}
	
	public function taking_attendance($id){
		//echo $id;
		$data=explode("---",$id);
		//print_r($data);
		
			$a_date=$data[0];
			$dept=$data[1];
			$emp_id=$data[2];
			$attendance=$data[3];
			
			$record=array(
				"emp_id"=>$emp_id,
				"emp_dept"=>$dept,
				"attendance_date"=>$a_date,
				
				"attendance"=>$attendance,
				"date"=>date('Y-m-d'),
				"status"=>1	
			);
		$get_data=$this->getrowdouble("zurich_employee_attendance","emp_id",$emp_id,"attendance_date",$a_date);
		if(count($get_data)>0){
			foreach($get_data as $row){ $id=$row->att_id;}
			$result = $this->updateRecords("zurich_employee_attendance","att_id",$id,$record);
				if(count($result)>0){
					echo "Updated successfully...";
				}
		}else{
			$result = $this->save("zurich_employee_attendance",$record);
			if(count($result) > 0) {
				echo "Added successfully...";
			}
		}
		
	}
	
	/*View Employee Attendance*/
	
	public function view_employee_attendance() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$dept = $this->getAlldata("zurich_employee_dept","Y");		
		$data = $this->getAlldata("zurich_employee_attendance","Y");
		return view("admin.view_employee_attendance",["data"=>$data,"dept"=>$dept]);			
	} 
	/*ajax code to display employee on the view daily attendance page*/
	public function view_daily_attendance($id){
		$data=explode("---",$id);
		
		$dept = $this->getrowdouble("zurich_employee_attendance","emp_dept",$data[1],"attendance_date",$data[0]);
		$emp = $this->getrow("zurich_employee_regt","emp_dept",$data[1]);
		//print_r($dept);
		$i=0;$j=1;
		echo '<style>th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style><table border="1" cellpadding: 0 cellspacing="0"  align="center" style=" border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;">
					<tr>
						<th style="padding: 5px;">S.No.</th>
						<th >Employee Code</th>
						<th >Name</th>
						<th >Attendance Date</th>
						<th >Attendance</th>
					</tr>';
					
					foreach($dept as $dep){
						echo '
					<tr>
						<td style="padding: 5px;">'.$j++.'</td>
						<td >';foreach($emp as $em){if($dep->emp_id==$em->emp_id){echo $em->emp_code;}}echo '</td>
						<td >';foreach($emp as $em){if($dep->emp_id==$em->emp_id){echo $em->emp_fname." ".$em->emp_mid_name." ".$em->emp_lname;}} echo'</td>
						<td style="padding: 5px;" >'.$dep->attendance_date.'</td>
						<td style="padding: 5px;" >'.$dep->attendance.'</td>
					</tr>
					';$i++;} echo '</table>';
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