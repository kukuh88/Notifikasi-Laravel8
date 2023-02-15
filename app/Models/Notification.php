<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'type', 'notifiable_id', 'notifiable_type', 'data', 'read_at'
    ];

    // protected $fillable = [
    //     'message', 'icon', 'status'
    // ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsToThrough(User::class, Order::class, 'user_id', 'id');
    }
}