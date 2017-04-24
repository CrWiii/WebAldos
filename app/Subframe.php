<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

Class Subframe extends Model{   
	protected $table = 'subframes';
	protected $fillable = ['title','content','frame_id','images_id','state','created_by','updated_by'];

	public function Images(){
		return $this->belongsTo(Images::class);
	}

	public function Frame(){
    	return $this->belongsTo(Frame::class);
    }

}