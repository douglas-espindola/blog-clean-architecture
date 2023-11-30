<?php

    namespace Domain\Blogging\ValueObjects;

    class PostValueObject
    {
        public function __construct(
            public string $title,
            public null|string $body,
            public null|string $description,
            public null|bool $published = false,
        ){}

        /**
         * @return array
         */
        public function toArray(): array
        {
            return [
                'title' => $this->title,
                'body' => $this->body,
                'description' => $this->description,
                'published' => $this->published,
            ];
        }
    }
