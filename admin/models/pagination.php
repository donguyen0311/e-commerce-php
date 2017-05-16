<?php 
class Pagination
{	
		public $_config = array(
			'current_page' => 1, //số trang hiện tại
			'total_record' => 1, //tổng số record
			'total_page'   => 1, //tổng số trang
			'limit'		   => 9, //giới hạn sản phẩm trong 1 trang
			'start'		   => 0, //bắt đầu
			'link_full'	   => '',
			'link_first'   => '',
			'range'		   => 5,// giới hạn số button trang muốn hiển thị
			'min'		   => 0,
			'max'		   => 0,
		);
		function init($config = array()) {
			foreach ($config as $key => $value) {
				if (isset($this->_config[$key])) {
					$this->_config[$key] = $value;
				}
			}
			// kiểm tra thông số limit
			if ($this->_config['limit'] < 0) {
				$this->_config['limit'] = 0;
			}
			// tính tổng số trang = tổng số record / giới hạn sản phẩm trên 1 trang
			$this->_config['total_page'] = ceil($this->_config['total_record'] / $this->_config['limit']);

			//kiểm tra tổng số trang
			if (!$this->_config['total_page']) {
				$this->_config['total_page'] = 1;
			}
			/*
	         * Trang hiện tại sẽ rơi vào một trong các trường hợp sau:
	         *  - Nếu người dùng truyền vào số trang nhỏ hơn 1 thì ta sẽ gán nó = 1 
	         *  - Nếu trang hiện tại người dùng truyền vào lớn hơn tổng số trang
	         *    thì ta gán nó bằng tổng số trang
	         */
	        if ($this->_config['current_page'] < 1) {
	        	$this->_config['current_page'] = 1;
	        }
	        if ($this->_config['current_page'] > $this->_config['total_page']) {
	        	$this->_config['current_page'] = $this->_config['total_page'];
	        }
	        /* 
	         * Tính start, Như bạn biết trong mysql truy vấn sẽ có limit và start
	         * Muốn tính start ta phải dựa vào số trang hiện tại và số limit trên mỗi trang
	         * và áp dụng công tức start = (current_page - 1)*limit
	         * ví dụ: trang 2 thì bắt đầu = (2 - 1) * 12 = 12, thì trang thứ 2 sẽ duyệt thì record thứ 12
	         */
	        $this->_config['start'] = ($this->_config['current_page'] - 1) * $this->_config['limit'];
	       	//Tính số ở giữa dãy range
	       	$middle = ceil($this->_config['range'] / 2);
	       	// Ta sẽ lâm vào các trường hợp như bên dưới
        	// Trong trường hợp này thì nếu tổng số trang mà bé hơn range
        	// thì ta show hết luôn, không cần tính toán làm gì
        	// tức là gán min = 1 và max = tổng số trang luôn
        	if ($this->_config['total_page'] < $this->_config['range']) {
        		$this->_config['min'] = 1;
        		$this->_config['max'] = $this->_config['total_page'];
        	}
        	// trường hợp tổng số trang lớn hơn range
        	else {
        		//gán min = trang hiện tại - middle + 1
        		$this->_config['min'] = $this->_config['current_page'] - $middle + 1;
        		//gán max = trang hiện tại + middle - 1
        		$this->_config['max'] = $this->_config['current_page'] + $middle - 1;
        		// kiểm tra min và max
        		// nếu min < 1 ta gán min = 1 và max bằng range
        		if ($this->_config['min'] < 1) {
        			$this->_config['min'] = 1;
        			$this->_config['max'] = $this->_config['range'];
        		}
        		//nếu min > tổng số trang thì ta gán min = (tổng số trang - range) + 1 và max = tổng số trang
        		elseif ($this->_config['max'] > $this->_config['total_page']) {
        		 	$this->_config['min'] = $this->_config['total_page'] - $this->_config['range'] + 1;
        		 	$this->_config['max'] = $this->_config['total_page'];
        		}
        	}
        }
        private function __link($page) {
        	//nếu page <= 1 thì ra lấy link_first
        	if ($page <= 1 && $this->_config['link_first']) {
        		return $this->_config['link_first'];
        	}
        	//ngược lại ta lấy link_full
        	return str_replace('{page}', $page, $this->_config['link_full']);
        }

        function show_paging() {
        	$p = "";
        	if ($this->_config['total_record'] > $this->_config['limit']) {
        		$p .= "<div class='pagination-grid text-right'>";
        		$p .= "<ul class='pagination paging'>";
        		$p .= "<li><a href='".$this->__link('1')."' aria-label='Previous'><span aria-hidden='true'>«</span></a></li>";
        		//$p .= "<li class='previous'><a href='".$this->__link('1')."'>First</a></li>";
				//$p .= "<li class='previous'><a href='".$this->__link($this->_config['current_page'] - 1)."'>Previous</a></li>";
				//$p .= "<li class='next'><a href='".$this->__link($this->_config['total_page'])."'>Last</a></li>";
				//$p .= "<li class='next'><a href='".$this->__link($this->_config['current_page'] + 1)."'>Next</a></li>";
				for ($i = $this->_config['min']; $i <= $this->_config['max']; $i++) { 
					//Trang hiện tại sẽ disabled
					if ($this->_config['current_page'] == $i) {
						$p .= "<li class='active'><a href='#'>" .$i. "<span class='sr-only'>(current)</span></a></li>";
					}
					else {
						$p .= "<li><a href='" .$this->__link($i). "'>" .$i. "</a></li>";
					}
				}
				$p .= "<li><a href='".$this->__link($this->_config['total_page'])."' aria-label='Next'><span aria-hidden='true'>»</span></a></li>";
				$p .= "</ul></div>";
        	}
        	return $p;
        }
}
?>