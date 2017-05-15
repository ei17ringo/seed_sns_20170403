<?php

  require('dbconnect.php');

  if (isset($_REQUEST['tweet_id'])){

    //　SQLを実行
    // $sql = 'SELECT `members`.`nick_name`,`members`.`picture_path`,`tweets`.* FROM `tweets` INNER JOIN `members` on `tweets`.`member_id` = `members`.`member_id` WHERE `tweets`.`tweet_id`='.$_REQUEST['tweet_id'];

  	//delete_flag を1に更新
  	$sql = 'UPDATE `tweets` SET `delete_flag`=1 WHERE `tweet_id`='.$_REQUEST['tweet_id'];
      
      mysqli_query($db,$sql) or die(mysqli_error($db));
      
      header("Location: index.php");
	  exit();
  }

?>