<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchGrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'grant_provider', 'grant_amount', 'start_date', 'duration_months', 'project_leader_id'
    ];

    public function leader()
    {
        return $this->belongsTo(Academician::class, 'project_leader_id');
    }

    public function members()
    {
        return $this->belongsToMany(Academician::class, 'grant_members');
    }

    public function milestones()
    {
        return $this->hasMany(ProjectMilestone::class);
    }
}
