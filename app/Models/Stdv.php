<?php

namespace App\Models;

use CodeIgniter\Model;

class Stdv extends Model
{
	protected $table = 'tbl_std7';

	protected $primaryKey = 'id';

	protected $allowedFields = ['fname', 'lname', 'sch_id', 'class', 'stream'];

}
?>

