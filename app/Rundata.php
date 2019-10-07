<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rundata extends Model
{
    protected $fillable = [
        'runmode','runtime','rundistance','runcal','hrbegin','hrgraph','gpsdistance'
    ]; 
}
