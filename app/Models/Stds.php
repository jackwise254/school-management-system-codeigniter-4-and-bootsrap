<?php

namespace App\Models;

use CodeIgniter\Model;

class Stds extends Model
{
	protected $table = 'tbl_std6';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fname', 'lname', 'sch_id', 'class', 'stream'];

}

?>

