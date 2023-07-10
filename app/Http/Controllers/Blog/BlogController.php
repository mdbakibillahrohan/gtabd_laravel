<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Search = $request->search_value ?? "";
        if ($Search != "") {
            $Blogs = Blog::where('hotel_name', 'LIKE', "%$Search%")->paginate(20);
        } else {
            $Blogs = Blog::paginate(20);
        }
        return view('backend.pages.blog.list_blog', ['Blogs' => $Blogs, 'search_value' => $Search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog.blog_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validated = $request->validate(
            [
                'image' => 'required',
                'title' => 'required',
                'slug' => 'required|unique:blogs,slug',
                'post' => 'required|min:100',
            ]
        );

        if ($Validated) {
            $Blog = new Blog();
            $file = Storage::putFile('uploaded', $request->file('image'));
            if ($file) {
                $Blog->image = $file;
                $Blog->title = $request->title;
                $Blog->slug = $request->slug;
                $Blog->post = $request->post;
                if ($Blog->save()) {
                    $notification = [
                        "type" => "success",
                        "msg" => "Blog Successfully Added"
                    ];
                    session()->flash('notification', $notification);
                    return redirect()->back();
                }
                $notification = [
                    "type" => "warning",
                    "msg" => "Error Occured"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "warning",
                "msg" => "Image uploading failed"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.pages.blog.edit_blog', ['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Blog = Blog::find($id);
        $Validated = $request->validate(
            [
                'title' => 'required',
                'slug' => 'required',
                'post' => 'required|min:100',
            ]
        );
        if ($Validated) {
            if ($request->hasFile('image')) {
                if (Storage::delete($Blog->image)) {
                    $file = Storage::putFile('uploaded', $request->file('image'));
                    if ($file) {
                        $Blog->image = $file;
                    } else {
                        $notification = [
                            "type" => "warning",
                            "msg" => "Image uploading failed"
                        ];
                        session()->flash('notification', $notification);
                        return redirect()->back();
                    }
                }
            }

            $Blog->title = $request->title;
            $Blog->slug = $request->slug;
            $Blog->post = $request->post;


            if ($Blog->update()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Blog Successfully Updated"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }

            $notification = [
                "type" => "warning",
                "msg" => "Error Occured"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::find($id);
        if (Storage::delete($Blog->image)) {
            if ($Blog->delete()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Blog Successfully Deleted"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "warning",
                "msg" => "Error Occured"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }
}
