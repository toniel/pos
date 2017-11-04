<?php 
	function rupiah($number){
		echo 'Rp. '.number_format($number,2,',','.');
		//2 => jumlah angka dibelakang koma
		//, => pemisah desimal
		//. => pemisah ribuan
	}
 ?>