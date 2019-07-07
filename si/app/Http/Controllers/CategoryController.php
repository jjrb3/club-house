<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\IconInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application category.
     *
     * @param CategoryInterface $category
     * @return mixed
     */
    public function index(CategoryInterface $category)
    {
        return view('category.index', [
            'categories' => $category->all()
        ]);
    }

    /**
     * Show the application create category.
     *
     * @param IconInterface $icon
     * @return mixed
     */
    public function indexCreate(IconInterface $icon)
    {
        return view('category.create', [
            'icons' => $icon->all()
        ]);
    }

    /**
     * Create a new category
     *
     * @param CategoryRequest $request
     * @param CategoryInterface $category
     * @return mixed
     */
    public function create(CategoryRequest $request, CategoryInterface $category)
    {
        $category = $category->create($request->all());

        return view('category.results', [
            'category' => $category
        ]);
    }
}
