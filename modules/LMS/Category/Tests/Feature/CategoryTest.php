<?php

namespace modules\LMS\Category\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use modules\LMS\Category\Models\Category;
use modules\LMS\User\Database\Factories\UserFactory;
use modules\LMS\User\Models\User;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function test_authenticated_user_can_see_categories_admin()
    {
        $this->actingAs(User::factory()->create());
        $this->get(to_route('category.index'))->assertOk();
    }

    public function test_user_can_create_category()
    {
        $this->actingAs($this->factory(User::class)->create());
        $this->post(to_route('category.store'), ['title' => $this->faker()->word, "slug" => $this->faker()->word])->assertOk();

        $this->assertEquals(1, Category::all());
    }


}
