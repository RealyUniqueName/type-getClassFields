<?php

class Bugged {
	public function __construct(){}
	static function __meta__() { $args = func_get_args(); return call_user_func_array(self::$__meta__, $args); }
	static $__meta__;
	static $__rtti = "<class path=\"Bugged\" params=\"\" module=\"PhpBug\"><meta>\x0A\x09<m n=\":directlyUsed\"/>\x0A\x09<m n=\":rtti\"/>\x0A\x09<m n=\"somemeta\"/>\x0A</meta></class>";
	function __toString() { return 'Bugged'; }
}
Bugged::$__meta__ = _hx_anonymous(array("obj" => _hx_anonymous(array("somemeta" => null))));
