<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class TimeTableController extends Controller {

	public function __construct(){
	}
	
	/**
	 * @Dashboard
	 */
	public function index(){ 
		if(!Session::get('adid'))
		{		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}			
		return view("admin.home");
	}
	
	public function create_time_table()
	{
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}	
		$academic = $this->getAlldata("zurich_academic","Y"); 
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		$emp = $this->getAlldata("zurich_employee_regt","Y");
		$suject = $this->getAlldata("zurich_subject","Y");
		$suj_emp = $this->getAlldata("zurich_subject_allocation","Y");
		return view("admin.create_time_table",["suject"=>$suject,"emp"=>$emp,"suj_emp"=>$suj_emp,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"i"=>1]);
	}
	
	public function select_section_for_allocation($id)
	{
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	public function select_subject($str)
	{
		//echo $str;
		$nstr=explode("---",$str);
		$sub=["course"=>$nstr[0],"batch"=>$nstr[1],"academic"=>$nstr[2]];
		$suject = $this->getrowconditions("zurich_subject_allocation",$sub);
		
		if(empty($suject)){
			echo "Not Found";
		}else{
			echo '<option value="">Select Subject</option>';
			foreach($suject as $co)
			{
				$s_name = $this->getrow("zurich_subject","id",$co->subject);
				foreach($s_name as $sn)
				echo '<option value="'.$co->subject.'">'.$sn->sub_name.'</option>';
				
			}
		}
		
	}
	public function select_teacher($str)
	{
		//echo $str;
		$nstr=explode("---",$str);
		$teacher=["course"=>$nstr[0],"batch"=>$nstr[1],"academic"=>$nstr[2]];
		$emp = $this->getrowconditions("zurich_subject_allocation",$teacher);
		
		if(empty($emp)){
			echo "Not Found";
		}else{
			echo '<option value="">Select Teacher</option>';
			foreach($emp as $co)
			{
				$e_name = $this->getrow("zurich_employee_regt","emp_id",$co->emp_name);
				foreach($e_name as $en)
				echo '<option value="'.$co->emp_name.'">'.$en->emp_fname.' '.$en->emp_mid_name.' '.$en->emp_lname.'</option>';
				
			}
		}
		
	}
	
	public function insert_time_table(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
			$academic=$request->input('academic');
			$course=$request->input('course');
			$batch=$request->input('batch');
			$subject=$request->input('subject');
			$teacher=$request->input('teacher');
			
			$select_data=["acadamic_id"=>$academic,
			"course_id"=>$course,
			"batch_id"=>$batch,
			"subject_id"=>$subject,
			"teacher_id"=>$teacher
			];
			
			$e_name = $this->getrowconditions("zurich_time_table",$select_data);
			if(!empty($e_name)){
				return redirect('create_time_table')->withErrors(['Record already exist...']);
			}else{
				$data = [
				"acadamic_id"=>$academic,
				"course_id"=>$course,
				"batch_id"=>$batch,
				"subject_id"=>$subject,
				"teacher_id"=>$request->input('teacher'),
				"d1"=>$request->input('mon'),
				"d2"=>$request->input('tue'),
				"d3"=>$request->input('wed'),
				"d4"=>$request->input('thus'),
				"d5"=>$request->input('fri'),
				"d6"=>$request->input('sat'),
				"d7"=>$request->input('sun'),
				"date"=>date('Y-m-d'),
				"status"=>1			
				];
				$result = $this->save("zurich_time_table",$data);
				if(count($result) > 0) {
					 return redirect('create_time_table')->with('message', 'Added successfully...');				 	
				} else {
					return redirect('create_time_table')->withErrors(['Some error occurred']);
				}
			}
			
	}
/*----------------------------View Time Table------------------------------------------------*/	
	public function view_time_table()
	{
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}	
		$academic = $this->getAlldata("zurich_academic","Y"); 
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		//$emp = $this->getAlldata("zurich_employee_regt","Y");
		//$suject = $this->getAlldata("zurich_subject","Y");
		//$suj_emp = $this->getAlldata("zurich_subject_allocation","Y");
		return view("admin.view_time_table",["academic"=>$academic,"course"=>$course,"batch"=>$batch,"i"=>1]);
	}
	
		
	public function select_time_table($str)
	{
		//echo $str;
		$nstr=explode("---",$str);
		$sub=["course_id"=>$nstr[0],"batch_id"=>$nstr[1],"acadamic_id"=>$nstr[2]];
		$time_table = $this->getrowconditions("zurich_time_table",$sub);
		
		if(empty($time_table)){
			echo "Not Found";
		}else{
			echo '<style>
							th, td {text-align: center;padding: 8px;}
							tr:nth-child(even){background-color: #f2f2f2}
					</style>
					<table border="1" cellpadding: 0 cellspacing="0" align="center" style="border-collapse: collapse;border-spacing: 0; width: 100%;border: 1px solid #ddd;">
							
							<tr>
								<th>Teacher</th><th>Subject</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thusday</th>
								<th>Friday</th>
								<th>Saturday</th>
								<th>Sunday</th>
								<th>Action</th>
							</tr>
							';
						foreach($time_table as $co)
			{
				//echo $co->course_id." ".$co->batch_id." ".$co->acadamic_id." ".$co->d1." ".$co->d2." ".$co->d3;
				echo '<tr><td>';
            
				$e_name = $this->getrow("zurich_employee_regt","emp_id",$co->teacher_id);
				foreach($e_name as $en)
			    {echo $en->emp_fname.' '.$en->emp_mid_name.' '.$en->emp_lname;}
				echo '</td><td>';

				$s_name = $this->getrow("zurich_subject","id",$co->subject_id);
				foreach($s_name as $sn)
				{echo $sn->sub_name;}
				
				echo '</td><td>'. $co->d1.'</td><td>'.$co->d2.'</td>
								<td>'.$co->d3.'</td>
								<td>'.$co->d4.'</td>
								<td>'.$co->d5.'</td>
								<td>'.$co->d6.'</td>
								<td>'.$co->d7.'</td>
								<td><a class="icon-pencil" title="" href="/zurichindustries/view_time_table/edit_time_table/'.$co->t_id.'"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
								 
								<a class="icon-cross2" onclick="return confirmDel()" title="" href="/zurichindustries/view_time_table/delete/'.$co->t_id.'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
				echo '</tr>';
			}
								
							
					echo '</table>';
			
		}
		
	}
	
/*----------------------------------Edit Time Table-------------------------------*/
public function edit_time_table(Request $request,$id){
	if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}	
		
		$data = $this->getrow("zurich_time_table","t_id",$id);
		$academic = $this->getAlldata("zurich_academic","Y"); 
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		$emp = $this->getAlldata("zurich_employee_regt","Y");
		$suject = $this->getAlldata("zurich_subject","Y");
		$suj_emp = $this->getAlldata("zurich_subject_allocation","Y");
		return view("admin.edit_time_table",["data"=>$data,"suject"=>$suject,"emp"=>$emp,"suj_emp"=>$suj_emp,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"i"=>1]);
}

