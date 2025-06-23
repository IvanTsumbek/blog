<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);
      
            // Post::firstOrCreate(                 пример если более одного атрибута, хотя прописали
            // ['title' => $data['title']],
            // ['title' => $data['title']]);

        return redirect()->route('admin.post.index');
    }
}
