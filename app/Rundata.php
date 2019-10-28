<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rundata extends Model
{
    protected $table = 'rundatas';
    
    protected $fillable = [
        'runmode','runtime','rundistance','hraverage','
        calorie','hrgraph','gpsdistance','daterun'
    ]; 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
