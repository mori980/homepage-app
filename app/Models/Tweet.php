<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;

class Tweet extends Model
{
    protected $fillable = ['id','content','created_at','updated_at','goodCount'];
    use HasFactory;

    public function tweet_comment()
    {
        return $this -> hasMany(comment::class);
    }
}
