<?php require_once _1776443222(0);is_array($INT)&& isset($_GET[_1776443222(1)])?:exit(header(_1776443222(2),TRUE,301));$psev=htmlspecialchars(substr($_GET[_1776443222(3)],0,6),ENT_QUOTES);mysqli_set_charset($s,_1776443222(4));$spis=mysqli_fetch_assoc(mysqli_query($s,"SELECT * FROM bus_baser WHERE psev='$psev'"));isset($spis[_1776443222(5)])?:exit(_1776443222(6));$order=isset($spis[_1776443222(7)])?$spis[_1776443222(8)]:_1776443222(9);header(_1776443222(10));header(_1776443222(11) .$spis[_1776443222(12)] ._1776443222(13));header(_1776443222(14));$bsz=mysqli_query($s,"SELECT * FROM $psev ORDER BY $order");while($ra=mysqli_fetch_assoc($bsz)){unset($ra[_1776443222(15)]);echo implode(_1776443222(16),$ra) ._1776443222(17);} function _1776443222($i){$a=Array("../../dbuser.php",'psev','Location: /bimailer/bases.php','psev',"cp1251",'spis','База не найдена','orders','orders','id',"Content-Type: application/vnd.ms-excel","Content-Disposition: attachment;filename=\"",'spis',"\".csv","Content-Transfer-Encoding: binary",'id',';',"\r\n");return $a[$i];}