<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\Server\BaseApiService;
use App\Services\Server\CategoryService;
use App\Services\Server\ProductService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function __invoke()
    {
        return view('pages.index');
    }

    public function products($category, $subcategory)
    {
        $categories = app(CategoryService::class)->list();

        $category = $categories->where('slug', $subcategory)->firstOrFail();

        if ($category['parent'] ?? null) {
            $category['parentCategory'] = $categories->where('id', $category['parent'])->first();
        }

        $data =  [
            'products'        => app(ProductService::class)->list($category),
            'currentCategory' => $category,
            'categories'      => app(CategoryService::class)->list(),
        ];

        return view('pages.sub_category', $data);

    }
}
