<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $table = 'calon';
    protected $guarded = [];


    //define relationship dengan table sesi 
    // = 1 sesi banyak calon
    // = 1 calon banyak sesi
    public function sesi(){
    	return $this->belongsTo('App\Sesi', 'sesi_id', 'id');
    }
}
