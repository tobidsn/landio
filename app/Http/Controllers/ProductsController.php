<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Product;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
        
            $products = Product::with('category');
            return Datatables::of($products)
                ->addColumn('action', function($book){
                return view('datatable._action', [
                    'model'    => $book,
                    'form_url' => route('products.destroy', $book->id),
                    'edit_url' => route('products.edit', $book->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $book->title . '?'
                ]);
            })->make(true);
        }

        $html = $htmlBuilder
                ->addColumn(['data' => 'name', 'name'=>'name', 'title'=>'Nama'])
                ->addColumn(['data' => 'price', 'name'=>'price', 'title'=>'Harga'])
                ->addColumn(['data' => 'short_description', 'name'=>'short_description', 'title'=>'Text'])
                ->addColumn(['data' => 'category.name', 'name'=>'category.name', 'title'=>'Kategori'])
                ->addColumn(['data' => 'action', 'name'=>'action', 'title' =>'', 'orderable'=>false, 'searchable' => false]);
        
        return view('products.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->except('cover'));

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
            $product->cover = $filename;
            $product->save();
        }

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $product->name"
        ]);

        return redirect()->route('products.index');
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
        $product = Product::find($id);
        return view('products.edit')->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        
        $product = Product::find($id);
        $product->update($request->all());

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
            if ($product->cover) {
                $old_cover = $product->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . $product->cover;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            
            // ganti field cover dengan cover yang baru
            $product->cover = $filename;
            $product->save();
        }
    
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $product->name"
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        // hapus cover lama, jika ada
        if ($product->cover) {
            $old_cover = $product->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $book->cover;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
        }

        $product->delete();
        
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data berhasil dihapus"
        ]);

        return redirect()->route('products.index');
    }
}