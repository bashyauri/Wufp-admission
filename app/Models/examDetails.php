<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class examDetails extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','ssce_certificate1','ssce_certificate2','exam_number1','exam_number2','exam_year1','exam_year2'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
