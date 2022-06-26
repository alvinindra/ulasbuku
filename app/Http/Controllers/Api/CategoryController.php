<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function index(Request $request)
    {
        $categories = (new Category())->query();
        $categories->withCount('books as total_books');
        $categories->when($request->search, function($q) use ($request) {
            $q->where('name_category','like',"%{$request->search}%");
        })->when($request->filter === 'latest', function($q) {
            $q->orderBy('created_at', 'desc');
        })->when($request->filter === 'oldest', function($q) {
            $q->orderBy('created_at', 'asc');
        })->when($request->filter === 'most_popular', function($q) {
            $q->orderBy('total_books', 'desc');
        });
        $categories = $categories->paginate(12)->withQueryString();
        return $this->sendResponse($categories, 'Data berhasil ditampilkan');
    }
}
