<?php
mysqli_query($s,"UPDATE bus_admin SET vers='".$version."'");
$SqServ=mysqli_query($s,"SELECT url,mds FROM bus_serv WHERE type='1'");
while($srv=mysqli_fetch_assoc($SqServ)){
	$pach=parse_url($srv['url']);
	if($pach['scheme']=='ssl' or $pach['scheme']=='tls'){
		$srv['url']=str_replace(array('ssl','tls'), 'smtps',$srv['url']);
	}
	if(empty($pach['scheme'])){
		$srv['url']='smtp://'.$srv['url'];
	}
	mysqli_query($s,"UPDATE bus_serv SET url='{$srv['url']}' WHERE mds='{$srv['mds']}'");
}