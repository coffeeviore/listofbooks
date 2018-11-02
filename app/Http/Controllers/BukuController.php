<?php

namespace App\Http\Controllers;
Use App\Buku;
use Illuminate\Http\Request;

use App\Http\Requests;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Buku::all();
        return view('buku.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Buku();
        $data->title=$request->get('title');
        $data->author=$request->get('author');
        $data->date_published=$request->get('date_published');
        $data->number_of_pages=$request->get('number_of_pages');
		$data->type_of_book=$request->get('type_of_book');
        $data->save();
        return redirect('buku')->with('success', 'Data has been added');
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
        $buku=Buku::find($id);
        return view('buku.edit', compact('buku'));
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
        $data=Buku::find($id);
        $data->title=$request->get('title');
        $data->author=$request->get('author');
        $data->date_published=$request->get('date_published');
        $data->number_of_pages=$request->get('number_of_pages');
        $data->type_of_book=$request->get('type_of_book');
		$data->save();
        return redirect ('buku')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Buku::find($id);
        $data->delete();
        return redirect('buku')->with('success', 'Data has been deleted succesfully');
    }
}
