<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Liked_Locations extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'location_id'
    ];
    public $table = 'Liked_Location';
}
