<?php
/*提取html中的url*/  
function matchUrlLinks($document) {    
	preg_match_all("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx",$document,$links);
	while(list($key,$val) = each($links[2])) {
	if(!empty($val))
	$match['link'][] = $val;
	}
	while(list($key,$val) = each($links[3])) {
	if(!empty($val))
	$match['link'][] = $val;
	}        
	while(list($key,$val) = each($links[4])) {
	if(!empty($val))
	$match['content'][] = $val;
	}
	while(list($key,$val) = each($links[0])) {
	if(!empty($val))
	$match['all'][] = $val;
	}                
	return $match;
}

/*规范化输入内容*/
function testInput($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

/*测试函数*/
function testCommon(){
	echo 'you are right!';
}