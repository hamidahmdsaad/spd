<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesi';
    protected $guarded = []; // permision user buleh masuk, kalau ada yg user takleh masuk boh dlm [] tu..

    // guarded tak masuk form ke table/ guna kalau nak buat mass assignment
    // fillable lalu form
    // fillable dgn giarded takleh guna sekali

   

    /*
    // Accessor
    public function getCreatedAtFormatAttribute($value){
    	return $this->created_at->format('d M Y');
    }

    // accessor cara panggil dalam controller
    // $sesi->created_at_format

    contoh 
    mutator
    public function setFirstNameAttribute($value){
    	$this->attribute['first_name']= strtoupper($value);
    }

    Controller: UserConroller
    $user = new User;
    $user->first_name = $request->first_name;
    $user->save();
    */
}
