<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Read_history extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'last_read',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['last_read', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Books::class);
    }

    public function getLastReadAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s') : null;
    }
}
