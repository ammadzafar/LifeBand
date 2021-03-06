<?php

namespace App\Model;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use UuId;
    protected $guarded = ['id'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function familyAccounts()
    {
        return $this->belongsTo(FamilyAccount::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
