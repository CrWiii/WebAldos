<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Type extends Model{
	protected $table = 'type';
    protected $fillable = ['id','description','images_id','category_id','state','created_by','updated_by'];

    public function Product(){
    	return $this->belongsTo(Product::class);
    }
    public function Images(){
    	return $this->belongsTo(Images::class);
    }
    public function Images_frame(){
    	return $this->belongsTo(Images::class,'images_id_frame','id');
    }
}
