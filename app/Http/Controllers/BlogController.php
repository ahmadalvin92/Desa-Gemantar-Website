<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(5);
        return view('dashboard.pages.blog', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image',

        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image = $image;
        $blog->save();
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.pages.blogupdate', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validatedData = $request->validate([
            'image' => 'required|image',
        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $blog = Blog::find($id);

         $blog->title = $request->title;
         $blog->content = $request->content;
        $blog->image = $image;
        $blog->save();
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        Storage::delete($data->image);
        $data->delete();

        if ($data) {
            return redirect()->back()->with([
                'success' => 'Data Berhasil Dihapus'
            ]);
        } else {
            return redirect()->back()->with([
                'error' => 'Terjadi Kesalahan'
            ]);
        }
    }
    public function bloginput()
    {
        return view('dashboard.pages.bloginput');
    }
}
