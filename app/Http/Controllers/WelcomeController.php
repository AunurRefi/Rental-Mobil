<?php namespace App\Http\Controllers;

use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kembali = DB::table('pinjaman')->where('status_pengambilan','Dikembalikan')->count();
		$pesan = DB::table('pinjaman')->where('status_pengambilan','belum diambil')->count();
		$pinjaman = DB::table('pinjaman')->where('status_pengambilan', 'Diambil')->count();
		$mobil = DB::table('mobil')->count();
		return view('welcome')->with('mobil',$mobil)->with('pinjaman',$pinjaman)->with('pesan',$pesan)->with('kembali',$kembali);
	}

	public function pinjaman()
	{
		return view('pinjaman');
	}
	public function tambah()
	{
		return view('tambah');
	}
	public function ambil()
	{
		return view('ambil');
	}
	public function pengembalian()
	{
		return view('pengembalian');
	}
	public function laporan()
	{
		return view('laporan');
	}
	public function merek()
	{
		return view('merek');
	}
	public function inmerek()
	{
		return view('inmerek');
	}
	public function mobil()
	{
		return view('mobil');
	}
	public function inmobil()
	{
		return view('inmobil');
	}
	public function show($id)
	{
		$pinjaman = \DB::where('id',$id)->first();

		if(!empty($pinjaman)){
			$data = array('data'=>$pinjaman);		
			return view('pinjaman.show')->with($data);
		}else{
			return redirect(url());
		}
	}
	public function showpdf($id)
	{

		$merek = DB::select('select *from merek order by id desc');
		$data = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$data = DB::table('pinjaman')->where('id','=',$id)->first();

		if(!empty($data)){
			$data = array('data'=>$data);
			$pdf = \PDF::loadView('pdf', $data);
			return $pdf->stream();

			/*return $pdf->download($slug.'pdf');*/
			
		}else{
			return redirect('/pinjaman');
		}
	}
	public function pdfambil($id)
	{

		$merek = DB::select('select *from merek order by id desc');
		$data = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$data = DB::table('pinjaman')->where('id','=',$id)->first();

		if(!empty($data)){
			$data = array('data'=>$data);
			$pdf = \PDF::loadView('pdfambil', $data);
			return $pdf->stream();

			/*return $pdf->download($slug.'pdf');*/
			
		}else{
			return redirect('/ambil');
		}
	}
	public function pdfkembali($id)
	{

		$merek = DB::select('select *from merek order by id desc');
		$data = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$data = DB::table('pinjaman')->where('id','=',$id)->first();

		if(!empty($data)){
			$data = array('data'=>$data);
			$pdf = \PDF::loadView('pdfambil', $data);
			return $pdf->stream();

			/*return $pdf->download($slug.'pdf');*/
			
		}else{
			return redirect('/pengembalian');
		}
	}
	public function pdflaporan()
	{
		$merek = DB::select('select *from merek order by id desc');
		$pinjaman = array('data'=>DB::table('pinjaman'));		
		$data = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();	

		if(!empty($pinjaman)){
			$data = array('data'=>DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get());
			$pdf = \PDF::loadView('pdflaporan', $data);
			return $pdf->stream('pinjaman.pdf');

			/*return $pdf->download($slug.'pdf');*/
			
		}else{
			return redirect('/laporan');
		}
	}
	public function pdflapor($id)
	{
			$merek = DB::select('select *from merek order by id desc');
		$data = DB::table('pinjaman')
            ->join('merek', 'pinjaman.merek_mobil', '=',  'merek.id')
            ->join('mobil', 'pinjaman.nama_mobil', '=',  'mobil.id')
            ->select('pinjaman.*', 'mobil.nama_mobil as namaMobil', 'merek.nama_merek as merekMobil')
            ->orderBy('id', 'desc')
            ->get();
		$data = DB::table('pinjaman')->where('id','=',$id)->first();

		if(!empty($data)){
			$data = array('data'=>$data);
			$pdf = \PDF::loadView('pdflapor', $data);
			return $pdf->stream();

			/*return $pdf->download($slug.'pdf');*/
			
		}else{
			return redirect('/laporan');
		}
	}


}
