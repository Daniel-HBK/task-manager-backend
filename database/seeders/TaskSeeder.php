<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Complete Laravel Backend',
                'description' => 'Set up Laravel API with proper routing and controllers',
                'status' => 'Done'
            ],
            [
                'title' => 'Design Database Schema',
                'description' => 'Create ERD and define relationships between users, tasks, and projects tables',
                'status' => 'Done'
            ],
            [
                'title' => 'Implement Authentication',
                'description' => 'Add JWT-based authentication with login, register, and logout functionality',
                'status' => 'In Progress'
            ],
            [
                'title' => 'Create Task CRUD API',
                'description' => 'Build RESTful endpoints for creating, reading, updating, and deleting tasks',
                'status' => 'In Progress'
            ],
            [
                'title' => 'Build Frontend Components',
                'description' => 'Develop reusable React components for task cards, lists, and forms',
                'status' => 'Pending'
            ],
            [
                'title' => 'Add Pagination Support',
                'description' => 'Implement pagination for task list in both backend and frontend',
                'status' => 'Done'
            ],
            [
                'title' => 'Write Unit Tests',
                'description' => 'Create comprehensive unit tests for all API endpoints',
                'status' => 'Pending'
            ],
            [
                'title' => 'Setup CI/CD Pipeline',
                'description' => 'Configure GitHub Actions for automated testing and deployment',
                'status' => 'Pending'
            ],
            [
                'title' => 'Add Search Functionality',
                'description' => 'Implement search feature to filter tasks by title and description',
                'status' => 'Pending'
            ],
            [
                'title' => 'Create User Dashboard',
                'description' => 'Build a personalized dashboard showing user statistics and recent tasks',
                'status' => 'Pending'
            ],
            [
                'title' => 'Implement Task Categories',
                'description' => 'Add ability to categorize tasks and filter by category',
                'status' => 'Pending'
            ],
            [
                'title' => 'Add Due Date Feature',
                'description' => 'Allow users to set and track due dates for tasks',
                'status' => 'Pending'
            ],
            [
                'title' => 'Create Mobile App',
                'description' => 'Develop React Native mobile application for iOS and Android',
                'status' => 'Pending'
            ],
            [
                'title' => 'Add Email Notifications',
                'description' => 'Send email reminders for upcoming and overdue tasks',
                'status' => 'Pending'
            ],
            [
                'title' => 'Implement Task Comments',
                'description' => 'Allow users to add comments and discussions on tasks',
                'status' => 'Pending'
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
