<?php

namespace App\Http\Controllers;

use App\Models\Gugatan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class GugatanController extends Controller
{
    public function index(): View {
        $data = Gugatan::all();
        $gbs = Gugatan::where('status_perkara', 'belum selesai')->count();
        $gs = Gugatan::where('status_perkara', 'selesai')->count();
        return view('pages.gugatan.index', [
            'data' => $data,
            'gbs' => $gbs,
            'gs' => $gs
        ]);
    }

    public function show(string $id): View {
        $data = Gugatan::findOrFail($id);

        return view('pages.gugatan.show', compact('data'));
    }

    public function destroy(string $id): RedirectResponse {
        $data = Gugatan::findOrFail($id);
        $data->delete();

        return redirect()->route('gugatan.index')->with(['success'=>'Data perkara gugatan berhasil dihapus!']);
    }

    public function create(): View {
        return view('pages.gugatan.create');
    }

    public function store(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'nomor_perkara' => 'required',
            'klasifikasi_perkara' => 'required',
            'penggugat' => 'required',
            'kuasahukum_penggugat' => 'required',
            'tergugat' => 'required',
            'kuasahukum_tergugat' => 'required',
            'status_perkara' => 'required',
            'lama_proses' => 'required',
            'tanggal_sidang' => 'required',
            'jam' => 'required',
            'agenda' => 'required',
            'ruangan' => 'required',
            'hasil_sidang' => 'text'
        ]);

        Gugatan::create([
            'nomor_perkara' => $request->nomor_perkara,
            'klasifikasi_perkara' => $request->klasifikasi_perkara,
            'penggugat' => $request->penggugat,
            'kuasahukum_penggugat' => $request->kuasahukum_penggugat,
            'tergugat' => $request->tergugat,
            'kuasahukum_tergugat' => $request->kuasahukum_tergugat,
            'status_perkara' => $request->status_perkara,
            'lama_proses' => $request->lama_proses,
            'tanggal_sidang' => $request->tanggal_sidang,
            'jam' => $request->jam,
            'agenda' => $request->agenda,
            'ruangan' => $request->ruangan,
            'hasil_sidang' => $request->hasil_sidang
        ]);

        return redirect()->route('gugatan.index')->with(['success'=>'Data perkara gugatan berhasil ditambahkan!']);
    }

    public function edit(string $id): View {
        $data = Gugatan::findOrFail($id);

        return view('pages.gugatan.edit', compact('data'));
    }

    public function update(Request $request, string $id): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'nomor_perkara' => 'required',
            'klasifikasi_perkara' => 'required',
            'penggugat' => 'required',
            'kuasahukum_penggugat' => 'required',
            'tergugat' => 'required',
            'kuasahukum_tergugat' => 'required',
            'status_perkara' => 'required',
            'lama_proses' => 'required',
            'tanggal_sidang' => 'required',
            'jam' => 'required',
            'agenda' => 'required',
            'ruangan' => 'required',
            'hasil_sidang' => 'text'
        ]);

        $data = Gugatan::findOrFail($id);

        $data->update([
            'nomor_perkara' => $request->nomor_perkara,
            'klasifikasi_perkara' => $request->klasifikasi_perkara,
            'penggugat' => $request->penggugat,
            'kuasahukum_penggugat' => $request->kuasahukum_penggugat,
            'tergugat' => $request->tergugat,
            'kuasahukum_tergugat' => $request->kuasahukum_tergugat,
            'status_perkara' => $request->status_perkara,
            'lama_proses' => $request->lama_proses,
            'tanggal_sidang' => $request->tanggal_sidang,
            'jam' => $request->jam,
            'agenda' => $request->agenda,
            'ruangan' => $request->ruangan,
            'hasil_sidang' => $request->hasil_sidang
        ]);

        return redirect()->route('gugatan.index')->with(['success'=>'Data perkara gugatan berhasil diubah!']); 
    }
}
