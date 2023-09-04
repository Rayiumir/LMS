<?php

namespace modules\LMS\Category\Repositories;

use modules\LMS\Category\Models\Category;

class CategoryRepo
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Category::all();
    }

    public function store($values): void
    {
        Category::create([
            'name' => $values->name,
            'slug' => $values->slug,
            'parent_id' => $values->parent_id,
        ]);
    }

    public function allExceptById($id): \Illuminate\Support\Collection|\Illuminate\Database\Eloquent\Collection
    {
        return $this->all()->filter(function ($item) use ($id) {
            return $item->id != $id;
        });
    }

    public function findById($id)
    {
        return Category::findOrfail($id);
    }

    public function update($id, $values): void
    {
        Category::where('id', $id)->update([
            'name' => $values->name,
            'slug' => $values->slug,
            'parent_id' => $values->parent_id,
        ]);
    }

    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }

    public function tree()
    {
        return Category::where('parent_id', null)->with('subCategories')->get();
    }
}
