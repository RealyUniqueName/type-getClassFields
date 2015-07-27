<?php

class PhpBug {
	public function __construct(){}
	static function main() {
		haxe_rtti_Rtti::hasRtti(_hx_qtype("Bugged"));
	}
	function __toString() { return 'PhpBug'; }
}
