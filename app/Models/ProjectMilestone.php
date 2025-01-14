<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMilestone extends Model
{
    use HasFactory;

    protected $fillable = [
        'research_grant_id', 'name', 'target_completion_date', 'deliverable', 'status', 'remark', 'date_updated'
    ];

    public function grant()
    {
        return $this->belongsTo(ResearchGrant::class, 'research_grant_id');
    }
}
