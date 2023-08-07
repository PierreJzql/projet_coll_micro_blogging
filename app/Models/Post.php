<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'titre',
        'contenu',
        'image',
        'id_user',
    ];

    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);

    }

}
 