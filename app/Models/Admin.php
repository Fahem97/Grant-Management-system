<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'password'];

    // Disable Laravel's timestamps if you don't want created_at and updated_at automatically managed
    public $timestamps = true;
}
