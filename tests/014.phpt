--TEST--
xdiff_string_patch_binary() with rabdiff patch
--SKIPIF--
<?php if (!extension_loaded("xdiff")) print "skip"; ?>
--POST--
--GET--
--INI--
--FILE--
<?php 
$a = file_get_contents('tests/file.1');
$b = file_get_contents('tests/file.rabdiff');
$c = xdiff_string_patch_binary($a, $b);
$d = file_get_contents('tests/file.2');
echo strcmp($c, $d);
?>
--EXPECT--
0
