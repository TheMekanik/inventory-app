<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Inventory;



class InventoryController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama_barang' => 'required', 
            'satuan' => 'required', 
            'keterangan' => 'required',
            'tanggal' => 'required'
        ]);

        $stok_awal = $request->input('stok', 0);
        $barang_masuk = $request->input('barang_masuk', 0); 
        $barang_keluar = $request->input('barang_keluar', 0); 
        

        $total_akhir = $stok_awal + $barang_masuk - $barang_keluar;
        $stok_akhir = $total_akhir;

        Inventory::create([
            'nama_barang' => $request->nama_barang,
            'barang_masuk' => $barang_masuk, 
            'barang_keluar' => $barang_keluar, 
            'stok_awal' => $stok_awal,  
            'stok_akhir' => $stok_akhir,  
            'satuan' => $request->satuan, 
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal
        ]);
        
        return Redirect::route('index_inventory');
    }
    
    public function update_inventory(Inventory $inventory, Request $request)
    {
        // Validasi
        $request->validate([
            'nama_barang' => 'required',
            'satuan' => 'required', 
            'keterangan' => 'required', 
            'tanggal' => 'required'
        ]);

        $stok_awal = $inventory->stok_akhir;
        $barang_masuk = $request->input('barang_masuk', 0); 
        // $barang_keluar = $request->barang_keluar;
        $barang_keluar = $request->input('barang_keluar', 0);

        // Total akhir menggunakan nilai absolut (selalu positif)
        $total_akhir = $stok_awal + $barang_masuk - $barang_keluar;

        $inventory->update([
            'nama_barang' => $request->nama_barang,
            'stok_awal' => $stok_awal,  
            'stok_akhir' => $total_akhir,
            'barang_masuk' => $barang_masuk, 
            'barang_keluar' => $barang_keluar,
            'satuan' => $request->satuan, 
            'keterangan' => $request->keterangan, 
            'tanggal' => $request->tanggal
        ]);



        // return Redirect::route('index', $inventory);
        return Redirect::route('index_inventory', $inventory);
    }

    public function index_inventory()
    {
        $inventories = Inventory::all();
        return view('index_inventory', compact('inventories'));
    }

    public function show_inventory(Inventory $inventory)
    {
        return view('show_inventory', compact('inventory'));
    }

    public function edit(Request $request, Inventory $inventory)
    {  
        return view('edit', compact('inventory'));
    }


    public function delete_inventory(Inventory $inventory)
    {
        $inventory->delete();
        return Redirect::route('index_inventory');
    }
}
