<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{

	protected $table = 'events';
	protected $fillable = ['description','content','state','created_by','updated_by'];

	public function Images(){
		return $this->belongsToMany(Images::class,'event_images','images_id','event_id');
	}
}