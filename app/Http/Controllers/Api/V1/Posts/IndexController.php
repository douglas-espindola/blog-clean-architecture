<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\PostResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Domain\Blogging\Models\Post;
use Spatie\QueryBuilder\QueryBuilder;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(
            PostResource::collection(
                QueryBuilder::for(Post::class)
                    ->allowedIncludes(
                        ['user']
                    )->paginate()
            ),
            response::HTTP_OK
        );
    }
}
