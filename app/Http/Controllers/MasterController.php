<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Request;

class MasterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function merek()
	{
		$merek = DB::select('select *from merek order by id desc');
		return view ('merek',['merek'=>$merek]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function inmerek()
	{
		return view ('inmerek');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function mobil()
	{
		$mobil = DB::select('select merek.id as merekId, merek.nama_merek as merek_mobil, mobil.id, kode_mobil, nama_mobil, harga_mobil from mobil inner join merek on mobil.merek_mobil=merek.id order by id desc');
		return view ('mobil',['mobil'=>$mobil]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function inmobil()
	{
		$merek = DB::select('select *from merek order by id desc');
		return view ('inmobil',['merek'=>$merek]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		DB::delete('delete from mobil where id = ?',[$id]);
		return redirect('mobil');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = DB::table('merek')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('edmerek')

            ->with('data',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editmobil($id)
	{
		$merek = DB::select('select *from merek order by id desc');		
		$data = DB::table('mobil')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('edmobil',['merek'=>$merek])

            ->with('data',$data,$merek);
	}
	public function editpinjaman($id)
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$merek = DB::select('select *from merek order by id desc');		
		$data = DB::table('pinjaman')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('edpinjaman',['pinjaman'=>$pinjaman],['merek'=>$merek])
			
			->with('data',$data,$pinjaman,$merek);
	}     
	public function editambil($id)
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$merek = DB::select('select *from merek order by id desc');
		$mobil = DB::select('select *from mobil order by id desc');		
		$data = DB::table('pinjaman')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('edambil')->with('data',$data)->with('pinjaman',$pinjaman)->with('merek',$merek)->with('mobil',$mobil);
	}  
	public function editpengembalian($id)
	{
		$pinjaman = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$merek = DB::select('select *from merek order by id desc');
		$mobil = DB::select('select *from mobil order by id desc');		
		$data = DB::table('pinjaman')->where('id','=',$id)->first(); //untuk mengambil data berdasarkan id

    return view('edpengembalian')->with('data',$data)->with('pinjaman',$pinjaman)->with('merek',$merek)->with('mobil',$mobil);
	}   

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::delete('delete from merek where id = ?',[$id]);
		return redirect('merek');
	}
	public function deletee($id)
	{
		DB::delete('delete from pinjaman where id = ?',[$id]);
		return redirect('pinjaman');
	}
	public function deleteee($id)
	{
		DB::delete('delete from pinjaman where id = ?',[$id]);
		return redirect('ambil');
	}
	public function delet($id)
	{
		DB::delete('delete from pinjaman where id = ?',[$id]);
		return redirect('pengembalian');
	}

}
