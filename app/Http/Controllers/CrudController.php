<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Request;

class CrudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$merk = $request->input('merk');
		DB::insert('insert into merek (id,nama_merek) values(?,?)',['',$merk]);
		return redirect('merek');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$kode_mobil = \Input::get('kode_mobil');
		$nama_mobil = \Input::get('nama_mobil');
		$merek = \Input::get('merek');
		$harga_mobil = \Input::get('harga_mobil');

	    $data = array(
	    	'kode_mobil' => $kode_mobil,
	    	'nama_mobil' => $nama_mobil,
	    	'merek_mobil' => $merek,
	    	'harga_mobil' => $harga_mobil
	    );

	    //insert kedalam database

	    DB::table('mobil')->insert($data);    

	    return \Redirect::to('/mobil');
 
	}
	public function createe(Request $request)
	{
		$nama = \Input::get('nama');
		$merek_mobil = \Input::get('merek_mobil');
		$nama_mobil = \Input::get('nama_mobil2');
		$id_pesan = \Input::get('id_pesan');
		$alamat = \Input::get('alamat');
		$tanggal_pinjaman = \Input::get('tanggal_pinjam');
		$tanggal_kembali = \Input::get('tanggal_kembali');
		$harga_mobil = \Input::get('harga_mobil');
		$status_pengambilan = \Input::get('status_pengambilan');
		$status = \Input::get('status');
		$total_harga = \Input::get('total_harga');

	    $data = array(
	    	'nama' => $nama,
	    	'merek_mobil' => $merek_mobil,
	    	'nama_mobil' => $nama_mobil,
	    	'id_pesan' => $id_pesan,
	    	'alamat' => $alamat,
	    	'tanggal_pinjaman' => $tanggal_pinjaman,
	    	'tanggal_kembali' => $tanggal_kembali,
	    	'harga_mobil' => $harga_mobil,
	    	'status_pengambilan' => $status_pengambilan,
	    	'status' => $status,
	    	'total' => $total_harga
	    );

	    //insert kedalam database


	    DB::table('pinjaman')->insert($data);    

	    return \Redirect::to('/pinjaman');
 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$merk = $request->input('merk');
		DB::update('update merek set nama_merek = ? where id = ?',[$merk,$id]);
		return redirect('merek');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatemobil(Request $request,$id)
	{
		 $kode_mobil = $request->input('kode_mobil');
		 $nama_mobil = $request->input('nama_mobil');
		 $merek = $request->input('merek');
		 $harga_mobil = $request->input('harga_mobil');
		DB::update('update mobil set kode_mobil = ?, nama_mobil = ?, merek_mobil = ?, harga_mobil = ? where id = ?',[$kode_mobil,$nama_mobil,$merek,$harga_mobil,$id]);
		return redirect('mobil');
	}

	public function updatepinjaman(Request $request,$id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $request->input('nama');
		$merek_mobil = $request->input('merek_mobil');
		$nama_mobil = $request->input('nama_mobil2');
		$id_pesan = $request->input('id_pesan');
		$alamat= $request->input('alamat');
		$tanggal_pinjaman = date('Y-m-d',strtotime($request->input('tanggal_pinjam')));
		$tanggal_kembali = date('Y-m-d',strtotime($request->input('tanggal_kembali')));
		$harga_mobil = $request->input('harga_mobil');
		$status_pengambilan = $request->input('status_pengambilan');
		$status = $request->input('status');
		$total_harga = $request->input('total_harga');
		$data = array(
			'nama' => $nama,
			'merek_mobil' => $merek_mobil,
			'nama_mobil' => $nama_mobil,
			'id_pesan' => $id_pesan,
			'alamat' => $alamat,
			'tanggal_pinjaman' => $tanggal_pinjaman,
			'tanggal_kembali' => $tanggal_kembali,
			'harga_mobil' => $harga_mobil,
			'status_pengambilan' => $status_pengambilan,
			'status' => $status,
			'total' => $total_harga 
		);
		\DB::table('pinjaman')->where('id',$id)->update($data);
		return redirect('pinjaman');
	}
	public function updateambil(Request $request,$id)
	{		
		$status_pengambilan = $request->input('status_pengambilan');		
		$data = array(			
			'status_pengambilan' => $status_pengambilan			
		);
		\DB::table('pinjaman')->where('id',$id)->update($data);
		return redirect('ambil');
	}
	public function updatepengembalian(Request $request,$id)
	{		
		$status_pengambilan = $request->input('status_pengambilan');		
		$data = array(			
			'status_pengambilan' => $status_pengambilan			
		);
		\DB::table('pinjaman')->where('id',$id)->update($data);
		return redirect('pengembalian');
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
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
