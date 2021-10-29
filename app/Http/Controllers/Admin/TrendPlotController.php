<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPelanggan;
use RealRashid\SweetAlert\Facades\Alert;


class TrendPlotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Halaman Utama Trend Plot
    public function index()
    {
        $data = DataPelanggan::all();
        return view('Admin.trendPlot', compact('data'));
    }

    // API Data Simple gabungan semua bulan
    public function dataSimpleApi()
    {
        $data = DataPelanggan::all();
        $arrayTemp = [];
        foreach ($data as $dataP) {
            $arrayTemp[] = [
                $dataP['januari'],
                $dataP['februari'],
                $dataP['maret'],
                $dataP['april'],
                $dataP['mei'],
                $dataP['juni'],
                $dataP['juli'],
                $dataP['agustus'],
                $dataP['september'],
                $dataP['oktober'],
                $dataP['november'],
                $dataP['desember'],
            ];
        }
        return json_encode($arrayTemp);
    }

    // function tambah data pelanggan
    public function tambahDataPelanggan(Request $request)
    {
        $data = [
            'tahun'     => $request->tahun,
            'januari'   => $request->januari,
            'februari'  => $request->februari,
            'maret'     => $request->maret,
            'april'     => $request->april,
            'mei'       => $request->mei,
            'juni'      => $request->juni,
            'juli'      => $request->juli,
            'agustus'   => $request->agustus,
            'september' => $request->september,
            'oktober'   => $request->oktober,
            'november'  => $request->november,
            'desember'  => $request->desember,
        ];
        DataPelanggan::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan')->autoClose(500000);
        return redirect('/trendPlot');
    }

    // function hapus data pelanggan
    public function hapusDataPelanggan(Request $request, $id)
    {
        DataPelanggan::destroy($id);
        Alert::success('Sukses', 'Data Berhasil Dihapus')->autoClose(500000);
        return redirect('/trendPlot');
    }

    public function detailTrendPlotSimple()
    {
        return view('Admin.trendPlotSimple');
    }

    public function detailTrendPlotMultiple()
    {
        return view('Admin.trendPlotMultiple');
    }


    // Function Testing
    public function testApiData()
    {
        $data = DataPelanggan::all();
        $arrayTemp = [];
        foreach ($data as $dataP) {
            $arrayTemp[] = [
                $dataP['januari'],
                $dataP['februari'],
                $dataP['maret'],
                $dataP['april'],
                $dataP['mei'],
                $dataP['juni'],
                $dataP['juli'],
                $dataP['agustus'],
                $dataP['september'],
                $dataP['oktober'],
                $dataP['november'],
                $dataP['desember'],
            ];
        }
        return json_encode($arrayTemp);
    }
}
