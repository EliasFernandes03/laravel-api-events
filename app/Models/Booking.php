<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'email',
        'phone',
        'begin_date',
        'end_date',
        'status',
    ];

    public static function getTableName(): string
    {
        return with(new self())->getTable();
    }
}
