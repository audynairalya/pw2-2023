<?php
	function kelulusan($nilai){
		if($nilai > 55){
			$hasil ='Pass';
		}else{
				$hasil ='Not Pass';
			}
			return $hasil;
		}
	function grade($Total) {
		if($Total <= 100 && $Total >= 85){
			$grade = "A";
			$predikat = "Very Satisfying";
		} elseif($Total <= 84 && $Total >= 70){
			$grade = "B";
			$predikat = "Satisfying";
		} elseif($Total <= 69 && $Total >= 56){
			$grade = "C";
			$predikat = "Sufficient";
		} elseif($Total <= 55 && $Total >= 36){
			$grade = "D";
			$predikat = "Reiterate";
		} elseif($Total <= 35 && $Total >= 0){
			$grade = "E";
			$predikat = "Not Pass";
		} else{
			$grade = "I";
		}
		return [$grade, $predikat];
	}
	function rata_rata($uts, $uas, $praktik) {
		$rata2 = ($uts + $uas + $praktik) / 3;
		return $rata2;
	}
?>