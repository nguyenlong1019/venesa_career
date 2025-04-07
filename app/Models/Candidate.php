<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'birthday',
        'gender',
        'identity_card',
        'address',
        'cv_path',
        'cover_letter',
        'status',
        'video_path',
        'cv_text_scan'
    ];

    public function application(): HasOne
    {
        return $this->hasOne(Application::class);
    }

    public function interview_candidates(): HasMany
    {
        return $this->hasMany(InterviewCandidate::class);
    }
}
