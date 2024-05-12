<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Detail</title>
</head>
<body>
    <p>Barang: {{ $inventory->nama_barang }}</p>
    <p>Jumlah Masuk: {{ $inventory->barang_masuk }}</p>
    <p>Jumlah Keluar: {{ $inventory->barang_keluar }}</p>
    <p>Total Akhir: {{ $inventory->barang_masuk - $inventory->barang_keluar }}</p>
    <form action="{{ route('edit', $inventory) }}" method="get">
        <button type="submit" class="btn btn-primary">Edit product</button>
    </form>
</body>
</html>