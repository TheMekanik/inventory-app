<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar" style="background-color: #e81c24; padding: 0;">
        <div class="container" style="padding: 0;">
            <a class="navbar-brand" href="#" style="margin-left: -5rem; color: white; font-weight: 700;">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhQm9rFkX0B3WKI5wkbjK9l1muIypuGHoFjFRB7eBdK6UhRfmoSPQ-KuJE5KxWeOSOtdq3kNi3fp7LVNHgZqLIe3_tRErDTxGuTQxEn6pp8QRqfE6cx4opyG9hwRNTxScXCcJN81rNNJQnj9eljt00uy4_aENjF0ULcL9L54KbyO8V6I0oaiHn1ypU2lQ/s1000/logo-mixue.png" alt="" width="70" height="64">
                Inventory System Mixue Ciwaringin
            </a>
        </div>
    </nav>
    
    <div class="table-wrapper">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok Awal</th>
                <th>Barang Masuk</th>
                <th>Barang Keluar</th>
                <th>Stok Akhir</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th colspan="2"></th>
                
            </tr>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <td>{{$inventory->id}}</td>
                        <td>{{$inventory->nama_barang}}</td>
                        <td>{{$inventory->stok_awal}}</td>
                        <td>{{$inventory->barang_masuk}} {{$inventory->satuan}}</td>
                        <td>{{$inventory->barang_keluar}} {{$inventory->satuan}}</td>
                        <td>{{$inventory->stok_akhir}} {{$inventory->satuan}}</td>
                        <!-- <td>{{ ($inventory->stok + $inventory->barang_masuk - $inventory->barang_keluar) }} {{$inventory->satuan}}</td> -->
                        <td>{{$inventory->keterangan}}</td>
                        <td>{{$inventory->tanggal}}</td>
                        <td align="center">
                            <form action="{{ route('edit', $inventory) }}" method="get">
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Edit</button>
                            </form>
                            <form action="{{ route('delete_inventory', $inventory) }}" method="post">
                                @method('delete')
                                @csrf 
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="delete" style="text-align: center;">
        <form action="{{ route('create') }}" method="get">
            <button type="submit" class="btn btn-success">Tambah Data</button>
        </form>
    </div>
    
    <!-- <form action=""></form> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>