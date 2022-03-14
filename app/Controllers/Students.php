<?php

namespace App\Controllers;

use App\Models\Stds;
use App\Models\Stdv;
use App\Models\Stde;
use App\Models\Exams;

class Students extends BaseController
{
	function index()
	{

		$stdv = new Stdv();

        $data['tbl_std7'] = $stdv->orderBy('id', 'DESC')->paginate(10);

        $data['pagination_link'] = $stdv->pager;

        return view('student_view', $data);
	}

	function add()
	{
		return view('add_students');
	}

	function add_validation()
	{
		helper(['form', 'url']);
        
        $error = $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'class' => 'required',
            'stream'=> 'required',
            'sch_id' => 'required'
        ]);

        

        if(!$error)
        {
        	echo view('add_students', [
                'error' => $this->validator
            ]);
        } 
        else 
        {
            $stdv = new Stdv();
            
            $stdv->save([
                'fname'   => $this->request->getVar('fname'),
                'lname'   => $this->request->getVar('lname'),
                 'class'  => $this->request->getVar('class'),
                'stream' => $this->request->getVar('stream'),
                'sch_id'   => $this->request->getVar('sch_id'),
            ]);          
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Student  Added');

            return view('student_view');
        }

	}

    function fetch_single_data($id = null)
    {
    $stdv = new Stdv();

        $data['tbl_std7'] = $stdv->where('id', $id)->first();

        return view('edit_student', $data);
    }

    function edit_validation()
    {
    	helper(['form', 'url']);
        
        $error =$this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'class' => 'required',
            'stream'=> 'required',
            'sch_id' => 'required'
        ]);

        $stdv = new stdv();

        $id = $this->request->getVar('id');

        if(!$error)
        {
        	$data['tbl_std7'] = $stdv->where('id', $id)->first();
        	$data['error'] = $this->validator;
        	echo view('edit_student', $data);
        } 
        else 
        {
	        $data = [
                'fname'   => $this->request->getVar('fname'),
                'lname'   => $this->request->getVar('lname'),
                 'class'  => $this->request->getVar('class'),
                'stream' => $this->request->getVar('stream'),
                'sch_id'   => $this->request->getVar('sch_id'),
	        ];

        	$stdv->update($id, $data);

        	$session = \Config\Services::session();

            $session->setFlashdata('success', 'Students Data Updated');

        	return view('student_view');
        }
    }
    function edit($id = null)
    {
    $exmas = new Exams();

        $data['exams'] = $stdv->where('id', $id)->first();

        return view('exams', $data);
    }

    function delete($id)
    {
        $stdv = new stdv();

        $stdv->where('id', $id)->delete($id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User Data Deleted');

        // return view('student_view');
        return $this->response->redirect(site_url('/students/index'));
    }
    public function academics()
   {
       return view('staff/dashboard');
   }
    public function exams()
    {
         

        $exams = new Exams();
        $builder = $exams->table('exams');
        if($this->request->getGet('s')){
            $q = $this->request->getGet('s');

            $querry['querry'] = $builder->like('stu_name', $q)->findAll();
        }
        else{
            $querry['querry'] = $builder->findAll();
        }

        $data['exams'] = $exams->orderBy('id', 'DESC')->paginate(10);

        $data['pagination_link'] = $exams->pager;

        return view('staff/exams', $querry);
   
    }
    public function add_exam()
    {
        return view('staff/add_exam');
    }
    function exam_validation()
    {
        helper(['form', 'url']);
        
        $error = $this->validate([
            'stu_name' => 'required',
            'exam_name' => 'required',
            'created_at' => 'required',
            'MATH'=> 'required',
            'ENG' => 'required',
            'KISW' => 'required',
            'SCIE' => 'required',
            'SS/REL' => 'required'
        ]);

        

        if(!$error)
        {
            echo view('staff/add_exam', [
                'error' => $this->validator
            ]);
        } 
        else 
        {
            $exams = new Exams();
            
            $exams->save([
                'stu_name'   => $this->request->getVar('stu_name'),
                'exam_name'   => $this->request->getVar('exam_name'),
                 'created_at'  => $this->request->getVar('date_done'),
                'MATH' => $this->request->getVar('MATH'),
                'ENG'   => $this->request->getVar('ENG'),
                'KISW'   => $this->request->getVar('KISW'),
                'SCIE'   => $this->request->getVar('SCIE'),
                'SS/REL'   => $this->request->getVar('SS/REL'),
            ]);          
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'New record added');

            return view('staff/exams');
        }
    }
    function exam_delete($id)
    {
        $exams = new Exams();

        $exams->where('id', $id)->delete($id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'Record Deleted');

        // return view('student_view');
        return $this->response->redirect(site_url('/students/academics'));
    }

   public function Dash() {
        return view('dashboard');
    }
    
    public function initGraph() {
        
        $db = \Config\Database::connect();
        $builder = $db->table('exams');
        $query = $builder->select("COUNT(id) as count, exam_name as s, DAYNAME(created_at) as day");
        $query = $builder->where("DAY(created_at) GROUP BY DAYNAME(created_at), s")->get();
        $record = $query->getResult();
        $report = [];
        foreach($record as $row) {
            $report[] = array(
                'day'   => $row->day,
                'sell' => floatval($row->s)
            );
        }
        
        $data['report'] = ($report);    
        return view('chart', $data);                
    }
 
}

   

?>