<?php

namespace App\Model;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use UuId;
    protected $guarded = ['id'];

    public function organizationUsers()
    {
        return $this->hasMany(UserAccount::class);
    }
    public function organizationGroup()
    {
        return $this->hasMany(Group::class);
    }
}
