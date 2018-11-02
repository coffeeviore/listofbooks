<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table="buku";
	protected $primaryKey="id";
	protected $fillable=['title','author','date_published','number_of_pages','type_of_book'];
	public $timestamps = false; 
}
