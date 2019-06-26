<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;


class BlogPostController extends Controller
{
    public function index()
    {
        return BlogPost::all();
    }

    public function show(BlogPost $blogPost)
    {
        return $blogPost;
    }

    public function store(Request $request)
    {
        $blogPost = BlogPost::create($request->all());

        return response()->json($blogPost, 201);
    }
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update($request->all());

        return response()->json($blogPost, 200);
    }

    public function delete(BlogPost $blogPost)
    {
        $blogPost->delete();

        return response()->json(null, 204);
    }
}
