<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Question extends Model{   
	protected $table = 'questions';
    protected $fillable = ['id','question','answer','state','created_by','updated_by'];

}
