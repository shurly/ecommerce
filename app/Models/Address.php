<?php

namespace App\Models;



class Address extends RModel
{
    protected $fillable = ['street', 'number', 'city', 'state', 'zip', 'complement'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
