<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogPost
 *
 * @package App\Models\Blog
 *
 * @property int $parent_id
 * @property string $title
 * @property string $slug
 * @property string $description
 */
class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'description',
    ];
}
