<!DOCTYPE html>
<html>
<head>
<title>1461900024-Yogo Dananjoyo M</title>
</head>
<body>
<p>Cari Buku :</p>
<form action="/join0024/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari judul .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<h2>YogoDananjoyoM</h2>
<h3>Data Buku</h3>
<table border="1">
<tr>
<th>kode_buku</th>
<th>judul_buku</th>
<th>jumlah_buku</th>
<th>nama_kategori</th>
</tr>
@foreach($ms_buku as $p)
<tr>
<td>{{ $p->kode_buku }}</td>
<td>{{ $p->judul_buku }}</td>
<td>{{ $p->jumlah_buku }}</td>
<td>{{ $p->nama_kategori }}</td>
</tr>
@endforeach
</table>
</body>
</html>