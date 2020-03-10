<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset=utf-8"/>
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Outlet</th>
				<th>Member</th>
				<th>Kode Invoice</th>
				<th>Tanggal</th>
				<th>Batas Waktu</th>
				<th>Tanggal Bayar</th>
				<th>Biaya Tambahan</th>
				<th>Diskon</th>
				<th>Pajak</th>
				<th>Qty</th>
				<th>Status</th>
				<th>Dibayar</th>
				<th>Keterangan</th>
				<th>User</th>
			</tr>
		</thead>

		<tbody>
			@foreach($data as $transaksi)
				<tr>
					<td>{{ $transaksi->outlet->nama }}</td>
					<td>{{ $transaksi->member->nama }}</td>
					<td>{{ $transaksi->kode_invoice }}</td>
					<td>{{ $transaksi->tgl }}</td>
					<td>{{ $transaksi->batas_waktu }}</td>
					<td>{{ $transaksi->tgl_bayar }}</td>
					<td>{{ $transaksi->biaya_tambahan }}</td>
					<td>{{ $transaksi->diskon }}</td>
					<td>{{ $transaksi->pajak }}</td>
					<td>{{ $transaksi->detail->qty }}</td>
					<td>{{ $transaksi->status }}</td>
					<td>{{ $transaksi->dibayar }}</td>
					<td>{{ $transaksi->detail->keterangan }}</td>
					<td>{{ $transaksi->user->name }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>