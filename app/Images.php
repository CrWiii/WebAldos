<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Images extends Model{   
	protected $table = 'images';
    protected $fillable = ['id','description','route','state','created_by','updated_by'];

    public function Product(){
    	return $this->belongsTo(Product::class);
    }

    public function Events(){
		return $this->belongsToMany(Event::class,'event_images','event_id','images_id');
	}
	public function Marcket(){
		return $this->belongsTo(Marcket::class);
	}
}
