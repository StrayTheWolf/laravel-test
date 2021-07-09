<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('page.index', ['pages' => $pages]);
    }

    public function show($id)
    {
        $page = Page::findorFail($id);
        return view('page.show', ['page'=>$page]);
    }

    public function create()
    {
        return view('page.form');
    }

    public function edit($id)
    {
        $page = Page::findorFail($id);

        return view('page.form', ['page'=>$page]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        Page::updateOrCreate([
            'id' => $request->get('id')

        ], [
            'title' => $request->get('title'),
            'body' => $request->get('body'),
        ]);

        return redirect()->route('page');
    }
}
