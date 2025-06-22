<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);
      
            // Category::firstOrCreate(                 пример если более одного атрибута, хотя прописали
            // ['title' => $data['title']],
            // ['title' => $data['title']]);

        return redirect()->route('admin.tag.index');
    }
}
