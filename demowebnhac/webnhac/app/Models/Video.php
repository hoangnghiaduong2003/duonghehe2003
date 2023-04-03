<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video Extends Model{
    use HasFactory;

    protected $stable = 'videos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'description', 'video_url'
    ];
}