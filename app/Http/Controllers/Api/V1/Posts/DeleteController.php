<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use Domain\Blogging\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


class DeleteController extends Controller
{
    public function __invoke(Request $request, Post $post): Response
    {
        dd($request->id, $post->id);
        // delete resource - Move to background job
        $post->delete();

        return response(
            null,
            ResponseAlias::HTTP_ACCEPTED,
        );
    }
}
