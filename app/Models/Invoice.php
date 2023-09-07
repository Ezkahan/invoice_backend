<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'user_count', 'amount_of_events', 'total_price', 'started_at', 'ended_at'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
