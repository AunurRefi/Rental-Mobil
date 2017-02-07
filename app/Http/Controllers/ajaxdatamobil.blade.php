<td>Nama Mobil</td>
		<td>
          <div class="input-control select">
          <select style="width:100% ;" name="nama_mobil">
            <option>Pilih Mobil</option>
             @foreach($mobil as $mobil)
              <option value="{{ $mobil->merek_mobil }}">{{ $mobil->nama_mobil }}</option>
            @endforeach
          </select>
          </div>
        </td>