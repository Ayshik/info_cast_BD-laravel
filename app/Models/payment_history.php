<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_history extends Model
{
    use HasFactory;
    protected $table="payment_history";
    public $timestamps= false;

}
