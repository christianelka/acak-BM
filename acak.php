<?php 
	$data = array("ALVIANA HERMAWATI","AMANATUSA'ADAH","CHRISTIAN ANELKA MANIK","DIKI WAHYUDI RUSTANTO","EFA SETIYANI","HANIF SAJID AL'AMNA","ILHAM LUQMAN AZMI","MUHAMMAD DANI RADITYA","MUHAMMAD KHALIF RAFI","PRATIWI AJENG SAFITRI","RICKY RAHMA SYAHPUTRA","SALIK MANAHIJASSU'ADA'","WILDAN MUTASHIM"); // Nama Nama Yang Tidak Konfirmasi Bisa / Tidak
		
shuffle($data);
$hasil = array_shift($data);
sleep(1);
flush();
echo "Orang Ke-1 > $hasil\n";
$hasil = array_shift($data);
sleep(1);
flush();
echo "Orang Ke-2 > $hasil\n";
$hasil = array_shift($data);
sleep(1);
flush();
echo "Orang Ke-3 > $hasil\n";
$hasil = array_shift($data);
sleep(1);
flush();
echo "Orang Ke-4 > $hasil\n";
$hasil = array_shift($data);
sleep(1);
flush();
echo "Orang Ke-5 > $hasil\n";
?>
