<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Bad practice
        // 1. All is bad, because it can return a lot of data
        // 2. No way to attach metadata
        // 3. linking db structure to API output
        // 4. No way to signal headers/response codes

        $lessons = Lesson::all();
        return Response::json([
            'data' => $this->transformCollection($lessons)
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return Response::json([
                'error' => [
                    'message' => 'Lesson does not exist',
                ]
            ], 404);
        }

        return Response::json([
            'data' => $this->transform($lesson->toArray())
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function transformCollection($lessons)
    {
        return array_map([$this, 'transform'], $lessons->toArray());
    }

    private function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (bool) $lesson['some_bool']
        ];
    }
}
