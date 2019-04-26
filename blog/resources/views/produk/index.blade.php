<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
</head>
<body>

	<h1>data produk</h1>
	<table border="1">
		<thead>
			<tr>
					<th>No</th>
					<th>Nama produk</th>
					<th>Kategori</th>
					<th>Qty</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
			</tr>
		</thead>
	
	<tbody>
		@foreach($produk as $i => $p)
		<tr>
			<td>{{ $i+1}}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->kategori }}</td>
			<td>{{ $p->qty }}</td>
			<td>{{ $p->harga_beli }}</td>
			<td>{{ $p->harga_jual }}</td>
		</tr>
		@endforeach
	</tbody>
	</table>
</body>
</html>
