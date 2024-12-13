<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\StoreCategoryRequest;
use App\Domains\Products\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()
            ->map
            ->toData();

        return [
            'data' => $categories,
        ];
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->getName(),
        ]);

        return [
            'data' => $category->toData(),
        ];
    }
}
