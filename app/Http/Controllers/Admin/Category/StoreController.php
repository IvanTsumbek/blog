<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
      
            // Category::firstOrCreate(                 пример если более одного атрибута, хотя прописали
            // ['title' => $data['title']],
            // ['title' => $data['title']]);

        return redirect()->route('admin.category.index');
    }
}
