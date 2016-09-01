<?php

$redis = new Redis();
$redis->connect('localhost', 6379);

/*
$ret = $redis->expire('milk', 20);
var_dump($ret);

return;

*/
$data = array('milk', 1, 'lipeng', 2, 'jack', 3, 'lili');
$ret = call_user_func_array(array($redis, 'zadd'), $data);
var_dump($ret);
$ret = $redis->zrange('milk', 0, -1);
var_dump($ret);

return;

//$redis->set('exists', 'no', array('ex' => 10));

$ret = $redis->get('exists');
var_dump($ret);	//FALSE-不存在
return;

$data = array('str1', 'str2', 'str3', 'str4', 'name');
$keyValue = array('str1' => 'abcdefg', 'str2' => 'hiajfdadfj', 'str3' => 'afdafdadf', 'str4' => 'abcdefghijk');
//$ret = $redis->mset($keyValue);

//var_dump($ret);
//$ret = $redis->mget($data);
//var_dump($ret);
$ret = $redis->delete($data);
var_dump($ret);
//$ret = $redis->mget($data);
//var_dump($ret);


return;
$redisKey = 'bbs';
$ret = $redis->exists($redisKey);
$redis->sadd($redisKey, 'www.163.com');
$ret = $redis->smembers($redisKey);
$ret = $redis->scard($redisKey);
var_dump($ret);
