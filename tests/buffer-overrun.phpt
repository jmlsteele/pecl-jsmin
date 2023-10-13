--TEST--
Don't overrun the buffer when we find a null byte
--FILE--
<?php
$js ="let i=2;console.log(\"hello\");\0\x80extra bytes";
echo jsmin($js);
--EXPECT--
let i=2;console.log("hello");
