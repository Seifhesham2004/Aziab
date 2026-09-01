<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'phone', 'subject', 'trip', 'guests', 'preferred_date', 'message', 'is_read',
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'is_read'        => 'boolean',
    ];

    public static function unreadCount(): int
    {
        return static::where('is_read', false)->count();
    }
}
