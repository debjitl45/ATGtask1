<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
	public function getDates(){
		return ['created_at','updated_at','due_date'];
	}
    protected $table='users';
}
?>
