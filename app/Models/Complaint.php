<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'address',
        'title',
        'description',
        'user_id'
    ];

    // Optionally, you can define hidden attributes (e.g., sensitive information)
    protected $hidden = [
        'password',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
