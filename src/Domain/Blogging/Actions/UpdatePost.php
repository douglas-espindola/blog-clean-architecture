<?php

    namespace Domain\Blogging\Actions;

    use Domain\Blogging\Models\Post;
    use Domain\Blogging\ValueObjects\PostValueObject;

    class UpdatePost
    {
        /**
         * @param PostValueObject $object
         * @param Post $post
         * @return bool
         */
        public static function handle(PostValueObject $object, Post $post): bool
        {
            return $post->update($object->toArray());
        }
    }
