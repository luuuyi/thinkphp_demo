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

/*人脸检测，调用了face++的api接口，传入参数为图片的url*/
function faceDetect($imgUrl){
$resultStr = "";
//$imgUrl = "http://cn.faceplusplus.com/static/resources/python_demo/1.jpg";
$jsonStr =file_get_contents("http://api.cn.faceplusplus.com/v2/detection/detect?url=".$imgUrl."&api_key=b7f5856b3a0498d67146511bbedc2b2b&api_secret=aKhlYME0lg0Y2DLuvSTSM_eKMqw84Iue&&attribute=glass,pose,gender,age,race,smiling");
//http://api.cn.faceplusplus.com/v2/detection/detect?url=http://cn.faceplusplus.com/static/resources/python_demo/1.jpg&api_key=b7f5856b3a0498d67146511bbedc2b2b&api_secret=aKhlYME0lg0Y2DLuvSTSM_eKMqw84Iue&&attribute=glass,pose,gender,age,race,smiling
//http://api.cn.faceplusplus.com/v2/detection/detect?url=http://139.129.35.237/slim1_net/upload/images/20160511_1.jpg&api_key=b7f5856b3a0498d67146511bbedc2b2b&api_secret=aKhlYME0lg0Y2DLuvSTSM_eKMqw84Iue&&attribute=glass,pose,gender,age,race,smiling

$replyDic = json_decode($jsonStr);
$faceArray = $replyDic->{'face'};
$imageWidth = $replyDic->{'img_width'};
$imageHeight = $replyDic->{'img_height'};
if (0 === count($faceArray)) {
	$resultStr = 'Null';
	return $resultStr;
}
$resultStr .= "图中共检测到".count($faceArray)."张脸！\n";
for ($i= 0;$i< count($faceArray); $i++){
	$resultStr .= "第".($i+1)."张脸\n";
	$tempFace = $faceArray[$i];
	// 获取所有属性
	$tempAttr = $tempFace->{'attribute'};

	// 年龄：包含年龄分析结果
	// value的值为一个非负整数表示估计的年龄, range表示估计年龄的正负区间
	$tempAge = $tempAttr->{'age'};

	// 性别：包含性别分析结果
	// value的值为Male/Female, confidence表示置信度
	$tempGenger	= $tempAttr->{'gender'};	

	// 种族：包含人种分析结果
	// value的值为Asian/White/Black, confidence表示置信度
	$tempRace = $tempAttr->{'race'};		

	// 微笑：包含微笑程度分析结果
	//value的值为0-100的实数，越大表示微笑程度越高
	$tempSmiling = $tempAttr->{'smiling'};

	// 眼镜：包含眼镜佩戴分析结果
	// value的值为None/Dark/Normal, confidence表示置信度
	$tempGlass = $tempAttr->{'glass'};	

	// 造型：包含脸部姿势分析结果
	// 包括pitch_angle, roll_angle, yaw_angle
	// 分别对应抬头，旋转（平面旋转），摇头
	// 单位为角度。
	$tempPose = $tempAttr->{'pose'};
	
	//返回年龄
	$minAge = $tempAge->{'value'} - $tempAge->{'range'};
	$minAge = $minAge < 0 ? 0 : $minAge;
	$maxAge = $tempAge->{'value'} + $tempAge->{'range'};
	$resultStr .= "年龄可能在：".$minAge."-".$maxAge."岁之间，极有可能年龄为".$tempAge->{'value'}."岁\n";

	// 返回性别
	if($tempGenger->{'value'} === "Male")
		$resultStr .= "性别：男；可能性：".$tempGenger->{'confidence'}."%\n";	
	else if($tempGenger->{'value'} === "Female")
		$resultStr .= "性别：女；可能性：".$tempGenger->{'confidence'}."%\n";

	// 返回种族
	if($tempRace->{'value'} === "Asian")
		$resultStr .= "种族：黄种人；可能性：".$tempRace->{'confidence'}."%\n";
	else if($tempRace->{'value'} === "White")
		$resultStr .= "种族：白种人；可能性：".$tempRace->{'confidence'}."%\n";
	else if($tempRace->{'value'} === "Black")
		$resultStr .= "种族：黑种人；可能性：".$tempRace->{'confidence'}."%\n";

	// 返回眼镜
	if($tempGlass->{'value'} === "None")
		$resultStr .= "眼镜：木有眼镜；可能性：".$tempGlass->{'confidence'}."%\n";
	else if($tempGlass->{'value'} === "Dark")
		$resultStr .= "眼镜：目测墨镜；可能性：".$tempGlass->{'confidence'}."%\n";
	else if($tempGlass->{'value'} === "Normal")
		$resultStr .= "眼镜：普通眼镜；可能性：".$tempGlass->{'confidence'}."%\n";

	//返回微笑
	$resultStr .= "微笑程度：".round($tempSmiling->{'value'})."%\n";

	//pose信息，分别对应抬头，旋转（平面旋转），摇头，单位为角度
	$resultStr .= "面部抬头程度：".$tempPose->{'pitch_angle'}->{'value'}."%\n";
	$resultStr .= "面部旋转程度：".$tempPose->{'roll_angle'}->{'value'}."%\n";
	$resultStr .= "面部摇头程度：".$tempPose->{'yaw_angle'}->{'value'}."%\n";

	//图像信息，包含图像的宽高和图像中人脸的范围
	$tempPosition = $tempFace->{'position'};
	$faceWidth = round($imageWidth * $tempPosition->{'width'}/100);
	$faceHeight = round($imageHeight * $tempPosition->{'height'}/100);
	$facePositionX = round($imageWidth * $tempPosition->{'center'}->{'x'}/100 - $imageWidth * $tempPosition->{'width'} * 0.5/100);
	$facePositionY = round($imageHeight * $tempPosition->{'center'}->{'y'}/100 - $imageHeight * $tempPosition->{'height'} * 0.5/100);
	$resultStr .= "图像大小为：".$imageWidth."X".$imageHeight."；\n";
	$resultStr .= "人脸左上角位于：（".$facePositionX."，".$facePositionY."），宽度为：".$faceWidth."，高度为：".$faceHeight."；\n";
}
return $resultStr;
}

/*测试函数*/
function testCommon(){
	echo 'you are right!';
}