<?php
	////////////////////////
	// Listingslab functions
	// @listingslab
	///////////////////////////
	// OSF_posted_vars ()
	function OSF_posted_vars (){
		$checked_HTML = 'checked="checked"';
		$OSF ['post_vars'] = false;
		if (isset ($_POST)){ $OSF ['post_vars'] = $_POST;}
		if (isset ($OSF ['post_vars']['app'])){$OSF ['app'] = $OSF ['post_vars']['app'];}
		return false;
	}
	///////////////////////////
	// show_directory ($directory);
	function OSF_print_directory ($directory_name){
		$html = '<h2>'.$directory_name.'</h2>';
		$html .= '<ul>';
		$dir = dirname( __FILE__ );
		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
			if ($filename != '.' 
			&& $filename != '..' 
			&& $filename != '.metadata'
			&& $filename != '.git'
			&& $filename != '.gitignore'
			&& $filename != '.project'
			&& $filename != '.settings'
			&& $filename != '.DS_Store'
			&& $filename != 'index.php'
			){
				$files[] = $filename;
			}
		}
		for ($i = 0; $i < count ($files); $i++){
			$html .= '<li>';
			$html .= '<a href="'.$files [$i].'" class="re-color" target="_self">';
			$html .= $files [$i];
			$html .= '</a>';
			$html .= '</li>';
		}
		print '</ul>';
		return $html;
	}
?>