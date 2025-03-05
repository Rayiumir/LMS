<?php

namespace Modules\Rayiumir\Category\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Rayiumir\Category\Models\Category;
use Modules\Rayiumir\Category\Repositories\CategoryRepo;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $categoryRepo;

    public function setUp(): void
    {
        parent::setUp();
        $this->categoryRepo = new CategoryRepo();
    }

    public function test_index()
    {
        Category::factory()->count(3)->create();

        $response = $this->get(route('categories.index'));

        $response->assertStatus(200);
        $response->assertViewIs('Category::index');
        $response->assertViewHas('categories');
    }

    public function test_edit()
    {
        $category = Category::factory()->create();

        $response = $this->get(route('categories.edit', $category->id));

        $response->assertStatus(200);
        $response->assertViewIs('Category::edit');
        $response->assertViewHas('category');
        $response->assertViewHas('categories');
    }

    public function test_store()
    {
        $data = [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'parent_id' => null,
        ];

        $response = $this->post(route('categories.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_update()
    {
        $category = Category::factory()->create();

        $data = [
            'name' => 'Updated Category',
            'slug' => 'updated-category',
            'parent_id' => null,
        ];

        $response = $this->put(route('categories.update', $category->id), $data);

        $response->assertRedirect(route('categories.index'));
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_destroy()
    {
        $category = Category::factory()->create();

        $response = $this->delete(route('categories.destroy', $category->id));

        $response->assertRedirect();
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
