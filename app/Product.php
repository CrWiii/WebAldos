<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{   
	protected $table = 'products';
    protected $fillable = ['name','description','type_id','category_id','images_id','state','created_by','updated_by'];

    public function Images(){
    	return $this->belongsTo(Images::class);
    }
    public function Type(){
    	return $this->belongsTo(Type::class);
    }
}
