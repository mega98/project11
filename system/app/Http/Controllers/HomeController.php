<?php 

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{


	function showdashboard(){
		return view('dashboard');
	}

	function showproduk(){
		return view('produk');
	}

	function showkategori(){
		return view('kategori');
	}

	function showhome(){
		return view('home');
	}

	function showproduk1(){
		return view('produk1');
	}

	function showcheckout(){
		return view('checkout');
	}

	function showabout(){
		return view('about');
	}

	function showblog(){
		return view('blog');
	}

	function showcontact(){
		return view('contact');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'payung'){
			echo "Tampilkan Produk Payung";
		}elseif($produk == 'sepeda'){
			echo "Produk Sepeda";
		}
		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>";
		echo "Harga Max adalah $hargaMax <br>";
	}

	public function testcollection(){

		$list_bike = ['Sawi', 'Wortel', 'Bayam', 'Buncis'];
		$collection = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		//sort By Harga Terendah
		//dd($list_produk->sortBy('harga'));
		//sort By Harga Tertinggi
		//dd($list_produk->sortByDesc('harga'));


		//map
		// foreach($list_produk as $item){
		//	echo "$item->nama<br>";
		// }

		// $list_produk->each(function($item){
		//	echo "$item->nama<br>";
		// });

		//dd($list_bike, $collection, $list_produk);

		// Filter

		// $filtered = $list_produk->filter(function($item){
		//	return $item->harga > 50000;
		// });
		// dd($filtered);

		//Harga Teringgi
		// $sum = $list_produk->sum('harga');
		// dd($sum);

		// Harga Terendah
		// $sum = $list_produk->min('harga');
		// dd($sum);

		// Tinggi
		// $sum = $list_produk->max('harga');
		// dd($sum);

		// rata rata
		//$sum = $list_produk->average('stok');
		//dd($sum);

		$data['list'] = Produk::simplePaginate(3);
		return view('test-collection', $data);

	}
}