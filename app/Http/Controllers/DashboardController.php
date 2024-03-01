<?php

namespace App\Http\Controllers;

use App\Models\Gugatan;
use Illuminate\View\View;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View {
        $dgbs = Gugatan::where('status_perkara', 'belum selesai')->count();
        $dgs = Gugatan::where('status_perkara', 'selesai')->count();
        $dpbs = Permohonan::where('status_perkara', 'belum selesai')->count();
        $dps = Permohonan::where('status_perkara', 'selesai')->count();

        $gugatan = Gugatan::latest()->paginate(5);
        $permohonan = Permohonan::latest()->paginate(5);

        return view('pages.dashboard', [
            'dgbs' => $dgbs,
            'dgs' => $dgs,
            'dpbs' => $dpbs,
            'dps' => $dps,
            'gugatan' => $gugatan,
            'permohonan' => $permohonan
        ]);
    }
}
