<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

Class Frame extends Model{   
	protected $table = 'frames';
	protected $fillable = ['title','subtitle','frame_type','route','images_id','isVideo','video_route','content','state','created_by','updated_by'];

	public function Images(){
		return $this->belongTo(Images::class);
	}

	public function Subframes(){
    	return $this->belongsTo(Subframe::class);
    }

	
}