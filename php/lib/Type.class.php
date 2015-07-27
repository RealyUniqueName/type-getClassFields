<?php

class Type {
	public function __construct(){}
	static function getClassFields($c) {
		if($c->__qname__ === "String") {
			return (new _hx_array(array("fromCharCode")));
		}
		if($c->__qname__ === "Array") {
			return (new _hx_array(array()));
		}
		
		$rfl = $c->__rfl__();
		if($rfl === null) return new _hx_array(array());
		$ms = $rfl->getMethods(ReflectionMethod::IS_STATIC);
		$r = array();
		while(list(, $m) = each($ms)) {
			$cls = $m->getDeclaringClass();
			if($cls->getName() == $c->__tname__) $r[] = $m->getName();
		}
		$ps = $rfl->getProperties(ReflectionMethod::IS_STATIC);
		while(list(, $p) = each($ps)) {
			$cls = $p->getDeclaringClass();
			if($cls->getName() == $c->__tname__ && ($name = $p->getName()) !== '__properties__') $r[] = $name;
		}
		;
		return new _hx_array(array_unique($r));
	}
	function __toString() { return 'Type'; }
}
