<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;

    public static function amo_type($date)
    {
        // https://www.php.net/manual/en/function.strftime.php
        return Carbon::parse($date)->formatLocalized('%e %B %Y г. %H:%M');
    }
}
