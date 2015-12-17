 
<?php
class FichierExcel {
 
private 
	$csv = Null;
	
	function Colonne($file) {
 
		$this->csv.=$file."\n";
		return $this->csv;
 
	}
 
	
	function Insertion($file){
 
		$this->csv.=$file."\n";
		return $this->csv;
	}
 
	
	function output($NomFichier){
 
		header("Content-type: application/vnd.ms-excel");
		header("Content-disposition: attachment; filename=$NomFichier.csv");
		print $this->csv;
		exit;
 
	}
}
 
?>
