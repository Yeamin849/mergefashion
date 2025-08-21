<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog_allPage()
    {
        $blogs = Blog::all();

        return view('admin.blog.blog_all', compact('blogs'));
    }

    public function blog_addPage()
    {
        $blog = new Blog;

        $title = "New Blog data";

        $url = route('admin.blog_addPage');

        return view('admin.blog.blog_add', compact('blog', 'title', 'url'));
    }

    public function blog_add(Request $request)
    {
        $blog = new Blog;

        $blog->blog_id = uniqid();
        $blog->title = $request['title'];
        $blog->img_link = $request['img_link'];
        $blog->content = $request['content'];
        $blog->keyword = $request['keyword'];
        $blog->date = $request['date'];
        $blog->save();

        return redirect()->route('admin.blog_allPage')->with('success', 'Blog added successfully.');

    }

    public function blog_edit($id)
    {
        $blog = Blog::find($id);

        $title = "Blog data update";

        $url = route('admin.blog_update', ['id' => $blog->id]);

        return view('admin.blog.blog_add', compact('blog', 'title', 'url'));
    }

    public function blog_update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($blog) {

            $blog->update(['title' => $request['title'], 'img_link' => $request['img_link'], 'content' => $request['content'], 'keyword' => $request['keyword']]);

            return redirect()->route('admin.blog_allPage')->with('success', 'Blog data updated successfully.');

        } else {

            return redirect()->route('admin.blog_allPage')->with('success-trash', 'Blog not found.');

        }
    }

    public function blog_delete($id)
    {
        $blog = Blog::find($id);

        if ($blog) {

            $blog->delete();

            return redirect()->route('admin.blog_allPage')->with('success-delete', 'Blog deleted successfully');

        } else {

            return redirect()->route('admin.blog_allPage')->with('success-trash', 'Blog not found or deleted on before.');

        }
    }

    public function blog_status($id, $status)
    {
        $blog = Blog::find($id);

        if ($blog) {

            $blog->status = $status;

            $blog->save();

            return redirect()->route('admin.blog_allPage')->with('success', 'Blog status update');

        } else {

            return redirect()->route('admin.blog_allPage')->with('success-trash', 'Blog not found');

        }
    }



}
