<?php
	require_once 'reverse.php';

	class ReverseTest extends PHPUnit_Framework_TestCase
	{
		/**
		* @dataProvider reverseProvider
		*/
		public function testInternalReverse($array, $expected) {
			$this->assertEquals($expected, internalArrayReverse($array));
		}
		
		/**
		* @dataProvider reverseProvider
		*/
		public function testCustomReverse($array, $expected) {
			$this->assertEquals($expected, customArrayReverse($array));
		}
		
		public function reverseProvider()
		{
			return array(
				array(
					array(1, 2, 3),
					array(3, 2, 1)
				),
				array(
					array('foo', 'bar', 'baz'),
					array('baz', 'bar', 'foo')
				),
				array(
					array(4, 8, 15, 16, 23, 42),
					array(42, 23, 16, 15, 8, 4)
				),
			);
		}
	}