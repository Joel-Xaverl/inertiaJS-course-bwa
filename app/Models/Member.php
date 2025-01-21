<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Member extends Model
{
    Use HasFactory;

    protected $guarded = [];

    protected $with = ['user'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function memberable(): MorphTo
    {
        return $this->morphTo(); # function atau relasi ini tuh nunjukkin bahwa member ini dapat berhubungan dgn berbagai jenis model melalui polymorphism
    }
}
