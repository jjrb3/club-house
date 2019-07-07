<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\IconInterface;
use App\Repositories\Contracts\ProductInterface;
use http\Client\Request;

class ProductController extends Controller
{
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductInterface $product)
    {
        $this->middleware('auth');
        $this->productRepository  = $product;
    }

    /**
     * Show the application create product.
     *
     * @return mixed
     */
    public function indexCreate(int $categoryId)
    {
        return view('category.product.create', [
            'category_id' => $categoryId
        ]);
    }

    /**
     * Create a new category
     *
     * @param CategoryRequest $request
     * @return mixed
     */
    public function create(ProductRequest $request)
    {
        $result = $this->productRepository->create($request->all());

        return view('category.product.results', [
            'result' => $result
        ]);
    }
}
