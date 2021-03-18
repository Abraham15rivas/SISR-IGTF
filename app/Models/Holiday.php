<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    protected $table = 'holidays';

    protected $fillable = [
        'name',
        'description',
        'date',
        'status',
        'bank_id'
    ];

    public function bank() {
        return $this->belongsTo(Bank::class);
    }
}
