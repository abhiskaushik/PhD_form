<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $table = 'candidates';
    public $primaryKey = 'registrationNumber';
}
