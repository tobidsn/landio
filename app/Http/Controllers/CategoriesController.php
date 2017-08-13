<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            
            $categories = Category::select(['id', 'name']);
            return Datatables::of($categories)
                ->addColumn('action', function($category){
                return view('datatable._action', [
                    'model'    => $category,
                    'form_url' => route('categories.destroy', $category->id),
                    'edit_url' => route('categories.edit', $category->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $category->name . '?'
                ]);
            })->make(true);
        }
        
        $html = $htmlBuilder
                ->addColumn(['data' => 'name', 'name'=>'name', 'title'=>'Nama'])
                ->addColumn(['data' => 'action', 'name'=>'action', 'title' =>'', 'orderable'=>false, 'searchable' => false]);

        return view('categories.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->except('cover'));

        // isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
            // Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
            // mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_cover->move($destinationPath, $filename);
            // mengisi field cover di product dengan filename yang baru dibuat
            $category->cover = $filename;
            $category->save();
        }

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan $category->name"
        ]);

        return redirect()->route('categories.index');
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
        $category = Category::find($id);
        return view('categories.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        if ($request->hasFile('cover')) {
            // menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
            $extension = $uploaded_cover->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            // memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
            // hapus cover lama, jika ada
            if ($category->cover) {
                $old_cover = $category->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . $category->cover;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            
            // ganti field cover dengan cover yang baru
            $category->cover = $filename;
            $category->save();
        }

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $category->name"
        ]);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Category::destroy($id)) return redirect()->back();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Penulis berhasil dihapus"
        ]);

        return redirect()->route('categories.index');
    }
}
