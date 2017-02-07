<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Laporan Pinjaman</title>
		<body>
			<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
				.tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
				.tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
				.tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
			</style>

			<div style="font-family:Roboto; font-size:12px;">
				<center><h2>CETAK STRUK</h2></center>	
			</div>
			<br>			
			<table class="tg" style="width:50%">
			<tr>
			  <th>Id Pesan</th>
			  <td>{{ $data->id_pesan }}</td>
			  </tr>
			  <tr>
			  <th>Nama</th>
			  <td>{{ $data->nama }}</td>
			  </tr>
			  <tr>
			  <th>Alamat</th>
			  <td>{{ $data->alamat }}</td>
			  </tr>
			  <tr>
			  <th>Nama Merk</th>
			  <?php
			  $merek = DB::select('select *from merek where id = ?',[$data->merek_mobil]);
			  foreach ($merek as $merek) {
			  }
			  ?>			 
			  <td>{{ $merek->nama_merek }}</td>
			  </tr>
			  <tr>
			  <th>Nama Mobil</th>
			  <?php
			  $mobil = DB::select('select *from mobil where id = ?',[$data->nama_mobil]);
			  foreach ($mobil as $mobil) {
			  }
			  ?>
			  <td>{{ $mobil->nama_mobil }}</td>
			  </tr>
			  <tr>
			  <th>Tanggal Pinjaman</th>
			  <td>{{ $data->tanggal_pinjaman }}</td>
			  </tr>
			  <tr>
			  <th>Tanggal Kembali</th>
			  <td>{{ $data->tanggal_kembali }}</td>
			  </tr>
			  <tr>
			  <th>Harga Mobil/hari</th>
			  <td>{{ $data->harga_mobil }}</td>
			  </tr>
			  <tr>
			  <th>Total Sewa</th>
			  <td>{{ $data->total }}</td>
			  </tr>
			  <tr>
			  <th>Status Pembayaran</th>
			  <td>{{ $data->status }}</td>			  
			  </tr>
			</table>
		</body>
	</head>
</html>