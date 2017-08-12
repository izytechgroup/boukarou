<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';
    protected $dates = ['published_at'];
    protected $fillable = [
        'title', 'slug', 'tags', 'image', 'description', 'idea', 'project_dev',
        'published', 'owner', 'contact', 'published_at', 'status', 'last_updated_by'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

}
