<?php
//phpredis是php的一个扩展，效率是相当高有链表排序功能，对创建内存级的模块业务关系

//sortedSet 有序集合

$redis = new Redis();
//参数为: 服务地址;端口号;链接时长 float (可选, 默认为 0 ，不限链接时间)
$redis->connect('localhost', 6379, 0.01);

$redisKey = 'name';


/*
$ret = $redis->exists($redisKey);
var_dump($ret);
return;
*/


//参数为: 键, score, value
//ZADD name 123 'LIJUN'
$ret = $redis->zadd('gender', time(), 'Shushu');
//var_dump($ret);
/* 返回值
 * FALSE: 当 key 存在但不是有序集类型时
 * 1	:添加单个元素
 * n	:成功插入的元素个数 不包括已经存在的元素 
 * 0	:添加已存在元素，但是改变 score 值
 */

//插入多个元素
//ZADD name 8 AIFENG 9 Guiqing
$redis->del($redisKey);
$data = array($redisKey, 1, 'sunshu', 2, 'jack', 3, 'Lucy', 4, 'Shushu');
$ret = call_user_func_array(array($redis, 'zadd'), $data);
var_dump($ret);
return;

//zcard
//ZCARD name
$ret = $redis->zcard($redisKey);
//var_dump($ret);
/* 返回值
 * FALSE: 当 key 存在但不是有序集类型时
 * n	: 有序集中的元素个数
 */

//zount
//返回有序集 key 中， score 值在 min 和 max 之间(默认包括 score 值等于 min 或 max )的成员的数量。
//ZCOUNT name 0 3
$ret = $redis->zcount($redisKey, 0, 4);
//var_dump($ret);
/* 返回值
 * FALSE: 当 key 存在但不是有序集类型时
 * n	: min到max的元素个数
 */

//zincrby
//为有序集 key 的成员 member 的 score 值加上增量 increment
//ZINCRBY name -9 sunshu
$ret = $redis->zincrby($redisKey, 2, 'Guiqing');
//var_dump($ret);
/* 返回值
 * FALSE: 当 key 存在但不是有序集类型时
 * n	: member 成员的新 score 值 
 */

//参数为: 键, offset, limit
//ZRANGE name 0 -1
//ZREVRANGE name 0 -1
$ret = $redis->zrange('name', 0, -1);
//var_dump($ret);
/*
 * 返回值 array(
 * 	'value1', 'value2', ……
 * )
 */

//参数为: 键, offset, limit, WITHSCORES
//ZRANGE name 0 -1 WITHSCORES
//ZREVRANGE name 0 -1 WITHSCORES
$ret = $redis->zrange('name', 0, -1, TRUE);
//var_dump($ret);
/*
 * 返回值 array(
 * 	'value1' => score1,
 * 	'value2' => score2,
 *	……
 * )
 */

//参数为: 键, min, max, array('withscores' => true/false, 'limit' => array(offset, $limit))
//ZRANGEBYSCORE name 2 4 WITHSCORES
//ZREVRANGEBYSCORE name 2 4 WITHSCORES
$ret = $redis->zrangebyscore('name', 2, 4, array('limit' => array(0, 2), 'withscores' => TRUE));
var_dump($ret);

//ZRANK name  member
//ZREVRANK name  member
//返回有序集 key 中成员 member 的排名。其中有序集成员按 score 值递增(从小到大)顺序排列。
$ret = $redis->zrank($redisKey, 'jack');
var_dump($ret);

//ZREM name jack
//移除有序集 key 中的一个或多个成员，不存在的成员将被忽略。
$data = array($redisKey, 'jack', 'Lucy', 'sunshu');
//$ret = call_user_func_array(array($redis, 'zrem'), $data);
//$ret = $redis->zrem($redisKey, 'jack');
//var_dump($ret);

//ZREMRANGEBYRANK name 1 2
//ZREMRANGEBYSCORE name 1 3
$ret = $redis->zremrangebyrank($redisKey, 1, 2);
var_dump($ret);

//ZSCORE name jack
//返回有序集 key 中，成员 member 的 score 值
$ret = $redis->zscore($redisKey, 'sunshu');
var_dump($ret);
