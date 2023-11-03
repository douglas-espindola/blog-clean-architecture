<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use App\Shared\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use UuidTrait;
    use HasSlug;
    use SoftDeletes;
    use HasFactory;

    protected $table = 'posts';

    /**
     * @var string
     */
    protected string $model = Post::class;
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'description',
        'published',
        'user_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'published' => 'boolean'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id');
    }
}
