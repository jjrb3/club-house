<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Repositories\Contracts\ProductInterface;


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
     * Show the application update product.
     *
     * @param int $categoryId
     * @param int $productId
     * @return mixed
     */
    public function indexUpdate(int $categoryId, int $productId)
    {
        return view('category.product.update', [
            'category_id' => $categoryId,
            'product' => $this->productRepository->getById($productId)
        ]);
    }

    /**
     * Create a new product
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

    /**
     * Update a product
     *
     * @param ProductRequest $request
     * @return mixed
     */
    public function update(ProductRequest $request)
    {
        $result = $this->productRepository->update($request->all());

        return view('category.product.results', [
            'result' => $result
        ]);
    }

    /**
     * Delete a product
     *
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        $result = $this->productRepository->delete($id);

        return view('category.product.results', [
            'result' => $result,
            'delete' => true
        ]);
    }
}
