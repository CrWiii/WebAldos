<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Images extends Model{   
	protected $table = 'images';
    protected $fillable = ['id','description','route','order_number','state','created_by','updated_by'];

    public function Product(){
    	return $this->belongsTo(Product::class);
    }

    public function Events(){
		return $this->belongsToMany(Event::class,'event_images','event_id','images_id');
	}
	public function Marcket(){
		return $this->belongsTo(Marcket::class);
	}

	public function Subframe(){
    	return $this->belongsTo(Subframe::class);
    }
    public function Frame(){
    	return $this->belongsTo(Frame::class,'frame_id','id');
    }
}
