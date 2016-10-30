<?php

namespace InstanceOfNamespace;

use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Stmt\Function_;

$foo = new Function_();
$bar = $foo;
$baz = doFoo();

if ($baz instanceof Foo) {
	// ...
} else {
	while ($foo instanceof ArrayDimFetch) {
		die;
	}
}