<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    protected $table = 'gigs';

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyID');
    }
}
