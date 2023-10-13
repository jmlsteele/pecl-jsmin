--TEST--
UTF8 Characters everywhere possible
--FILE--
<?php
$js = <<<JS
/* ℝ */
var aℝ = "bℝ";

function cℝ(dℝ) {
return "hello there".replace(dℝ,"");
}
cℝ(/eℝ[fℝ]*/)

// gℝ
let hℝ = {iℝ: "hello ℝ"}

console.log(hℝ['iℝ'])
console.log(hℝ.iℝ)
JS;
echo jsmin($js);
--EXPECT--
var aℝ="bℝ";function cℝ(dℝ){return"hello there".replace(dℝ,"");}
cℝ(/eℝ[fℝ]*/)
let hℝ={iℝ:"hello ℝ"}
console.log(hℝ['iℝ'])
console.log(hℝ.iℝ)
