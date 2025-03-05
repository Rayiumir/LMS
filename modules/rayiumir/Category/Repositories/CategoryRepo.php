<?php

namespace Modules\Rayiumir\Category\Repositories;

use Modules\Rayiumir\Category\Models\Category;

class CategoryRepo
{
    public function getAll()
    {
        return Category::all();
    }

    public function allExceptById($id)
    {
        return $this->getAll()->filter(function ($item) use ($id) {
            return $item->id != $id;
        });
    }

    public function findById($id)
    {
        return Category::findOrFail($id);
    }

    public function store($data)
    {
        return Category::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'parent_id' => $data['parent_id'],
        ]);
    }



    public function update($id, $data): void
    {
        Category::where('id', $id)->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'parent_id' => $data['parent_id'],
        ]);
    }

    public function destroy($categoryId): void
    {
        Category::where('id', $categoryId)->delete();
    }

    public function tree()
    {
        return Category::where('parent_id', null)->with('subCategories')->get();
    }
}
