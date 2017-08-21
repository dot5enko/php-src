<?php

error_reporting(E_ALL);
ini_set('display_errors',"On");
        
$array = [
        "hello world.this is test","second item","3",
        ];
$array['hello'] = '1';
$array['world'] ='2';
$array['three'] = '3';
$array['f'] = '1';
$array['ff'] ='2';
$array['s'] = '3';
$array['ss'] = '1';
$array['e'] ='2';
$array['n'] = '3';

$iterations = 10000000;

function getB() {
    $res =  [
        'time' => microtime(true),
        'mem' => memory_get_usage(true),
        'three' => 0
    ];
    return $res;
    
}
$start = getB();

$string = $array[0];

//$stdc = new stdClass();
//$stdc->next = new stdClass();

//$obj = new SomeClass($stdc);


$string = $array['hello'].$array['world'];
$resultLength = 0;

$keys = array_keys($array);
echo "\n KEYS GOT ".$string."\n";
$keyLength = count($keys)-1;

for ($i=0; $i <$iterations; $i++) {
    //echo $obj->sayHello().PHP_EOL;
    //$resultLength .= $string;
    //$resultLength .= $array['hello'].$array['world'];

    $array[$keys[mt_rand(0,$keyLength)]];
    $array[$keys[mt_rand(0,$keyLength)]];
    $array[$keys[mt_rand(0,$keyLength)]];

    //$string;
    //$string;
    //$string;
}

$a = [];
$end = getB();

echo "Done!\n";
printf("KEYS:%s\n",$keyLength);
printf("ITERATIONS:%s\n",$iterations);
printf("MEM:%s\n",$end['mem'] - $start['mem']);
printf("TIME:%s\n",$end['time']-$start['time']);






