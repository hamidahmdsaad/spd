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
}
