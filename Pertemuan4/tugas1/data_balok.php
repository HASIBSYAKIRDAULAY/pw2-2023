<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code.

	require_once 'class_balok.php';

	$bal1 = new Balok(29, 16, 7);
	$bal2 = new Balok(21, 3, 23);
	$bal3 = new Balok(5, 20, 89);
	$bal4 = new Balok(21, 6, 61);

	echo '<br>Luas Balok 1'.$bal1->getLuas();
	echo '<br>Luas Balok 2'.$bal2->getLuas();
	echo '<br>Luas Balok 3'.$bal3->getLuas();
	echo '<br>Luas Balok 4'.$bal4->getLuas();
	echo '<br>';
	echo '<br>Kel Balok 1'.$bal1->getKeliling();
	echo '<br>Kel Balok 2'.$bal2->getKeliling();
	echo '<br>Kel Balok 3'.$bal3->getKeliling();
	echo '<br>Kel Balok 4'.$bal4->getKeliling();
	echo '<br>';
	echo '<br>Vol Balok 1'.$bal1->getVolume();
	echo '<br>Vol Balok 2'.$bal2->getVolume();
	echo '<br>Vol Balok 3'.$bal3->getVolume();
	echo '<br>Vol Balok 4'.$bal4->getVolume();
?>