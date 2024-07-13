<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Note extends Model
{
    use HasFactory, HasUuids;

    protected $gurarded = ['id'];
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'recipient',
        'send_date',
        'is_published',
        'heart_count',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
