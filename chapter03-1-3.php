<?php
/*
整数
浮動小数点型
*/

//実数
$float1 = 1.2;

//指数部を指定
$float2 = 1.2e3;

//浮動小数点型へのキャスト
$float3 = floatval("1.2");
$float4 = (float)"1.2";

var_dump($float1);
var_dump($float2);
var_dump($float3);
var_dump($float4);


