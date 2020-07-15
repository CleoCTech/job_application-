<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //Table name
    protected $table='applications';
    //Primary Key
    public $primarykey ='application_id';
    //timestamps
    public $timestamps=true;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}