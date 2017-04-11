<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{   
	protected $table = 'products';
    protected $fillable = ['id','description','type_id','category_id','images_id','state','created_by','updated_by'];
}
