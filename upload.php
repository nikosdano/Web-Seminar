<?php
	$destination = "style";
		if( !empty( $_FILES ) ) {
			$destination .= $_FILES[ "file" ][ "name" ];
			$filename = $_FILES[ "file" ][ "tmp_name" ];
			move_uploaded_file($filename, $destination);
			}	        
	echo "Uploaded file: " . $_FILES[ "file" ][ "name" ]. "</br>";
        echo "Type: " . $_FILES[ "file" ][ "type" ]. "</br>";
        echo "Size: " . $_FILES[ "file" ][ "size" ]. "kb"."</br>";
	echo "Destination: " . $destination . "</br>";
	$open = opendir("style") ;
		while(false != ($file = readdir( $open ))) {
			if( $file != "." && $file != "..") {
				echo "Files uploaded: " . $file . "</br>";
			}
		}
	closedir($open);
?> 
