<?php
	
	class PostDisplayer {

		var $posts;
		public function PostDisplayer($posts) {
			$this->posts = $posts;
		}

		public function script() {
			$res = '';
			$res .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
			$res .= '<tr>';

			$i=0;
			$postnum = count($this->posts) - 1;

			for($i = $postnum;$i>=0;$i--) {
				$res .= '<tr>';
				
				for($a = 0;$a<3 && $postnum>=0;$a++) {
					if($posts[$postnum]==NULL)
						return;
					$res .= '<td class="column" width="33%" height="40%">';
					$news_post = new NewsPost($this->posts[$postnum--]);
					$res .= $news_post->render();
					$res .= '</td>';
				}
				$res .= '</tr>';
			}
			return $res;
		}

		public function render() {
			echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">';
			echo '<tr>';

			$i=0;
			$postnum = count($this->posts) - 1;

			for($i = $postnum;$i>=0;$i--) {
				echo '<tr>';
				
				for($a = 0;$a<3 && $postnum>=0;$a++) {
					if($this->posts[$postnum]==NULL)
						return;
					echo '<td class="column" width="33%" height="40%">';
					$news_post = new NewsPost($this->posts[$postnum--]);
					echo $news_post->render();
					echo '</td>';
				}
				echo '</tr>';
			}
		}
	}
?>