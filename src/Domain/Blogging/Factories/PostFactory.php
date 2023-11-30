<?php

    namespace Domain\Blogging\Factories;

    use Domain\Blogging\ValueObjects\PostValueObject;

    class PostFactory
    {
        /**
         * @param array $attributes
         * @return PostValueObject
         */
        public static function create(array $attributes): PostValueObject
        {
            return new PostValueObject(
                title: $attributes['title'],
                body: $attributes['body'] ?? null,
                description: $attributes['description'] ?? null,
            );
        }
    }
