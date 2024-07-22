<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        $this->post('/tasks', [
            'name' => 'Test Task',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);

        $this->assertDatabaseHas('tasks', [
            'name' => 'Test Task',
            'description' => 'Test Description',
            'status' => 'pending',
        ]);
    }

    /** @test */
    public function it_can_update_a_task()
    {
        $task = Task::factory()->create();

        $this->put("/tasks/{$task->id}", [
            'name' => 'Updated Task',
            'description' => 'Updated Description',
            'status' => 'completed',
        ]);

        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'name' => 'Updated Task',
            'description' => 'Updated Description',
            'status' => 'completed',
        ]);
    }

    /** @test */
    public function it_can_delete_a_task()
    {
        $task = Task::factory()->create();

        $this->delete("/tasks/{$task->id}");

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }

    /** @test */
    public function it_can_list_tasks()
    {
        $task = Task::factory()->create();

        $response = $this->get('/tasks');

        $response->assertSee($task->name);
    }

    /** @test */
    public function it_can_show_task_details()
    {
        $task = Task::factory()->create();

        $response = $this->get("/tasks/{$task->id}");

        $response->assertSee($task->name);
        $response->assertSee($task->description);
    }
}
