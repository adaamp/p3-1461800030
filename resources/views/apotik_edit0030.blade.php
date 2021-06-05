<form action=" {{ url ('apotik/' . $apotik->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    KODE OBAT: <input type="text" name="kode_obat" value="{{ $apotik->kode_obat }}">
    NAMA OBAT: <input type="text" name="nama_obat" value="{{ $apotik->nama_obat }}">
    <button type="sumbit">Simpan</button>
</form>