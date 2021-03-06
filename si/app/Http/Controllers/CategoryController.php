<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\IconInterface;
use App\Repositories\Contracts\ProductInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $iconRepository;
    protected $categoryRepository;
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IconInterface $icon, CategoryInterface $category, ProductInterface $product)
    {
        $this->middleware('auth');
        $this->iconRepository     = $icon;
        $this->categoryRepository = $category;
        $this->productRepository  = $product;
    }

    /**
     * Show the application category.
     *
     * @return mixed
     */
    public function index()
    {
        return view('category.index', [
            'categories' => $this->categoryRepository->all()
        ]);
    }

    /**
     * Show the application update category.
     *
     * @param int $id
     * @return mixed
     */
    public function indexUpdate(int $id)
    {
        return view('category.update', [
            'icons' => $this->iconRepository->all(),
            'category' => $this->categoryRepository->getById($id),
            'products' => $this->productRepository->allByCategory($id)
        ]);
    }

    /**
     * Show the application create category.
     *
     * @return mixed
     */
    public function indexCreate()
    {
        return view('category.create', [
            'icons' => $this->iconRepository->all()
        ]);
    }

    /**
     * Create a new category
     *
     * @param CategoryRequest $request
     * @return mixed
     */
    public function create(CategoryRequest $request)
    {
        $category = $this->categoryRepository->create($request->all());

        return view('category.results', [
            'result' => $category,
            'delete' => false
        ]);
    }

    /**
     * Update a category
     *
     * @param CategoryRequest $request
     * @return mixed
     */
    public function update(CategoryRequest $request)
    {
        $category = $this->categoryRepository->update($request->all());

        return view('category.results', [
            'result' => $category,
            'delete' => false
        ]);
    }

    /**
     * Delete a category
     *
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        $result = $this->categoryRepository->delete($id);

        return view('category.results', [
            'result' => $result,
            'delete' => true
        ]);
    }
}
