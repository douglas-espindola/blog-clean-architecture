<?php

    namespace App\Shared;

    use Illuminate\Support\Str;

    trait UuidTrait
    {
        /**
         * @return void
         */
        protected static function bootUuidTrait(): void
        {
            static::creating(static function ($model) {
               if(empty($model->{$model->getKeyName()})) {
                   $model->{$model->getKeyName()} = Str::uuid()->toString();
               }
            });
        }

        /**
         * @return bool
         */
        public function getIncrementing(): bool
        {
            return false;
        }

        /**
         * @return string
         */
        public function getKeyType(): string
        {
            return 'string';
        }
    }
