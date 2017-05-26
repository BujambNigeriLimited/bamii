<?php 

	$i = 0;

	$text = '<div class="container '.count($posts).'">';

	foreach ($posts as $key => $value) {
			
		if ($key === 0 || $key % 4 === 0) {
		$text = '<li>';
			$text.= '<div class="item" id="1">';
				$text.= '<a href="#" class="image loaded">';
					$text.= '<div class="inner">';
						$text.= '<img src="assets/img/items/1.jpg" alt="" class="mCS_img_loaded">';
					$text.= '</div>';
				$text.= '</a>';
				$text.= '<div class="wrapper">';
					$text.= '<a href="#" id="1">';
						$text.= '<h3>Steak House Restaurant</h3>';
					$text.= '</a>';
					$text.= '<figure>63 Birch Street</figure>';
					$text.= '<div class="info">';
						$text.= '<div class="type">';
							$text.= '<i><img src="assets/icons/store/apparel/umbrella-2.png" alt="" class="mCS_img_loaded"></i>';
							$text.= '<span>Apartment</span>';
						$text.= '</div>';
					$text.= '</div>';
				$text.= '</div>';
			$text.= '</div>';
		$text.= '</li>';
		}
		else if ($key % 4 === 3 || $key === (count($posts) -1)) {
				$text.= '<div class="col-sm-3">';
					$text.= '<a href="'.base_url("Blog/read/{$value['post_id']}").'">';
						$text.= '<figure class="thumb" style="background-image:url('.base_url('uploads/'.$value['picture']).');">';
						$text.= '</figure>';
						$text.= '<div class="text-center">'.$value['pubdate'].'</div>';
						$text.= '<div class="text-center">'.$value['title'].'</div>';
					$text.= '</a>';
				$text.= '</div>';
			$text.= '</div>';
		} 
		else {
			$text.= '<div class="col-sm-3">';
				$text.= '<a href="'.base_url("Blog/read/{$value['post_id']}").'">';
					$text.= '<figure class="thumb" style="background-image:url('.base_url('uploads/'.$value['picture']).');">';
					$text.= '</figure>';
					$text.= '<div class="text-center">'.$value['pubdate'].'</div>';
					$text.= '<div class="text-center">'.$value['title'].'</div>';
				$text.= '</a>';
			$text.= '</div>';
		}
	}
	$text.= '</br></br>';
	echo $text;
?>

