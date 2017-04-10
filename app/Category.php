<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

Class Category extends Model{   
	protected $table = 'Category';
	protected $fillable = ['id','description','state','created_by','updated_by'];
}