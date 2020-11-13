<?php

namespace App\Model;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Model;

class FamilyAccount extends Model
{
    use UuId;
    protected $guarded = ['id'];
}
