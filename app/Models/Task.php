<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    Use HasFactory;

    protected $fillable = [
        'user_id',
        'card_id',
        'parent_id',
        'title',
        'is_completed',
    ];

    protected $with = ['card', 'children', 'user']; # ini dia menentukan bahwa saat model task ini diambil dari database, relasi card, children dan user itu akan selalu di injured, ini berarti informasi tentang card, children, dan user akan dimuat bersamaan dgn task dalam 1 query. Nah tentunya hal ini dapat membantu kita dalam mengurangi jumlah query ke database dan meningkatkan performa aplikasi kita.

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cards(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Task::class, 'parent_id');
    }
}
