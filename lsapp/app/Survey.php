<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    // Table Name
    protected $table = 'surveys';
    // Primary Key
    public $primaryKey = 'surveyId';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
