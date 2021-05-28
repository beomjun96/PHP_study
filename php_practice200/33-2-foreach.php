<?php
  $memberList[0] = ['name'=>'미우','id'=>'miu'];
  $memberList[1] = ['name'=>'유나','id'=>'yuna'];

  foreach($memberList as $ml){
    echo "이름: ".$ml['name'];
    echo '<br>';
    echo '아이디: '.$ml['id'];
    echo '<br><br>';
  }
 ?>
