<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-header">{{ __('Update Inventory') }}</div>

            <div class="card-body">
                <form action="{{ route('update_inventory', $inventory) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select name="nama_barang" id="nama_barang">
                            <option value="Creamer Sweet">Creamer Sweet</option>
                            <option value="Creamer Original">Creamer Original</option>
                            <option value="Pudding Powder">Pudding Powder</option>
                            <option value="Cinamon Black Tea">Cinamon Black Tea</option>
                            <option value="Emerald Jasmine Tea">Emerald Jasmine Tea</option>
                            <option value="Mango Jam">Mango Jam</option>
                            <option value="Kiwi Jam">Kiwi Jam</option>
                            <option value="Yellow Peach Jam">Yellow Peach Jam</option>
                            <option value="Strawberry Jam">Strawberry Jam</option>
                            <option value="Passion Fruit Jam">Passion Fruit Jam</option>
                            <option value="Tapioca Pearls">Tapioca Pearls</option>
                            <option value="Canned Oats">Canned Oats</option>
                            <option value="Fructose Syrup">Fructose Syrup</option>
                            <option value="Chocolate Syrup">Chocolate Syrup</option>
                            <option value="Sugar Syrup">Sugar Syrup</option>
                            <option value="Brown Sugar">Brown Sugar</option>
                            <option value="Cup 400">Cup 400</option>
                            <option value="Cup 500">Cup 500</option>
                            <option value="Cup 700">Cup 700</option>
                            <option value="Canned Red Beans">Canned Red Beans</option>
                            <option value="Ice Cream Cone">Ice Cream Cone</option>
                            <option value="Choco Crumb">Choco Crumb</option>
                            <option value="Nata De Coco">Nata De Coco</option>
                            <option value="Imported Lemon">Imported Lemon</option>
                            <option value="Sendok Sundae">Sendok Sundae</option>
                            <option value="Red Straight Straw">Red Straight Straw</option>
                            <option value="Thick Straw">Thick Straw</option>
                            <option value="Sealing Film">Sealing Film</option>
                            <option value="Water Bottle">Water Bottle</option>
                            <option value="Water Bottle 1400 ML">Water Bottle 1400 ML</option>
                            <option value="Snow King Lemon Straw Cup">Snow King Lemon Straw Cup</option>
                            <option value="Snow King String Cup Peach">Snow King String Cup Peach</option>
                            <option value="Snow King String Cup Orange">Snow King String Cup Orange</option>
                            <option value="Snow King String Cup Strawberry">Snow King String Cup Strawberry</option>
                            <option value="Snow King Sundae Pink">Snow King Sundae Pink</option>
                            <option value="Snow King Sundae Blue">Snow King Sundae Blue</option>
                            <option value="Snow King String Cup Ice">Snow King String Cup Ice</option>
                            <option value="Disposable Tea Cover">Disposable Tea Cover</option>
                            <option value="Grape Jam">Grape Jam</option>
                            <option value="PP Cotton">PP Cotton</option>
                            <option value="Single Cup Bag">Single Cup Bag</option>
                            <option value="Double Cup Bag">Double Cup Bag</option>
                            <option value="Big Cup Bag">Big Cup Bag</option>
                            <option value="Element Set">Element Set</option>
                            <option value="Paper Tray">Paper Tray</option>
                            <option value="Canned Grapes">Canned Grapes</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok_awal" class="form-control" value="{{ $inventory->stok_akhir }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Barang Masuk</label>
                        <input type="number" name="barang_masuk" class="form-control"
                            value="{{ $inventory->barang_masuk }}">
                    </div>

                    <div class="form-group">
                        <label>Barang Keluar</label>
                        <input type="number" name="barang_keluar" class="form-control"
                            value="{{ $inventory->barang_keluar }}">
                    </div>

                    <div class="form-group" style="margin-top: 10px;">
                        <table>
                            <tr>
                                <td>
                                    <label for="satuan">Satuan Barang</label>
                                </td>
                                <td>
                                    <select name="satuan" id="satuan" style="margin-left: 5px">
                                        <option value="pcs">Pcs</option>
                                        <option value="bags">Bags</option>
                                        <option value="dus">Dus</option>
                                        <option value="bottles">Bottles</option>
                                        <option value="can">Can (Kaleng)</option>
                                        <option value="rolls">Rolls</option>                                                 <option value="boxes">Boxes</option>     
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="keterangan">Keterangan</label>
                                </td>
                                <td>
                                    <select name="keterangan" id="keterangan" style="margin-left: 5px;">
                                        <option value="pesanan">Pesanan</option>
                                        <option value="pinjaman">Pinjaman</option>
                                    </select>
                                </td>
                            </tr>
                        </table> 
                    </div>
                    <div class="form-group">
                        <input type="date" name="tanggal">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                </form>
                <div class="cancel" style="margin-top: 5px;">
                    <form action="{{ route('index_inventory') }}" method="get">
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>