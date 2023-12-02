<?php

namespace App\Jobs\Posts;

use Domain\Blogging\Models\Post;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdatePost implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly string $postID,
        public readonly PostValueObject $object,
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $post = Post::find($this->postID);
        $post->update($this->object->toArray());
    }
}
