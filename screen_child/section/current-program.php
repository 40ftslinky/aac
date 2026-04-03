<?php
		global $page_id;
		
		if(empty($page_id )){
			global $post;
			$post_id = $post->ID;		
		} else {
			$post_id = $page_id;
		}

		$program_type="current";

		include "upcoming-program.php";

		$program_type="";
		
?>