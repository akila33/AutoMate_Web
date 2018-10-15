<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicecenter extends Model
{
    protected $fillable = [
        'id','name','regid','regyr', 'phno', 'services'
    ];
}
