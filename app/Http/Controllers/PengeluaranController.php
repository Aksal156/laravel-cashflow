<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PengeluaranController extends Controller
{

    public function view(Request $request) {
        $keyword = $request->keyword;
        $data = pengeluaran::where('keterangan', 'like', '%' . $keyword . '%')
            // ->orWhere('gender', $keyword)
            // ->orWhere('tanggal', 'like', '%' . $keyword . '%')
            // ->orWhereHas('nominal', function ($query) use ($keyword) {
            //     $query->where('nominal', 'like', '%' . $keyword . '%');
            // })
            ->get();
        return view('pengeluaran' , ['data'=> $data],['halaman'=> 'pengeluaran']);
    }

    public function create() {
        $data=pengeluaran::all();
        return view('pengeluaran-add', ['data'=> $data],['halaman'=> 'pengeluaran-add']);
    }

    public function add(Request $request) {
        $data = pengeluaran::create($request->all());
        return redirect('pengeluaran');
    }

    public function edit(Request $request, $id) {
        $item = pengeluaran::find($id);
        return view('pengeluaran-edit', compact('item'), ['halaman'=> 'pengeluaran-edit']);
    }

    // public function add(){
    //     $validator = Validator::make(request()->all(),[
    //         'nominal'=>'required' ,
    //         'keterangan'=>'required' ,
    //         'tanggal'=>'required' ,
    //     ],[
    //         'nominal.required'=>'Nominal wajib di isi',
    //         'keterangan.required'=>'Keterangan wajib di isi',
    //         'tanggal.required'=>'Tanggal wajib di isi',
    //     ]);

    // //     if($validator->fails()){
    // //         return back()->with('pesan', $validator->messages()->get('*'));
    // //     }
    // //     Pengeluaran::create([
    // //         'nominal'=>request()->input('nominal'),
    // //         'keterangan'=>request()->input('keterangan'),
    // //         'tanggal'=>request()->input('tanggal'),
    // //     ]);

    // //     return redirect('/history-pengeluaran');
    // // }

    public function update(Request $request, $id)
    {
        $data = pengeluaran::findOrFail($id);

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
        return redirect('/pengeluaran');
    }

    public function delete($id)
    {
        $data = pengeluaran::findOrFail($id);
        return view('pengeluaran-delete', ['halaman' => 'pengeluaran-delete'], ['item' => $data]);
    }

    public function destroy($id)
    {
        // delete data menggunakan queri builder
        $deletePengeluaran = DB::table('pengeluarans')->where('id', $id)->delete();
        return redirect('/pengeluaran');

        // delete data menggunalkan eloquent
        // $deletedPengeluaran = pengeluaran::findOrFail($id);
        // $deletedPengeluaran->delete();

        if ($deletedPengeluaran) {
            Session::flash('status', 'berhasil');
            Session::flash('message', 'hapus data berhasil');
        }

        // return redirect('/pengeluaran');
    }
}
