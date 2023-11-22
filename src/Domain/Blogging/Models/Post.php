<?php

namespace App\src\Domain\Blogging\Models;

use App\src\Shared\Concerns\HasSlug;
use App\src\Shared\Models\User;
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

    public function getRouteKeyName(): string
    {
        return 'id';
    }

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
        return $this->BelongsTo(
            User::class,
            'user_id'
        );
    }
}
