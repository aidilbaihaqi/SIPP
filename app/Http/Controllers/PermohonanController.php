<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class PermohonanController extends Controller
{
    public function index(): View {
        $data = Permohonan::all();
        $pbs = Permohonan::where('status_perkara', 'belum selesai')->count();
        $ps = Permohonan::where('status_perkara', 'selesai')->count();
        return view('pages.permohonan.index', [
            'data' => $data,
            'pbs' => $pbs,
            'ps' => $ps
        ]);
    }

    public function show(string $id): View {
        $data = Permohonan::findOrFail($id);

        return view('pages.permohonan.show', compact('data'));
    }

    public function destroy(string $id): RedirectResponse {
        $data = Permohonan::findOrFail($id);
        $data->delete();

        return redirect()->route('permohonan.index')->with(['success'=>'Data perkara permohonan berhasil dihapus!']);
    }

    public function create(): View {
        return view('pages.permohonan.create');
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

        Permohonan::create([
            'nomor_perkara' => $request->nomor_perkara,
            'klasifikasi_perkara' => $request->klasifikasi_perkara,
            'pemohon' => $request->pemohon,
            'kuasahukum_pemohon' => $request->kuasahukum_pemohon,
            'termohon' => $request->termohon,
            'kuasahukum_termohon' => $request->kuasahukum_termohon,
            'status_perkara' => $request->status_perkara,
            'lama_proses' => $request->lama_proses,
            'tanggal_sidang' => $request->tanggal_sidang,
            'jam' => $request->jam,
            'agenda' => $request->agenda,
            'ruangan' => $request->ruangan,
            'hasil_sidang' => $request->hasil_sidang
        ]);

        return redirect()->route('permohonan.index')->with(['success'=>'Data perkara permohonan berhasil ditambahkan!']);
    }

    public function edit(string $id): View {
        $data = Permohonan::findOrFail($id);

        return view('pages.permohonan.edit', compact('data'));
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

        $data = Permohonan::findOrFail($id);

        $data->update([
            'nomor_perkara' => $request->nomor_perkara,
            'klasifikasi_perkara' => $request->klasifikasi_perkara,
            'pemohon' => $request->pemohon,
            'kuasahukum_pemohon' => $request->kuasahukum_pemohon,
            'termohon' => $request->termohon,
            'kuasahukum_termohon' => $request->kuasahukum_termohon,
            'status_perkara' => $request->status_perkara,
            'lama_proses' => $request->lama_proses,
            'tanggal_sidang' => $request->tanggal_sidang,
            'jam' => $request->jam,
            'agenda' => $request->agenda,
            'ruangan' => $request->ruangan,
            'hasil_sidang' => $request->hasil_sidang
        ]);

        return redirect()->route('permohonan.index')->with(['success'=>'Data perkara permohonan berhasil diubah!']);
    }
}
