<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Needhelp extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTypeAttribute($attribute)
    {
        return [
            1 => 'Food',
            2 => 'Money',
            3 => 'Cloth'
        ][$attribute];
        # code...
    }

    public function getStatusAttribute($attribute)
    {
        return [
            0 => 'Pending',
            2 => 'Rejected',
            3 => 'Approved'
        ][$attribute];
        # code...
    }
}
