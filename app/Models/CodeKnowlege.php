<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeKnowlege extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "code_knowledges";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(language::class);
    }
}
