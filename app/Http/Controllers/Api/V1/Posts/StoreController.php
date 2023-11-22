<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\StoreRequest;
use App\Jobs\Posts\CreatePost;
use Domain\Blogging\Factories\PostFactory;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): Response
    {
        CreatePost::dispatch(
            PostFactory::create($request->validated()
            ),
        );

        return response(
            null,
            response::HTTP_CREATED
        );
    }
}