public function update_time_table(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		    $id=$request->input('token');
			$academic=$request->input('academic');
			$course=$request->input('course');
			$batch=$request->input('batch');
			$subject=$request->input('subject');
			$teacher=$request->input('teacher');
			
			$select_data=["acadamic_id"=>$academic,
			"course_id"=>$course,
			"batch_id"=>$batch,
			"subject_id"=>$subject,
			"teacher_id"=>$teacher
			];
			
			$e_name = $this->getrowconditions("zurich_time_table",$select_data);
			
				$data = [
				
				"d1"=>$request->input('mon'),
				"d2"=>$request->input('tue'),
				"d3"=>$request->input('wed'),
				"d4"=>$request->input('thus'),
				"d5"=>$request->input('fri'),
				"d6"=>$request->input('sat'),
				"d7"=>$request->input('sun'),
				"date"=>date('Y-m-d'),
				"status"=>1			
				];
				$result = $this->updateRecords("zurich_time_table","t_id",$id,$data);
				if(count($result) > 0) {
					 return redirect('view_time_table')->with('message', 'Updated successfully...');				 	
				} else {
					return redirect('view_time_table')->withErrors(['Some error occurred']);
				}
			
			
	}


public function delete_time_table($id){
		$result = $this->delete_data("zurich_time_table","t_id",$id);
		if(count($result) > 0) {
			 return redirect('view_time_table')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('view_time_table')->withErrors(['Some error occurred']);
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
	public function getrowtriple($table,$col1,$val1,$col2,$val2,$col3,$val3) {
		
			$rows = DB::table($table) 
            ->where($col1, $val1)
            ->where($col2, $val2)
            ->where($col3, $val3)
            ->get();
	    return $rows;
	}
	public function getrowconditions($table,$data) {
		$rows = DB::table($table) 
            ->where($data)
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
