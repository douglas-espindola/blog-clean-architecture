<?php

    namespace App\Models\Concerns;

    use Illuminate\Support\Str;

    trait HasSlug
    {
        public static function bootHasSlug(): void
        {
            static::creating(static fn ($model) => $model->slug = Str::slug($model->title));

            static::updating( static fn ($model) => $model->slug = Str::slug($model->title));
        }
    }
