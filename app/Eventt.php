<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class Eventt extends Model{

	protected $table = 'events';
	protected $fillable = ['description','content','state','created_by','updated_by'];

	public function Images(){
		return $this->belongsToMany(Images::class,'event_images','event_id','images_id');
	}
}