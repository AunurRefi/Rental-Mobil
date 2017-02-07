<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Request;

class MobilController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $pinjaman = DB::select('select *from pinjaman inner join merek on pinjaman.merek_mobil = merek.id inner join mobil on pinjaman.nama_mobil = mobil.id order by pinjaman.id desc');
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		return view ('pinjaman',['pinjaman'=>$pinjaman]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$merek = DB::select('select *from merek order by id desc');
		return view ('tambah',['merek'=>$merek]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function ambil()
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		return view ('ambil',['pinjaman'=>$pinjaman]);	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function pengembalian()
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		return view ('pengembalian',['pinjaman'=>$pinjaman]);		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function laporan()
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		return view ('laporan',['pinjaman'=>$pinjaman]);
	}

	public function ajaxdatamobil(){
		$mobil = DB::table('mobil')->where('merek_mobil', \Input::get('idMerek'))->get();
		return view('ajaxdatamobil',['mobil'=>$mobil]);
	}

	public function ajaxhargamobil(){
		$mobil = DB::table('mobil')->where('id', \Input::get('idMobil'))->get();
		return view('ajaxhargamobil',['mobil'=>$mobil]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
