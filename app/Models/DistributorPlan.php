<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorPlan extends Model
{
    protected $fillable = [
        'user_id',
        'plan_type',
        'plan_desc',
        'status',
    ];
}
