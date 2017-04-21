<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

Class Subframe extends Model{   
	protected $table = 'category';
	protected $fillable = ['id','description','state','created_by','updated_by'];

	public function Images(){
		return $this->belongTo(Images::class);
	}
}