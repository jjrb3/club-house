<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CategoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categoryRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('si.home');
    }


    public function detail()
    {
        return view('detail', [
            'categories' => $this->categoryRepository->allWithProducts()
        ]);
    }
}
