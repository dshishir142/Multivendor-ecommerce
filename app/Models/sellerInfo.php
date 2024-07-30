<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerInfo extends Model
{
    use HasFactory;

    protected $table = 'seller_info';

    protected $guarded = [];

    protected function getSeller(){
        return $this->hasOne(User::class);
    }
}
