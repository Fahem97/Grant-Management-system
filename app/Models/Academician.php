<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academician extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'staff_number', 'email', 'college', 'department', 'position'
    ];

    public function ledGrants()
    {
        return $this->hasMany(ResearchGrant::class, 'project_leader_id');
    }

    public function grants()
    {
        return $this->belongsToMany(ResearchGrant::class, 'grant_members');
    }
}
