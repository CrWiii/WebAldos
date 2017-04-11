<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Type extends Model{
	protected $table = 'type';
    protected $fillable = ['id','description','images_id','category_id','state','created_by','updated_by'];
}
