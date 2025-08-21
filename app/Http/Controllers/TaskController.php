<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * Get paginated tasks from the database
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // Get page size from request, default to 10
        $perPage = $request->query('per_page', 10);
        
        // Fetch paginated tasks from the database, sorted by created_at descending (newest first)
        $tasks = Task::orderBy('created_at', 'desc')->paginate($perPage);
        
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:Done,Pending,In Progress'
        ]);

        // Set default status if not provided
        if (!isset($validated['status'])) {
            $validated['status'] = 'Pending';
        }

        // Create a new task
        $task = Task::create($validated);

        return response()->json($task, 201);
    }
}
