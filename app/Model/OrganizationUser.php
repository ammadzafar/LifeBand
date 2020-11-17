<?php

namespace App\Model;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    use UuId;
    protected $guarded = ['id'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
