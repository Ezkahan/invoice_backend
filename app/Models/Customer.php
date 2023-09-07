<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function sessions(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, Session::class);
    }

    public function scopeUserCount(): int
    {
        return $this->users()->count() ?? 0;
    }

    public function scopeInvoiceCountCount(): int
    {
        return $this->invoices()->count() ?? 0;
    }

    public function scopeTotalOfPrice(): int
    {
        return $this->sessions()
            ->sum(['appointment', 'activated'])
            ->get();
    }
}
