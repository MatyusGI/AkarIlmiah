<?php

namespace App\Http\Livewire;

use App\Order;
use App\OrderDetail;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $nama, $jumlah_pesanan, $nomor;

    public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function masukanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        // Validasi jika belum login
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        // menghitung total harga
        if(!empty($this->nama)) {
            $total_harga = $this->jumlah_pesanan*$this->product->harga+$this->product->harga_nameset;
        }else {
            $total_harga = $this->jumlah_pesanan*$this->product->harga;
        }

        // Cek apakah user punya data pesanan utama yang statusnya 0
        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();

        // Menyimpan / Update data pesanan utama
        if(empty($order))
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999)
            ]);

            $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first();
            $order->kode_pemesanan = 'J-'.$order->id;
            $order->update();

        }else {
            $order->total_harga = $order->total_harga+$total_harga;
            $order->update();
        }

        // Menyimpan pesanan detail
        OrderDetail::create([
            'product_id' => $this->product->id,
            'order_id' => $order->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'nameset' => $this->nama ? true : false,
            'nama' => $this->nama,
            'nomor' => $this->nomor,
            'total_harga' => $total_harga
        ]);

        session()->flash('message', 'Sukses Masuk Keranjang');

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
