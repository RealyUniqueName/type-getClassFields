<?php

class haxe_rtti_Rtti {
	public function __construct(){}
	static function hasRtti($c) {
		return Lambda::has(Type::getClassFields($c), "__rtti");
	}
	function __toString() { return 'haxe.rtti.Rtti'; }
}
