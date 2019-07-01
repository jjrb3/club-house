<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the application create category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexCreate(IconEloquentRepository $iconEloquentRepository)
    {
        return view('category.create', [
            'icons' => $iconEloquentRepository->getAll()
        ]);
    }

    /**
     * Show the application create category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->create($request->all());

        return view('category.results', [
            'category' => $category
        ]);
    }
}
