<form action=" {{ route ('apotik.store') }}" method="post">
    @csrf
    KODE OBAT: <input type="text" name="kode_obat">
    NAMA OBAT: <input type="text" name="nama_obat">
    <button type="sumbit">Simpan</button>
</form>