<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produk as ModelProduk;

class Produk extends Component
{
    public $pilihanMenu = 'lihat';
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $produkTerpilih;

    public function mount(){
        if (auth()->user()->peran != 'Admin') {
            abort(403, 'bro?');
        }
    }


    public function batal()
    {
        $this->reset();
    }

    public function hapus()
    {
        $this->produkTerpilih->delete();
        $this->reset();
    }

    public function pilihHapus($id)
    {
        $this->produkTerpilih = ModelProduk::findOrFail($id);
        $this->pilihanMenu = 'hapus';
    }

    public function pilihEdit($id)
    {
        $this->produkTerpilih = ModelProduk::findOrFail($id);
        $this->nama = $this->produkTerpilih->nama;
        $this->kode = $this->produkTerpilih->kode;
        $this->harga = $this->produkTerpilih->harga;
        $this->stok = $this->produkTerpilih->stok;
        $this->pilihanMenu = 'edit';
    }

    public function simpanEdit(){
        $this->validate([
            'nama' => 'required',
            'kode' => ['required', 'unique:produks, kode, '. $this->produkTerpilih->id],
            'stok' => 'required',
            'harga' => 'required'
        ],[
                'nama.required' => 'Nama harus diisi',
                'kode.required' => 'Kode harus diisi',
                'kode.unique' => 'Kode sudah terdaftar',
                'stok.required' => 'stok harus diisi',
                'harga.required' => 'harga harus diisi'
            ]);
            $simpan = $this->produkTerpilih;
            $simpan->nama = $this->nama;
            $simpan->kode = $this->kode;
            $simpan->stok = $this->stok;
            $simpan->harga = $this->harga;
            $simpan->save();
            $this->reset(['nama', 'kode', 'stok', 'harga']);
            $this->pilihanMenu = 'lihat';
    }

    public function simpan(){
        $this->validate([
            'nama' => 'required',
            'kode' => ['required', 'unique:produks, kode'],
            'stok' => 'required',
            'harga' => 'required'
        ],[
                'nama.required' => 'Nama harus diisi',
                'kode.required' => 'Kode harus diisi',
                'kode.unique' => 'Kode sudah terdaftar',
                'stok.required' => 'stok harus diisi',
                'harga.required' => 'harga harus diisi'
            ]);
            $simpan = new ModelProduk();
            $simpan->nama = $this->nama;
            $simpan->kode = $this->kode;
            $simpan->stok = $this->stok;
            $simpan->harga = $this->harga;
            $simpan->save();
            $this->reset(['nama', 'kode', 'stok', 'harga']);
            $this->pilihanMenu = 'lihat';
    }

    public function pilihMenu($menu)
    {
        $this->pilihanMenu = $menu;
    }

    public function render()
    {
        return view('livewire.produk')->with([
            'semuaProduk' => ModelProduk::all()
        ]);
    }
}
