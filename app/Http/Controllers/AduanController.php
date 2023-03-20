<?php

namespace App\Http\Controllers;


use App\Models\Ngaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->validate([
        
            "klasifikasi" => "required",
            "laporan" => "required",
            "pengguna_id" => "required",
            "tglkejadian" => "required",
            "status" => "",
            "alamat" => "required",
            "tanggapan" => "",
            "lampiran" => "image|file|mimes:jpeg,png,jpg|max:20000",
            
        ]);
        if ($request->file('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('post-image');
        }
        Ngaduan::create($data);
        return redirect('user')->with('berhasil','Laporan berhasil di kirim');
    
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
        $record = Ngaduan::findorfail($id);
        return view(
            'Dashboard.status',['title' => 'Tanggapan'],
            
            compact('record')
            );
       
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
        $record = Ngaduan::findorfail($id);
        $record->update($request->all());
        return redirect('/hasil-pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
