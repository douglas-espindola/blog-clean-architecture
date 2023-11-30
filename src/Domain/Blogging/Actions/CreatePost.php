<?php

    namespace Domain\Blogging\Actions;

    use Domain\Blogging\Models\Post;
    use Domain\Blogging\ValueObjects\PostValueObject;

    class CreatePost
    {
        /**
         * @param PostValueObject $object
         * @return Post
         */
        public static function handle(PostValueObject $object): Post
        {
            return Post::create(array_merge(
                    $object->toArray(),
                    [
                        'user_id' => '2b4f56bb-d3a5-438c-9de0-9fccb730ab9f',
                    ]
                )
            );
        }
    }
