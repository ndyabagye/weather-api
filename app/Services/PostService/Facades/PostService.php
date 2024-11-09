<?php

namespace App\Services\PostService\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\PostService\Repositories\PostServiceInterface;

/**
 * @see \App\Services\PostService\Repositories\PostServiceInterface
 * @mixin \App\Services\PostService\Repositories\PostServiceInterface
 */
class PostService extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PostServiceInterface::class;
    }
}