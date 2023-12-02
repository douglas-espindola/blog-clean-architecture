<?php

namespace App\Jobs\Posts;

use Domain\Blogging\Actions\CreatePost as CreatePostAction;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreatePost implements ShouldQueue
{
    use Queueable;
    use Dispatchable;
    use SerializesModels;
    use InteractsWithQueue;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public PostValueObject $object,
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        CreatePostAction::handle(
            $this->object,
        );
    }
}
