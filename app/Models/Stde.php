<?php

namespace App\Models;

use CodeIgniter\Model;

class Stde extends Model
{
	protected $table = 'tbl_std8';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fname', 'lname', 'sch_id', 'class', 'stream'];

}

?>

