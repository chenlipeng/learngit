<?php

$redis = new Redis();
$redis->connect('localhost', 6379);

$data = array('str1', 'str2', 'str3', 'str4', 'name');
$keyValue = array('str1' => 'abcdefg', 'str2' => 'hiajfdadfj', 'str3' => 'afdafdadf', 'str4' => 'abcdefghijk');
//$ret = $redis->mset($keyValue);
//var_dump($ret);
$ret = $redis->del($data);
var_dump($ret);
$ret = $redis->mget($data);
var_dump(array_combine($data, $ret));

return;

$redisKey = 'set:nice';
var_dump($redis->sismember($redisKey, 'ia'));

return;
$data = array($redisKey, 'a', 'b', 'c', 'd');
if ($redis->exists($redisKey)) {
	echo "xxxxxxxxxxxxxxxxxxx\n";
} else {
	echo "yyyyyyyyyyyyyyyyyyy\n";
}
$ret = call_user_func_array(array($redis, 'sadd'), $data);
var_dump($ret);
$ret = $redis->smembers($redisKey);
var_dump($ret);
return;

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
