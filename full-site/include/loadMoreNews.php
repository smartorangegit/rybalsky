<?php
//Connect to database
include_once ("config.php");
if(isset($_POST['date']) && isset($_POST['lang'])) {
  $dateFrom = date_format(date_create($_POST['date']), 'Y/m/d');
  $lg = $_POST['lang'];
  $limitBy = intval($_POST['loadNumber']);
  
  function cropStrWord($text, $max_words=20, $append = ' …') {
    $max_words = $max_words+1;
    $words = explode(' ', $text, $max_words);
    array_pop($words);
    $text = implode(' ', $words) . $append;
    return $text;
  }

  $result = $db->prepare("SELECT date, urls, name_news, filename, text FROM news WHERE lang='$lg' AND date < '$dateFrom' AND typ=0 ORDER BY date DESC LIMIT $limitBy");
	$result->execute();
  $result->store_result();	
  $num=$result->num_rows;
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['filename'],$s['text']);
  $it=0;
	 while ($result->fetch()) { 
     $s['img_news'] = '/admin/news/images/'.$s['filename'];
     $s['mini_text'] = cropStrWord($text=strip_tags($s['text']));
     $s['date'] = date_format(date_create($s['date']), 'd.m.Y');
				foreach($s as $key=>$k){			
          $rez[$key]=$k;	
        }
        $News[$it]=$rez; 
        $it++;	
    }
    echo json_encode($News);
}