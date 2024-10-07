<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PemasukanController extends Controller
{
    public function view(Request $request)
    {
        $keyword = $request->keyword;
        $data = pemasukan::where('keterangan', 'like', '%' . $keyword . '%')
            // ->orWhere('gender', $keyword)
            // ->orWhere('tanggal', 'like', '%' . $keyword . '%')
            // ->orWhereHas('nominal', function ($query) use ($keyword) {
            //     $query->where('nominal', 'like', '%' . $keyword . '%');
            // })
            ->get();
        return view('/pemasukan', ['data' => $data], ['halaman' => 'pemasukan']);
    }

    // public function show($id)
    // {
    //     $data = pemasukan::findOrFail($id);
    //     return view('/pemasukan-detail', ['data' => $data], ['halaman' => 'pemasukan']);
    // }




    public function create()
    {
        $data = pemasukan::all();
        return view('/pemasukan-add', ['data' => $data], ['halaman' => 'pemasukan-add']);
    }

    public function add(Request $request)
    {

        // $data = $request->validate([
        //     'nominal' => 'unique:pemasukan',
        // ]);

        $data = pemasukan::create($request->all());

        if ($data) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'tambah data berhasil');
        }

        return redirect('/pemasukan');
    }

    public function edit(Request $request, $id)
    {
        $data = pemasukan::findOrFail($id);
        return view('pemasukan-edit', ['halaman' => 'pemasukan-edit'], ['item' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = pemasukan::findOrFail($id);

        // cara satu persatu
        // $data->nominal = $request->nominal;
        // $data->keterangan = $request->keterangan;
        // $data->tanggal = $request->tanggal;
        // $data->save();

        if ($data) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'edit data berhasil');
        }

        // cara dengan update data dengan mass assigment
        $data->update($request->all());
        return redirect('/pemasukan');
    }

    public function delete($id)
    {
        $data = pemasukan::findOrFail($id);
        return view('pemasukan-delete', ['halaman' => 'pemasukan-delete'], ['item' => $data]);
    }

    public function destroy($id)
    {
        // delete data menggunakan queri builder
        // $deletePemasukan = DB::table('pemasukans')->where('id', $id)->delete();
        // return redirect('/pemasukan');

        // delete data menggunalkan eloquent
        $deletedPemasukan = pemasukan::findOrFail($id);
        $deletedPemasukan->delete();

        if ($deletedPemasukan) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'hapus data berhasil');
        }

        return redirect('/pemasukan');
    }
}
