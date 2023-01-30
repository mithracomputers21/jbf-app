<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method'
    ];
    
    public function member()
    {
        return $this->hasOne(Member::class);
    }
}
