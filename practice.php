<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$nickname = 'narunaru';
	// $sql = 'aaaa'.'bbbb';
	// $sql .= $nickname;
	$sql = 'SELECT * FROM `tweets` WHERE `tweet` ='.$nickname;

	// $aisatu = 'けんじくん、おはよう、よく眠れた？今日晴れたね。次の試合絶対勝とう！';

	// $name = 'けんじくん';
	$name = 'まなとくん';
	$greeting = 'マーヨンブンタック';
	$when = '今日';
	$wether = '雨だったね';

	$aisatu = $name.'、'.$greeting.'、よく眠れた？'.$when.$wether.'次の試合絶対勝とう！';

	$aisatu = sprintf('%s、%s、よく眠れた？%s"%s"次の試合90%%じゃなくて%s100%%絶対勝とう！',
		$greeting,
		$when,
		$wether,
		$name,
		$when);

	echo $aisatu;

	echo '<br>';
	$colorName = 'red';
	echo "frame is ${colorName} color";
	// おかあさん、いつも"ありがとう"
	// echo "おかあさん、いつも\"ありがとう\"";
	echo 'おかあさん、いつも"ありがとう"';
	echo '<br>';
	echo 'frame is ${colorName} color';
	echo '<br>';

	// echo $sql;
	$names = array('どらえもん','のびた','ジャイアン','しずか','スネ夫');

 	for ($i=0; $i < 5 ; $i++) { 
 		if ($names[$i]=='しずか'){
	 		echo 'こんにちは、私'.$names[$i].'<br>';
 		}else{
	 		echo 'こんにちは、僕'.$names[$i].'<br>';
 		}
 	}

 	foreach ($names as $value) {
 		//$value = $names[$i];
 		echo 'こんにちは、僕'.$value.'<br>';
 	}

 	$member1 = array('nickname'=>'どらえもん','gender'=>'male');

 	foreach ($member1 as $key => $value) {
 		echo '------------<br>';
 		echo $key.'<br>';
 		echo $value.'<br>';
 		echo '------------<br>';
 	}

	$member2 = array('nickname'=>'のびた','gender'=>'male','food'=>array('バナナ','りんご'));
	$member3 = array('nickname'=>'じゃいあん','gender'=>'male');

	$members = array($member1,$member2,$member3);

	// var_dump($members[2]);
	// var_dump($members);

	echo $members[1]['food'][0];
	echo '<br>------------<br>';
	foreach ($members as $member_each) {
		// echo $member1['nickname']と一緒
		// echo $member2['nickname']と一緒
		// echo $member3['nickname']と一緒
		var_dump($member_each);
		echo $member_each['nickname'].'<br>';
	}

 ?>
 

</body>
</html>
