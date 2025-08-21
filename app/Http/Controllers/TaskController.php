<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * Get all tasks with hardcoded data
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Setup Development Environment',
                'description' => 'Install and configure Laravel, Next.js, and all necessary dependencies for the project',
                'status' => 'Done'
            ],
            [
                'id' => 2,
                'title' => 'Design Database Schema',
                'description' => 'Create ERD and define relationships between users, tasks, and projects tables',
                'status' => 'Done'
            ],
            [
                'id' => 3,
                'title' => 'Implement Authentication',
                'description' => 'Add JWT-based authentication with login, register, and logout functionality',
                'status' => 'In Progress'
            ],
            [
                'id' => 4,
                'title' => 'Create Task CRUD API',
                'description' => 'Build RESTful endpoints for creating, reading, updating, and deleting tasks',
                'status' => 'In Progress'
            ],
            [
                'id' => 5,
                'title' => 'Build Frontend Components',
                'description' => 'Develop reusable React components for task cards, lists, and forms',
                'status' => 'Pending'
            ],
            [
                'id' => 6,
                'title' => 'Add Real-time Updates',
                'description' => 'Implement WebSocket connections for live task status updates across users',
                'status' => 'Pending'
            ],
            [
                'id' => 7,
                'title' => 'Write Unit Tests',
                'description' => 'Create comprehensive test suites for both backend API and frontend components',
                'status' => 'Pending'
            ],
            [
                'id' => 8,
                'title' => 'Deploy to Production',
                'description' => 'Set up CI/CD pipeline and deploy application to cloud hosting platform',
                'status' => 'Pending'
            ]
        ];

        return response()->json($tasks);
    }
}
