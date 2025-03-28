<?php

namespace App\Http\Controllers;

use App\Http\Requests\InertiaTestRequest;
use App\Models\InertiaTest;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaTestController extends Controller
{
    public function inertiaTest()
    {
        return Inertia::render('InertiaTest');
    }
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }
    public function create()
    {
        return Inertia::render('Inertia/Create');
    }
    public function new(Request $request)
    {
        $inertiaTest = new InertiaTest();

    }
    public function show($id)
    {
        return Inertia::render('Inertia/Show', compact('id'));
    }
    public function store(InertiaTestRequest $request)
    {
        $inertiaTest = new InertiaTest();
        $data = $request->validated();
        // dd($request->all());
        $inertiaTest->title = $data->title;
        $inertiaTest->content = $data->content;
        $inertiaTest->save();
        return to_route('index');
    }
}
