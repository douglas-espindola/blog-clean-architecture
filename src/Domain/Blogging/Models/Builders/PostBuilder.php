<?php

    namespace Domain\Blogging\Models\Builders;


    use Illuminate\Database\Eloquent\Builder;

    class PostBuilder extends Builder
    {
        /**
         * @return self
         */
        public function published(): self
        {
            return $this->where('published', true);
        }

        public function draft(): self
        {
            return $this->where('published', false);
        }
    }
