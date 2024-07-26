<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Umkm;

class UmkmController extends Controller
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
        $umkm = Umkm::paginate(4);
        return view('dashboard.pages.umkm', ['umkm' => $umkm]);
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
            'cp' => 'required|numeric',

        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $umkm = new Umkm();
        $umkm->title = $request->title;
        $umkm->content = $request->content;
        $umkm->cp= $request->cp;
        $umkm->sm= $request->sm;
        $umkm->link= $request->link;
        $umkm->image = $image;
        $umkm->save();
        return redirect('/umkm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $umkm = Umkm::find($id);
        return view('dashboard.pages.umkmupdate', ['umkm' => $umkm]);
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
            'cp' => 'required|numeric',
        ]);
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        $path = $file->storeAs('public/images', $name);

        $image = $path;

        $umkm = Umkm::find($id);

        $umkm->title = $request->title;
        $umkm->content = $request->content;
        $umkm->cp = $request->cp;
        $umkm->sm= $request->sm;
        $umkm->link= $request->link;
        $umkm->image = $image;
        $umkm->save();
        return redirect('/umkm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Umkm::find($id);
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
    public function umkminput()
    {
        return view('dashboard.pages.umkminput');
    }
}
