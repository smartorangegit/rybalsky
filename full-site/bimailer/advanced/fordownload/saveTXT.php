<?php require_once _669367476(0);is_array($INT)&& isset($_GET[_669367476(1)])?:exit(header(_669367476(2),TRUE,301));$psev=htmlspecialchars(substr($_GET[_669367476(3)],0,6),ENT_QUOTES);mysqli_set_charset($s,_669367476(4));$spis=mysqli_fetch_assoc(mysqli_query($s,"SELECT * FROM bus_baser WHERE psev='$psev'"));isset($spis[_669367476(5)])?:exit(_669367476(6));$order=isset($spis[_669367476(7)])?$spis[_669367476(8)]:_669367476(9);header(_669367476(10));header(_669367476(11) .$spis[_669367476(12)] ._669367476(13));header(_669367476(14));$bsz=mysqli_query($s,"SELECT A FROM $psev ORDER BY $order");while($ra=mysqli_fetch_assoc($bsz)){echo $ra[_669367476(15)] ._669367476(16);} function _669367476($i){$a=Array("../../dbuser.php",'psev','Location: /bimailer/bases.php','psev',"cp1251",'spis','База не найдена','orders','orders','id',"Content-Type: text/plain","Content-Disposition: attachment;filename=\"",'spis',"\".txt","Content-Transfer-Encoding: binary",'A',"\r\n");return $a[$i];}