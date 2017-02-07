<td>Nama Mobil</td>
<td>
<p>
      <div class="input-contol select">
      <select style="width:60%; height:35px;" name="nama_mobil">
        <option value="pilihmobil">Pilih Mobil</option>
         @foreach($mobil as $mobil)
          <option value="{{ $mobil->id }}">{{ $mobil->nama_mobil }}</option>
        @endforeach
      </select>
      </div>
    </td>
    <script type="text/javascript">
    	$(function(){
        $("select[name='nama_mobil']").change(function(e){
            e.preventDefault();
            $.ajax({
              'type': 'POST',
              'url': '/gethargamobil',
              'data': {
               'idMobil': $("select[name='nama_mobil']").val(), 
               '_token': '{{ csrf_token() }}'
              },
              'success': function(data){
                $("input[name='harga_mobil']").val(data);
                totalharga();
              }
            });
        });
      });
    </script>