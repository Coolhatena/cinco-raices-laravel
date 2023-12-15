<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	protected $fillable = [
		'name',
		'unitary_cost',
		'img_name'
			   ];
}
