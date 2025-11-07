<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Hitung total produk
        
    //variabel totalproduk menampung modal barang yang telah di panggil  oleh method  
    $totalproduk = Barang::count();

    // Jumlahkan semua stok

    //variabel totalstok menampung dari modal barang yang telah di panggil oleh method
    $totalstok = Barang::count();

    // Hitung jumlah kategori unik

    // Variabel totalkategori menampung jumlah kategori unik dari kolom 'kategori' di tabel barang
    $totalkategori = Barang::select('kategori')->distinct()->count();

    // Variabel barang menampung semua data dari tabel barang untuk ditampilkan di dashboard
    $barang = Barang::all();

    // Mengirim variabel dari controller ke tampilan (view) agar bisa ditampilkan di halaman dashboard.
    return view('dashboard', compact('totalproduk', 'totalstok', 'totalkategori', 'barang'));


    }

    /**
     * Show the form for creating a new resource.
     */

    // Untuk menambah
    public function create()
    {
        // Variabel $barang menyimpan semua data dari tabel 'barang' menggunakan model Barang
        $barang = Barang::all();
        // Mengirim variabel $barang ke view 'tambah.blade.php' agar bisa digunakan di form tambah data
        return view('tambah', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
         // Menyimpan data baru ke tabel 'barang' dengan data dari form (request)
            Barang::create([
                'nama_produk' => $request->nama_produk,
                'kategori' => $request->kategori,
                'harga'=> $request->harga,
                'stok'=> $request->stok,
                'deskripsi'=> $request->deskripsi
            ]);
             // Setelah berhasil menambah data, diarahkan ke halaman dashboard dengan pesan sukses
            return redirect('/dashboard')->with('success', 'Produk berhasil ditambahkan!');;
            // Jika terjadi error, kirim pesan error dalam bentuk JSON
        } catch (\Exception $th) {
            return response()->json([
                "message" => $th->getMessage()
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari data barang berdasarkan ID dari parameter URL
        $barang = Barang::findOrFail($id);
        // Mengirim data barang yang ditemukan ke view 'editt.blade.php' untuk ditampilkan di form edit
        return view("editt", compact("barang"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mencari data barang berdasarkan ID yang dikirim dari form edit
        // Contoh: jika user edit produk dengan ID = 5, maka akan mencari barang id 5
    $barang = Barang::find($id);
        $barang = Barang::find($id);
        // $request->nama_produk mengambil nilai dari input form bernama "nama_produk"
        $barang->nama_produk = $request->nama_produk;
        $barang->kategori = $request->kategori;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        // Menyimpan perubahan data ke database
        $barang->save();
        // Pesan 'success' akan dikirim sebagai notifikasi bahwa produk berhasil diperbarui di tampilan view
       return redirect('/dashboard')->with('success', 'Produk berhasil diperbarui!');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari data di tabel 'barang' berdasarkan kolom 'id' yang dikirim dari tombol hapus
        // lalu menghapus data tersebut dari database
        Barang::where('id', $id)->delete();
        // Setelah di hapus langsung di arahkan ke halaman dashboard
        return redirect("/dashboard");
    } 
}
 