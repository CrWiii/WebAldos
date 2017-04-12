<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Images extends Model{   
	protected $table = 'images';
    protected $fillable = ['id','description','route','state','created_by','updated_by'];

    public function Product(){
    	return $this->belongsTo(Product::class);
    }
}
