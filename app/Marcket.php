<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Marcket extends Model{   
	protected $table = 'Marckets';
    protected $fillable = ['description','address','images_id','state','created_by','updated_by'];

    public function Images(){
    	return $this->belongsTo(Images::class);
    }
}
