<?php 

	class NewsPost {
		var $post;
		public function NewsPost($post) {
			$this->post = $post;
		}

		public function render() {
return '<div class="news_column" width="100%"><a href=""><h1>'.$this->post->getTitle().'</h1></a><center><input type="image" src="images/home.png" name="news_image" class="news_image" id="news_image" style="width:90%"></center><p>'.$this->post->getText().'</p></div>';
		}
	}
	
?>