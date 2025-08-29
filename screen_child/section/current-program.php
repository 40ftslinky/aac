<?php
		
		global $page_id;
		
		if(empty($page_id )){
			global $post;
			$post_id = $post->ID;		
		} else {
			$post_id = $page_id;
		}
		

		$program_type="current";

		print "<!-- CURRENT upcoming-program      -->";
		include "upcoming-program.php";
		print "<!-- END CURRENT upcoming-program      -->";	

		$program_type="";
		

?>