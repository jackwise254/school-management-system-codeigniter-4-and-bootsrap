<?php

namespace App\Models;

use CodeIgniter\Model;

class Querries extends Model
{
	protected $table = 'tbl_user';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fname', 'lname', 'email','role_id', 'password'];

}


   

?>

