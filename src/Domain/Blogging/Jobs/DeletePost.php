<?php

namespace Domain\Blogging\Jobs;

use Domain\Blogging\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeletePost implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public readonly string $postID
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
       $post = Post::find($this->postID);
       $post->delete();
    }
}
