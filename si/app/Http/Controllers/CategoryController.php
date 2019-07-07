<?php

namespace App\Http\Controllers;


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
    public function indexCreate(IconInterface $icon)
    {
        return view('category.create', [
            'icons' => $icon->all()
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
