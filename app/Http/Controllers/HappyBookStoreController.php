<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use Illuminate\Http\Request;

class HappyBookStoreController extends Controller
{
    public function home(){
        $categories = Category::all();
        $books = Book::orderBy('title','ASC')->simplePaginate(5);
        $totalBooks = Book::count();
        return view('home', compact('categories', 'books','totalBooks'));
    }

    public function category(Request $request){
        $categories = Category::all();
        $category = Category::where('id', $request->id)->get()->first();
        $books =  Book::where('category_id', $request->id)->simplePaginate(5);
        $totalBooks = Book::where('category_id', $request->id)->count();
        return view('category', compact('categories', 'category', 'books', 'totalBooks'));
    }

    public function detail(Request $request){
        $categories = Category::all();
        $book = Book::where('id', $request->id)->get()->first();
        $detail = Detail::where('book_id',$request->id)->get()->first();
        return view('detail', compact('categories', 'book', 'detail'));
    }

    public function contact(){
        $categories = Category::all();
        return view('contact', compact('categories'));
    }
}
