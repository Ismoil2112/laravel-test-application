<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizze;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quizze::all();
        return view('quizzes.index', compact('quizzes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Quizze::create($request->all());
        return redirect()->route('quizzes.index')->with('success','Created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quizze $quizzes)
    {
        return view('quizzes.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quizze $quizzes)
    {
        $quizzes->update($request->all());
        return redirect()->route('quizzes.index')->with('success',
            'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quizze $quizzes)
    {
        $quizzes->delete();
        return redirect()->route('quizzes.index')->with('success',
            'Deleted successfully.');

    }
}
