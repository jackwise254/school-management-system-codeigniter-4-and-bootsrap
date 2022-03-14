<?php

namespace App\Models;

use CodeIgniter\Model;

class Exams extends Model
{
	protected $table = 'exams';

	protected $primaryKey = 'id';

	protected $allowedFields = ['stu_name', 'exam_name', 'date_done','MATH', 'ENG', 'KISW', 'SCI', 'SS/REL'];

}
	// public function adminExist($value='')
	// {
	// 	$checkExist = $this->db->where('email'= $email, 'password'= $password)
	// 					->get('tbl  _user');
	// 	if($checkExist->num_rows()> 0){
	// 		return checkExist->rows();
	// 	}

?>

