<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courselist;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class studentlist extends Model
{
    use HasFactory;

    public function courseData(): BelongsTo
    {
        return $this->belongsTo(courselist::class, 'course', 'id');
    }
}
