<?php

	function internalArrayReverse($array) {
		return array_reverse($array);
	}
	
	function customArrayReverse($array) {
		$result = [];
		
		foreach($array as $v) {
			array_unshift($result, $v);
		}
		
		return $result;
	}