<?php

namespace App\Controllers;


use App\Models\Querries;
use App\Models\Exams;
class School extends BaseController
{
  public function index()
    {
        return view('home');
    }
   
  public function adminSignup()
    {


		$querries = new Querries();
		$querries->save($_POST);
		// $builder=$querries->table('tbl_user');

  //       $data['data'] = $builder->orderBy('id', 'DESC')->paginate(10);

  //       $data['pagination_link'] = $querries->pager;

        return view('home');
	}
    
    public function adminRegister()
    {
    	return view('register');
    } 



	public function addvalidation()
	{
		helper(['form', 'url']);
        
        if(! $this->validate([
            'fname' 	=> 'required|min_length[3]',
            'lname' 	=> 'required|min_length[3]',
            'email' => 'required|valid_email',
            'role_id' => 'required',
            'password'=> 'required|min_length[3]',
        ])){
        	echo "ensure valid input";
        

        } 
        else 
        {
            $querries = new Querries();
            
            $querries->save([
                'fname'   => $this->request->getVar('fname'),
                'lname'   => $this->request->getVar('lname'),
                'email'  => $this->request->getVar('email'),
                'role_id'   => $this->request->getVar('role_id'),
                'passwod'  => sha1($this->request->getVar('password')),
            ]);          
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Added');

            return $this->response->redirect(site_url('/home'));
        }
	}
	public function login()
	{
		return view('login');
	}
	public function signin()
	{
		$querries = new Querries();
		 
		if(! $this->validate([
		   'email' => 'required|valid_email',
            'password'=> 'required|min_length[3]',
        ])) {
			return view('dashboard');
		}

		else{
			$querries = new Querries();
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password'); 
			$userExist = $this->querries->adminExist($email, $password);
			echo '<pre>';
			print_r($userExist);
			echo "<pre>";
			exit();

			if ($userExist) {
				$sessionData =[
			    'id' => $userExist->id,
			    'emai' => $userExist->emial,
			    'password' => $userExist->password,

				];
				$this->session->set_userdata($sessionData);
			}
		}
	}
	     
}