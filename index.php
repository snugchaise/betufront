<?php
include_once("DatabaseHandler.php");
include_once("DatabaseConnector.php");
$handler = new DatabaseHandler;


$GLOBALS['project_name'] = "betufront";
$GLOBALS['page_title'] = ucwords($GLOBALS['project_name']).'.hu - Használt könyvek eladása. Ingyenes piactér használt könyveid eladására.'.PHP_EOL;

function get_bottom_part(){

$handler = new DatabaseHandler;
$handler->connect_to_database("spanyoltanulas_database");


###### Spanyolimádóknak #################
        echo '<div class="article_bottom" style="padding: 0 !important;margin-left: -15px;">'.PHP_EOL;
        echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">'.PHP_EOL;
        echo 'Spanyolimádóknak'.PHP_EOL;
        echo '</div>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        $articles = array_reverse($handler->conditional_select_from("article",array("active_article" => 1)));

        shuffle($articles);
        $article1 = $articles[0];
        $article2 = $articles[1];
        $article3 = $articles[2];
        echo '<div class="row">'.PHP_EOL;

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="/article/'.$article1['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article1['id'].'/1.jpg" alt="'.$article1['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo ' <div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article1['type'].'</div>'.PHP_EOL;
        echo '<a style="color: black" href="/article/'.$article1['titleForUrl'].'" title="">'.$article1['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="/article/'.$article2['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article2['id'].'/1.jpg" alt="'.$article2['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo ' <div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article2['type'].'</div>'.PHP_EOL;
        echo '<a style="color: black" href="/article/'.$article2['titleForUrl'].'" title="">'.$article2['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="/article/'.$article3['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article3['id'].'/1.jpg" alt="'.$article3['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo ' <div style="text-align: left">'.PHP_EOL;
        echo ' <div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article3['type'].'</div>'.PHP_EOL;
        echo '<a style="color: black" href="/article/'.$article3['titleForUrl'].'" title="">'.$article3['title']."</a>";
        echo ' </div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

###### Partnereink írták #################
        echo '<div class="article_bottom" style="margin-top: 10px; padding: 0 !important;margin-left: -15px;">'.PHP_EOL;
        echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">'.PHP_EOL;
        echo 'Partnereink írták '.PHP_EOL;
        echo '</div>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        $articles = array_reverse($imulat_handler->conditional_select_from("blog_entry",array("locale" => "hu")));
        shuffle($articles);
        $article1 = $articles[1];
        $article2 = $articles[2];
        $article3 = $articles[3];
        echo '<div class="row">'.PHP_EOL;

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;

        $image_id = $article1['image1'];
	if(is_null($image_id)){
		$image_id = $article1['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article1['image3'];
	}

        echo '<a href="https://imulat.com/hu/english/blog/'.$article1['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article1['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article1['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article1['titleForUrl'].'" title="">'.$article1['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        $image_id = $article2['image1'];
	if(is_null($image_id)){
		$image_id = $article2['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article2['image3'];
	}
        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="https://imulat.com/hu/english/blog/'.$article2['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article2['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article2['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article2['titleForUrl'].'" title="">'.$article2['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        $image_id = $article3['image1'];
	if(is_null($image_id)){
		$image_id = $article3['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article3['image3'];
	}

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="https://imulat.com/hu/english/blog/'.$article3['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article3['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article3['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article3['titleForUrl'].'" title="">'.$article3['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;
###### Partnereink írták vége #################

}
function check_user_exists($email){
 $handler = new DatabaseHandler;
 $users = $handler->conditional_select_from("website_user",array("email" => $email ));
 if(count($users) > 0){
  return True;
 }
 return False;
}
function get_personal_menu(){
echo '<a href="/personal-data/">Személyes adatok</a> / '.PHP_EOL;
echo '<a href="/tests/">Tesztek</a> / '.PHP_EOL;
echo '<a href="/results/">Erdeményeim</a>'.PHP_EOL;
}
function get_ajax_script($function_name, $json_data, $server_endpoint, $success_function, $error_function){

echo '<script>'.PHP_EOL;
echo 'function '.$function_name.'(){'.PHP_EOL;
echo $json_data;
echo '$.ajax({ '.PHP_EOL;
echo ' url: "'.$server_endpoint.'", '.PHP_EOL;
echo ' method: "POST",'.PHP_EOL;
echo ' data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo ' contentType: "json", '.PHP_EOL;
echo ' success: function(data){ '.PHP_EOL;
echo $success_function;
echo ' }, '.PHP_EOL;
echo ' error: function(errMsg) { '.PHP_EOL;
echo $error_function;
echo ' } '.PHP_EOL;
echo ' }); '.PHP_EOL;
echo '};'.PHP_EOL;
echo '</script>'.PHP_EOL;

}

function send_service_mail($content){

date_default_timezone_set('Europe/Budapest');

$subject = 'Email a spanyoltanulás.com-ról [ekkor: '.date('l jS \of F Y h:i:s A').']';

$headers = "From: " . strip_tags('info@betufront.hu') . "\r\n";
$headers .= "Reply-To: ". strip_tags('info@betufront.hu') . "\r\n";
$headers .= "CC: info@betufront.hu\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<html>'.$content;
$message .= "</html>";
mail("ladotski@yandex.ru",$subject,$message,$headers);
}
function is_mobile_browser(){
     $useragent=$_SERVER['HTTP_USER_AGENT'];
     if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
 return True;
}
 return False;
}
function get_test_option_table($test_number_id,$online_tests){
        $first = "target_word_".$test_number_id;
        $second = "target_word_".$test_number_id."_a";
        $third = "target_word_".$test_number_id."_b";
        $fourth = "target_word_".$test_number_id."_c";
        echo '<div style="font-size: large;line-height: 2em; color: black; font-weight: bold;" >'.$test_number_id.'. '.ucfirst($online_tests[0][$first]).'</div>'.PHP_EOL;
        echo '<table>'.PHP_EOL;
        echo '<tr>'.PHP_EOL;
        echo '<td>'.PHP_EOL;
        echo '<div style="font-size: large;line-height: 2em; color: black; " ><input type="radio" style="margin-right: 10px;" onClick="checkbox_'.$second.'_handler();" id="checkbox_'.$second.'"/>'.$online_tests[0][$second].'</div>'.PHP_EOL;
        echo '</td>'.PHP_EOL;
        echo '<td>'.PHP_EOL;
        echo '<div style="font-size: large;line-height: 2em; color: black; " ><input type="radio" style="margin-right: 10px;" onClick="checkbox_'.$third.'_handler();" id="checkbox_'.$third.'"/>'.$online_tests[0][$third].'</div>'.PHP_EOL;
        echo '</td>'.PHP_EOL;
        echo '<td>'.PHP_EOL;
        echo '<div style="font-size: large;line-height: 2em; color: black; " ><input type="radio" onClick="checkbox_'.$fourth.'_handler();" style="margin-right: 10px;" id="checkbox_'.$fourth.'"/>'.$online_tests[0][$fourth].'</div>'.PHP_EOL;
        echo '</td>'.PHP_EOL;
        echo '</tr>'.PHP_EOL;
        echo '</table>'.PHP_EOL;
     echo '<script>'.PHP_EOL;
        echo 'function checkbox_'.$fourth.'_handler(){'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$second.'").checked = false;'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$third.'").checked = false;'.PHP_EOL;
        echo ' };'.PHP_EOL;
        echo 'function checkbox_'.$third.'_handler(){'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$fourth.'").checked = false;'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$second.'").checked = false;'.PHP_EOL;
        echo ' };'.PHP_EOL;
        echo 'function checkbox_'.$second.'_handler(){'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$fourth.'").checked = false;'.PHP_EOL;
        echo 'document.getElementById("checkbox_'.$third.'").checked = false;'.PHP_EOL;
        echo ' };'.PHP_EOL;
     echo '</script>'.PHP_EOL;
}
function full_date($date_data){
 $year = date_format(date_create($date_data), 'Y');
 $month = month_converter(date_format(date_create($date_data),'F'));
 $day = date_format(date_create($date_data), 'd');
 $full_date = $year.". ".$month." ".$day.".";
 return $full_date;
}

function category_converter($category){
if(strcmp($category, "daily_life") == 0){
return "Mindennapi élet";
}
if(strcmp($category, "general") == 0){
return "Általános";
}
if(strcmp($category, "grammar") == 0){
return "Nyelvtan";
}
if(strcmp($category, "business") == 0){
return "Üzlet";
}
}
function month_converter($month_english){
if(strcmp($month_english, "January") == 0){
return "Január";
}
if(strcmp($month_english, "February") == 0){
return "Február";
}
if(strcmp($month_english, "March") == 0){
return "Március";
}
if(strcmp($month_english, "April") == 0){
return "Április";
}
if(strcmp($month_english, "May") == 0){
return "Május";
}
if(strcmp($month_english, "June") == 0){
return "Június";
}
if(strcmp($month_english, "July") == 0){
return "Július";
}
if(strcmp($month_english, "August") == 0){
return "Augusztus";
}
if(strcmp($month_english, "September") == 0){
return "Szeptember";
}
if(strcmp($month_english, "November") == 0){
return "November";
}
if(strcmp($month_english, "October") == 0){
return "Október";
}
if(strcmp($month_english, "December") == 0){
return "December";
}

return "Unknown";
}


$request = $_SERVER['REQUEST_URI'];

####################################
# get_div function
####################################
function get_div($div_id,$div_style,$div_class){
echo ' <div id="'.$div_id.'" style="'.$div_style.'" class='.$div_class.'>'.PHP_EOL;
}
####################################
# get_div_close function
####################################
function get_div_close(){
echo '</div>'.PHP_EOL;
}
####################################
# get_url_with_title function
####################################
function get_url_with_title($title){
  $handler = new DatabaseHandler;
  return $handler->conditional_select_from("article",array("title" => $title ))[0]['titleForUrl'];
}

####################################
# get_page_content function
####################################
function get_page_content($content,$has_sidebar){
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;
echo '<div class="blog-box row">'.PHP_EOL;
echo '<div class="blog-meta big-meta" style="width: 100%; max-width: 100%; text-align: justify;">'.PHP_EOL;
echo '<div class="" style="width: 100%; max-width: 100%; text-align: justify;">'.PHP_EOL;
#echo '<div class="blog-meta big-meta" style="width: 100%; max-width: 100%; text-align: justify;">'.PHP_EOL;
echo $content;
echo '</div><!-- end meta -->'.PHP_EOL;
echo '</div><!-- end blog-box -->'.PHP_EOL;
echo '<hr class="invis">'.PHP_EOL;
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '<hr class="invis">'.PHP_EOL;
echo '</div><!-- end col -->'.PHP_EOL;
if($has_sidebar){
get_sidebar();
}
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();

}

function get_sidebar(){
     $handler = new DatabaseHandler;
     $articles = array_reverse($handler->conditional_select_from("article",array("active_article" => 1)));

     echo '<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
     echo '<div class="sidebar">'.PHP_EOL;

#####################################################################################3
     echo '<div class="widget">'.PHP_EOL;
     echo '<h2 class="widget-title">Spanyolt tanulnak</h2>'.PHP_EOL;
     echo '<div class="blog-list-widget">'.PHP_EOL;
     $counter = 0;
     $users = array_reverse($handler->conditional_select_from("website_user",array("enabled" => 1 )));
     foreach($users as $user){
      $counter = $counter + 1;
      if($counter < 6){
      echo '<div class="list-group">'.PHP_EOL;
      echo '<a href="/website-user/'.$user['username'].'" class="list-group-item list-group-item-action flex-column align-items-start">'.PHP_EOL;
      echo '<div style="text-align: center" class="w-100 justify-content-between">'.PHP_EOL;

      $user_profile_image = '/home/qqwwaass/'.$GLOBALS['project_name'].'/images/user_profiles/'.$user['id'].'/1.jpg';
      if(filesize($user_profile_image) > 100){
       echo '<img style="border-radius: 50%;margin-bottom: 10px;max-height: 10em;" src="/images/user_profiles/'.$user['id'].'/1.jpg" alt="user" class="img-fluid float-left">'.PHP_EOL;
      }
      else{
       echo '<img style="border-radius: 50%;margin-bottom: 10px;max-height: 10em;" src="/noimage.png" alt="user" class="img-fluid float-left">'.PHP_EOL;
      }

      echo '<h5 class="mb-1">'.$user['username'].'</h5>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
      echo '</a>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
      }                                      
     }                                      
     echo '</div><!-- end blog-list -->'.PHP_EOL;
     echo '</div><!-- end widget -->'.PHP_EOL;
############################################################################

     echo '<div class="widget">'.PHP_EOL;
     echo '<div class="fb-page" data-href="https://www.facebook.com/Spanyoltanul&#xe1;scom-110031217438374" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Spanyoltanul&#xe1;scom-110031217438374" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Spanyoltanul&#xe1;scom-110031217438374">Spanyoltanulás.com</a></blockquote></div>'.PHP_EOL;
     echo '</div><!-- end widget -->'.PHP_EOL;
     echo '<div class="widget">'.PHP_EOL;
     echo '<h2 class="widget-title">Kapcsolat</h2>'.PHP_EOL;
     echo '<div id="message_from_user">'.PHP_EOL;
     echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="email_address" placeholder="E-mail cím">'.PHP_EOL;
     echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="user_name" placeholder="Név">'.PHP_EOL;
     echo '<textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="user_message" placeholder="Üzenet"></textarea>'.PHP_EOL;
     echo '<button type="submit" class="btn btn-primary" onclick="send_message()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
#####################################################################################3
     echo '<div class="widget">'.PHP_EOL;
     echo '<h2 class="widget-title">Ingyenes tesztek</h2>'.PHP_EOL;
     echo '<div class="blog-list-widget">'.PHP_EOL;
     $counter = 0;
     $online_tests = array_reverse($handler->conditional_select_from("online_tests",array("active_online_test" => 1)));
     foreach($online_tests as $article){
      $counter = $counter + 1;
      if($counter < 6){
      echo '<div class="list-group">'.PHP_EOL;
      echo '<h5 class="mb-1"><a style="text-transform: none!important" href="/online-test/'.$article['titleForUrl'].'" title="">'.$article['title'].'</a></h5>'.PHP_EOL;
      echo '<small>'.full_date($article['created']).' '.$article['type'].'</small>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
      }                                      
     }                                      
     echo '</div><!-- end blog-list -->'.PHP_EOL;
     echo '</div><!-- end widget -->'.PHP_EOL;
#####################################################################################3
     echo '<div class="widget">'.PHP_EOL;
     echo '<h2 class="widget-title">Bejegyzések mostanában</h2>'.PHP_EOL;
     echo '<div class="blog-list-widget">'.PHP_EOL;
     $counter = 0;
     foreach($articles as $article){
      $counter = $counter + 1;
      if($counter < 6){
      echo '<div class="list-group">'.PHP_EOL;
      echo '<a href="/article/'.$article['titleForUrl'].'" class="list-group-item list-group-item-action flex-column align-items-start">'.PHP_EOL;
      echo '<div class="w-100 justify-content-between">'.PHP_EOL;
      echo '<img src="/images/'.$article['id'].'/1.jpg" alt="'.$article['title'].'" class="img-fluid float-left">'.PHP_EOL;
      echo '<h5 class="mb-1"><a href="/article/'.$article['titleForUrl'].'" title="">'.$article['title'].'</h5>'.PHP_EOL;
      echo '<small>'.full_date($article['created']).' '.$article['type'].'</small>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
      echo '</a>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
      }                                      
     }                                      
     echo '</div><!-- end blog-list -->'.PHP_EOL;
     echo '</div><!-- end widget -->'.PHP_EOL;
############################################################################

     echo '<div class="widget">'.PHP_EOL;
     echo '<h2 class="widget-title">Népszerű kategóriák</h2>'.PHP_EOL;
     echo '<div class="link-widget">'.PHP_EOL;
     echo '<ul>'.PHP_EOL;
     $category  = "kolumbia";
     $articles = $handler->conditional_select_from("article",array("type_string" => $category ));
     $count_of_articles = count($articles);
     echo '                                        <li><a href="/category/kolumbia">Kolumbia ('.$count_of_articles.')</a></li>'.PHP_EOL;
     $category  = "spanyolorszag";
     $articles = $handler->conditional_select_from("article",array("type_string" => $category ));
     $count_of_articles = count($articles);
     echo '                                        <li><a href="/category/spanyolorszag">Spanyolország ('.$count_of_articles.')</a></li>'.PHP_EOL;
     $category  = "alapok";
     $articles = $handler->conditional_select_from("article",array("type_string" => $category ));
     $count_of_articles = count($articles);
     echo '                                        <li><a href="/category/alapok">Alapok ('.$count_of_articles.')</a></li>'.PHP_EOL;
     $category  = "mexiko";
     $articles = $handler->conditional_select_from("article",array("type_string" => $category ));
     $count_of_articles = count($articles);
     echo '<li><a href="/category/mexiko">Mexikó ('.$count_of_articles.')</a></li>'.PHP_EOL;
     echo '</ul>'.PHP_EOL;
     echo '</div><!-- end link-widget -->'.PHP_EOL;
     echo '</div><!-- end widget -->'.PHP_EOL;
     echo '</div><!-- end sidebar -->'.PHP_EOL;
     echo '</div><!-- end col -->'.PHP_EOL;
}

function get_page_nav(){
     return;

     echo '<div class="row">'.PHP_EOL;
     echo '    <div class="col-md-12">'.PHP_EOL;
     echo '        <nav aria-label="Page navigation">'.PHP_EOL;
     echo '            <ul class="pagination justify-content-start">'.PHP_EOL;
     echo '                <li class="page-item"><a class="page-link" href="#">1</a></li>'.PHP_EOL;
     echo '                <li class="page-item"><a class="page-link" href="#">2</a></li>'.PHP_EOL;
     echo '                <li class="page-item"><a class="page-link" href="#">3</a></li>'.PHP_EOL;
     echo '                <li class="page-item">'.PHP_EOL;
     echo '                    <a class="page-link" href="#">Next</a>'.PHP_EOL;
     echo '                </li>'.PHP_EOL;
     echo '            </ul>'.PHP_EOL;
     echo '        </nav>'.PHP_EOL;
     echo '    </div><!-- end col -->'.PHP_EOL;
     echo '</div><!-- end row -->'.PHP_EOL;
}
function get_foot(){

$width_data = "max-width: 90px";
$width_data_2 = "min-width: 704px";
$width_data_3 = "min-width: 992px";
$height_data = "height: 500px;";
if(is_mobile_browser()){
$width_data = "width: 100%";
$width_data_2 = "min-width: 100%";
$width_data_3 = "width: 100%";
$height_data = "height: 670px;";
}
     echo '<section style="clear: both; width: 100%; border-top: solid 1px #666; background-color: #313c53; padding-top: 20px; padding-bottom: 30px; font-size: 120%; bottom: 0;">'.PHP_EOL;
     echo '    <div class="footermenu" style="width: 100%;">'.PHP_EOL;
     echo '      <div style="    background-color: #313c53; padding: 30px 0; overflow: hidden; width: 1100px; margin: 0 auto;">'.PHP_EOL;
     echo '  <div style="clear:both"></div>'.PHP_EOL;
     echo '        <div style="width: 220px; float: left; overflow: hidden; margin: 35px 0 35px 40px;">'.PHP_EOL;
     echo '          <p style="display: block; padding: 0 0 5px; font-size: 14px; color: #FFFFFF; font-weight: bold; border-bottom: solid 1px #FFFFFF; margin-bottom: 15px;">Az oldalról</p>'.PHP_EOL;
     echo '          <ul style="width: 220px; list-style: none;line-height: 2em;">'.PHP_EOL;
     echo '            <li><a href="/terms-and-conditions">Feltételek</a></li>'.PHP_EOL;
     echo '            <li><a href="/cookie-policy">Sütik</a></li>'.PHP_EOL;
     echo '          </ul>'.PHP_EOL;
     echo '        </div>'.PHP_EOL;
     echo '        <div style="width: 220px; float: left; overflow: hidden; margin: 35px 0 35px 40px;">'.PHP_EOL;
     echo '          <p style="display: block; padding: 0 0 5px; font-size: 14px; color: #FFFFFF; font-weight: bold; border-bottom: solid 1px #FFFFFF; margin-bottom: 15px;">Együttműködés</p>'.PHP_EOL;
     echo '          <ul style="width: 220px; list-style: none; line-height: 2em;" >'.PHP_EOL;
     echo '            <li><a href="/advertisement">Hirdetések</a></li>'.PHP_EOL;
     echo '            <li><a href="/partners">Partnerek</a></li>'.PHP_EOL;
     echo '            <li><a href="/social-media">Közösségi média</a></li>'.PHP_EOL;
     echo '            <li><a href="/contact-us">Kapcsolat</a></li>'.PHP_EOL;
     echo '          </ul>'.PHP_EOL;
     echo '        </div>'.PHP_EOL;
     echo '<div style="width: 44%; margin-left: 80px; margin-top: 39px;" class="fb-page" data-href="https://www.facebook.com/Betufront-101826948360331" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Betufront-101826948360331" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Betufront-101826948360331">Betufront</a></blockquote></div>'.PHP_EOL;
     echo '        <div style="text-align: left; font-size: 12px; color: #fff; clear: left; margin-left: 50px;">'.PHP_EOL;
     echo '          <p>© 2020 BETUFRONT | Használt könyvek piactere. Ingyenes hirdetésfeladás. Használt könyvek eladása. | Minden jog fenntartva.</p>'.PHP_EOL;
     echo '        </div>'.PHP_EOL;
     echo '        <!-- /#footerIn --></div>'.PHP_EOL;
     echo '      <!-- /#footer1 --></div>'.PHP_EOL;
     echo '  </section>'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '<script>'.PHP_EOL;
     echo 'function send_message(){'.PHP_EOL;
     echo 'var jsondata = { '.PHP_EOL;
     echo '        "email_address": document.getElementById("email_address").value, '.PHP_EOL;
     echo '        "user_message": document.getElementById("user_message").value, '.PHP_EOL;
     echo '        "user_name": document.getElementById("user_name").value, '.PHP_EOL;
     echo '        "data_type_from_site": 1 '.PHP_EOL;
     echo '    };   '.PHP_EOL;
     echo '    $.ajax({ '.PHP_EOL;
     echo '        url: "/send-message-from-site/", '.PHP_EOL;
     echo '        method: "POST",'.PHP_EOL;
     echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
     echo '        contentType: "json", '.PHP_EOL;
     echo '        success: function(data){ '.PHP_EOL;
     echo '         document.getElementById("message_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Hamarosan választ kapsz.</span>"; '.PHP_EOL;
     echo '        }, '.PHP_EOL;
     echo '        error: function(errMsg) { '.PHP_EOL;
     echo '         document.getElementById("message_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Hamarosan választ kapsz.</span>"; '.PHP_EOL;
     echo '        } '.PHP_EOL;
     echo '    }); '.PHP_EOL;
     echo ' };'.PHP_EOL;
     echo '</script>'.PHP_EOL;



#     echo ' <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.PHP_EOL;
#     echo '   <div class="modal-dialog" role="document">'.PHP_EOL;
#     echo '     <div class="modal-content">'.PHP_EOL;
#     echo '       <div class="modal-header">'.PHP_EOL;
#     echo '         <h5 class="modal-title" style="font-size: larger" id="exampleModalLabel">Személyes részleg</h5>'.PHP_EOL;
#     echo '         <button type="button" class="close" data-dismiss="modal" aria-label="Close">'.PHP_EOL;
#     echo '           <span id="close_button" aria-hidden="true">&times;</span>'.PHP_EOL;
#     echo '         </button>'.PHP_EOL;
#     echo '       </div>'.PHP_EOL;
#     echo '         <div style="display: flex;  border-bottom: 1px solid #e9ecef;">'.PHP_EOL;
#     echo '         <ul style="display: flex;">'.PHP_EOL;
#     echo '          <li style="margin-right: 0.5em;margin-left: 0.5em;" onclick="display_login();"><a style="color: black" href="#">Belépés |</a></li>'.PHP_EOL;
#     echo '          <li onclick="display_registration();" ><a style="color: black" href="#">Regisztráció</a></li>'.PHP_EOL;
#     echo '         </ul>'.PHP_EOL;
#     echo '         </div>'.PHP_EOL;
#     echo '       <div id="login_form" class="modal-body" style="text-align: center">'.PHP_EOL;
#     echo '        <form id="login_form" style="text-align: center;">'.PHP_EOL;
#     echo '         <ul>'.PHP_EOL;
#     echo '         <li>E-mail cím</li>'.PHP_EOL;
#     echo '         <li><input id="login_email" type="email"></li>'.PHP_EOL;
#     echo '         <li>Jelszó</li>'.PHP_EOL;
#     echo '         <li><input id="login_password" type="password"></li>'.PHP_EOL;
#     echo '         <li style="color: red; display: none" id="password_error">A jelszó nem megfelelő</li>'.PHP_EOL;
#     echo '         <li><div style="text-align: center;margin-left: 4em;margin-top: 0.5em;"><a nohref style="cursor:pointer;text-decoration:underline dotted!important" onClick="display_forgot_password();" >Elfelejtetted a jelszavad?</a></div> </li>'.PHP_EOL;
#     echo '         </ul>'.PHP_EOL;
#     echo '        </form>'.PHP_EOL;
#     echo '         <button onclick="login_user();" value="Belépek" class="register-button">Belépek</button>'.PHP_EOL;
#     echo '       </div>'.PHP_EOL;
#     echo '       <div id="registration_form" class="modal-body" style="text-align: center; display: none">'.PHP_EOL;
#     echo '        <form id="registration_form" style="text-align: center;">'.PHP_EOL;
#     echo '         <ul>'.PHP_EOL;
#     echo '         <li>E-mail cím</li>'.PHP_EOL;
#     echo '         <li><input id="register_email" type="email"></li>'.PHP_EOL;
#
#     echo '         <li>Név</li>'.PHP_EOL;
#     echo '         <li><input id="register_name" type="text"></li>'.PHP_EOL;
#
#     echo '         <li>Felhasználónév</li>'.PHP_EOL;
#     echo '         <li><input id="register_username" type="text"></li>'.PHP_EOL;
#
#     echo '         <li>Bemutatkozás pár szóban</li>'.PHP_EOL;
#     echo '         <li><input id="register_self_introduction" type="text"></li>'.PHP_EOL;
#
#     echo '         <li>Nemed</li>'.PHP_EOL;
#     echo '         <select name="cars" id="registered_sex">'.PHP_EOL;
#     echo '           <option value="férfi">férfi</option>'.PHP_EOL;
#     echo '           <option value="nő">nő</option>'.PHP_EOL;
#     echo '         </select>'.PHP_EOL;
#
#     echo '         <li>Hol laksz?</li>'.PHP_EOL;
#     echo '         <select name="cars" id="registered_country">'.PHP_EOL;
#     echo '           <option value="Magyarország">Magyarország</option>'.PHP_EOL;
#     echo '           <option value="Abházia">Abházia</option>'.PHP_EOL;
#     echo '           <option value="Afganisztán">Afganisztán</option>'.PHP_EOL;
#     echo '           <option value="Albánia">Albánia</option>'.PHP_EOL;
#     echo '           <option value="Algéria">Algéria</option>'.PHP_EOL;
#     echo '           <option value="Amerikai Szamoa">Amerikai Szamoa</option>'.PHP_EOL;
#     echo '           <option value="Amerikai Virgin-szigetek">Amerikai Virgin-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Andorra">Andorra</option>'.PHP_EOL;
#     echo '           <option value="Angola">Angola</option>'.PHP_EOL;
#     echo '           <option value="Anguilla">Anguilla</option>'.PHP_EOL;
#     echo '           <option value="Antigua és Barbuda">Antigua és Barbuda</option>'.PHP_EOL;
#     echo '           <option value="Argentína">Argentína</option>'.PHP_EOL;
#     echo '           <option value="Aruba">Aruba</option>'.PHP_EOL;
#     echo '           <option value="Ausztria">Ausztria</option>'.PHP_EOL;
#     echo '           <option value="Ausztrália">Ausztrália</option>'.PHP_EOL;
#     echo '           <option value="Ausztrália Ashmore- és Cartier-szigetek">Ausztrália Ashmore- és Cartier-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Ausztrália Heard-sziget és McDonald-szigetek">Ausztrália Heard-sziget és McDonald-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Ausztrália Korall-tengeri-szigetek">Ausztrália Korall-tengeri-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Azerbajdzsán">Azerbajdzsán</option>'.PHP_EOL;
#     echo '           <option value="Bahama-szigetek">Bahama-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Bahrein">Bahrein</option>'.PHP_EOL;
#     echo '           <option value="Banglades">Banglades</option>'.PHP_EOL;
#     echo '           <option value="Barbados">Barbados</option>'.PHP_EOL;
#     echo '           <option value="Belgium">Belgium</option>'.PHP_EOL;
#     echo '           <option value="Belize">Belize</option>'.PHP_EOL;
#     echo '           <option value="Benin">Benin</option>'.PHP_EOL;
#     echo '           <option value="Bermuda">Bermuda</option>'.PHP_EOL;
#     echo '           <option value="Bhután">Bhután</option>'.PHP_EOL;
#     echo '           <option value="Bissau-Guinea">Bissau-Guinea</option>'.PHP_EOL;
#     echo '           <option value="Bolívia">Bolívia</option>'.PHP_EOL;
#     echo '           <option value="Bosznia-Hercegovina">Bosznia-Hercegovina</option>'.PHP_EOL;
#     echo '           <option value="Botswana">Botswana</option>'.PHP_EOL;
#     echo '           <option value="Brazília">Brazília</option>'.PHP_EOL;
#     echo '           <option value="Brit Indiai-óceáni Terület">Brit Indiai-óceáni Terület</option>'.PHP_EOL;
#     echo '           <option value="Brit Virgin-szigetek">Brit Virgin-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Brunei">Brunei</option>'.PHP_EOL;
#     echo '           <option value="Bulgária">Bulgária</option>'.PHP_EOL;
#     echo '           <option value="Burkina Faso">Burkina Faso</option>'.PHP_EOL;
#     echo '           <option value="Burundi">Burundi</option>'.PHP_EOL;
#     echo '           <option value="Chile">Chile</option>'.PHP_EOL;
#     echo '           <option value="Ciprus">Ciprus</option>'.PHP_EOL;
#     echo '           <option value="Comore-szigetek">Comore-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Cook-szigetek">Cook-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Costa Rica">Costa Rica</option>'.PHP_EOL;
#     echo '           <option value="Csehország">Csehország</option>'.PHP_EOL;
#     echo '           <option value="Csád">Csád</option>'.PHP_EOL;
#     echo '           <option value="Curaçao">Curaçao</option>'.PHP_EOL;
#     echo '           <option value="Dnyeszter Menti Köztársaság">Dnyeszter Menti Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Dominikai Köztársaság">Dominikai Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Dominikai Közösség">Dominikai Közösség</option>'.PHP_EOL;
#     echo '           <option value="Dzsibuti">Dzsibuti</option>'.PHP_EOL;
#     echo '           <option value="Dánia">Dánia</option>'.PHP_EOL;
#     echo '           <option value="Dél-Korea">Dél-Korea</option>'.PHP_EOL;
#     echo '           <option value="Dél-Oszétia">Dél-Oszétia</option>'.PHP_EOL;
#     echo '           <option value="Dél-Szudán">Dél-Szudán</option>'.PHP_EOL;
#     echo '           <option value="Dél-afrikai Köztársaság">Dél-afrikai Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Déli-Georgia és Déli-Sandwich-szigetek">Déli-Georgia és Déli-Sandwich-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Ecuador">Ecuador</option>'.PHP_EOL;
#     echo '           <option value="Egyenlítői-Guinea">Egyenlítői-Guinea</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Arab Emírségek">Egyesült Arab Emírségek</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Királyság">Egyesült Királyság</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Királyság Akrotíri és Dekélia">Egyesült Királyság Akrotíri és Dekélia</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Államok Baker-sziget">Egyesült Államok Baker-sziget</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Államok Howland-sziget">Egyesült Államok Howland-sziget</option>'.PHP_EOL;
#     echo '           <option value="Egyesült Államok Jarvis-sziget">Egyesült Államok Jarvis-sziget</option>'.PHP_EOL;
#     echo '           <option value="Egyiptom">Egyiptom</option>'.PHP_EOL;
#     echo '           <option value="Elefántcsontpart">Elefántcsontpart</option>'.PHP_EOL;
#     echo '           <option value="Eritrea">Eritrea</option>'.PHP_EOL;
#     echo '           <option value="Etiópia">Etiópia</option>'.PHP_EOL;
#     echo '           <option value="Európai Unió">Európai Unió</option>'.PHP_EOL;
#     echo '           <option value="Falkland-szigetek">Falkland-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Fehéroroszország">Fehéroroszország</option>'.PHP_EOL;
#     echo '           <option value="Feröer">Feröer</option>'.PHP_EOL;
#     echo '           <option value="Fidzsi-szigetek">Fidzsi-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Finnország">Finnország</option>'.PHP_EOL;
#     echo '           <option value="Francia Polinézia">Francia Polinézia</option>'.PHP_EOL;
#     echo '           <option value="Franciaország">Franciaország</option>'.PHP_EOL;
#     echo '           <option value="Franciaország Clipperton-sziget">Franciaország Clipperton-sziget</option>'.PHP_EOL;
#     echo '           <option value="Franciaország Francia déli és antarktiszi területek">Franciaország Francia déli és antarktiszi területek</option>'.PHP_EOL;
#     echo '           <option value="Fülöp-szigetek">Fülöp-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Gabon">Gabon</option>'.PHP_EOL;
#     echo '           <option value="Gambia">Gambia</option>'.PHP_EOL;
#     echo '           <option value="Ghána">Ghána</option>'.PHP_EOL;
#     echo '           <option value="Gibraltár">Gibraltár</option>'.PHP_EOL;
#     echo '           <option value="Grenada">Grenada</option>'.PHP_EOL;
#     echo '           <option value="Grönland">Grönland</option>'.PHP_EOL;
#     echo '           <option value="Grúzia">Grúzia</option>'.PHP_EOL;
#     echo '           <option value="Guam">Guam</option>'.PHP_EOL;
#     echo '           <option value="Guatemala">Guatemala</option>'.PHP_EOL;
#     echo '           <option value="Guernsey Bailiffség">Guernsey Bailiffség</option>'.PHP_EOL;
#     echo '           <option value="Guinea">Guinea</option>'.PHP_EOL;
#     echo '           <option value="Guyana">Guyana</option>'.PHP_EOL;
#     echo '           <option value="Görögország">Görögország</option>'.PHP_EOL;
#     echo '           <option value="Haiti">Haiti</option>'.PHP_EOL;
#     echo '           <option value="Hegyi-Karabah Köztársaság">Hegyi-Karabah Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Hollandia">Hollandia</option>'.PHP_EOL;
#     echo '           <option value="Honduras">Honduras</option>'.PHP_EOL;
#     echo '           <option value="Hongkong">Hongkong</option>'.PHP_EOL;
#     echo '           <option value="Horvátország">Horvátország</option>'.PHP_EOL;
#     echo '           <option value="India">India</option>'.PHP_EOL;
#     echo '           <option value="Indonézia">Indonézia</option>'.PHP_EOL;
#     echo '           <option value="Irak">Irak</option>'.PHP_EOL;
#     echo '           <option value="Irán">Irán</option>'.PHP_EOL;
#     echo '           <option value="Izland">Izland</option>'.PHP_EOL;
#     echo '           <option value="Izrael">Izrael</option>'.PHP_EOL;
#     echo '           <option value="Jamaica">Jamaica</option>'.PHP_EOL;
#     echo '           <option value="Japán">Japán</option>'.PHP_EOL;
#     echo '           <option value="Jemen">Jemen</option>'.PHP_EOL;
#     echo '           <option value="Jersey Bailiffség">Jersey Bailiffség</option>'.PHP_EOL;
#     echo '           <option value="Johnston-atoll">Johnston-atoll</option>'.PHP_EOL;
#     echo '           <option value="Jordánia">Jordánia</option>'.PHP_EOL;
#     echo '           <option value="Kajmán-szigetek">Kajmán-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Kambodzsa">Kambodzsa</option>'.PHP_EOL;
#     echo '           <option value="Kamerun">Kamerun</option>'.PHP_EOL;
#     echo '           <option value="Kanada">Kanada</option>'.PHP_EOL;
#     echo '           <option value="Karácsony-sziget">Karácsony-sziget</option>'.PHP_EOL;
#     echo '           <option value="Katar">Katar</option>'.PHP_EOL;
#     echo '           <option value="Kazahsztán">Kazahsztán</option>'.PHP_EOL;
#     echo '           <option value="Kelet-Timor">Kelet-Timor</option>'.PHP_EOL;
#     echo '           <option value="Kenya">Kenya</option>'.PHP_EOL;
#     echo '           <option value="Kirgizisztán">Kirgizisztán</option>'.PHP_EOL;
#     echo '           <option value="Kiribati">Kiribati</option>'.PHP_EOL;
#     echo '           <option value="Kolumbia">Kolumbia</option>'.PHP_EOL;
#     echo '           <option value="Kongói Demokratikus Köztársaság">Kongói Demokratikus Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Kongói Köztársaság">Kongói Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Koszovó">Koszovó</option>'.PHP_EOL;
#     echo '           <option value="Kuba">Kuba</option>'.PHP_EOL;
#     echo '           <option value="Kuvait">Kuvait</option>'.PHP_EOL;
#     echo '           <option value="Kína">Kína</option>'.PHP_EOL;
#     echo '           <option value="Kókusz (Keeling)-szigetek">Kókusz (Keeling)-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Közép-afrikai Köztársaság">Közép-afrikai Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Laosz">Laosz</option>'.PHP_EOL;
#     echo '           <option value="Lengyelország">Lengyelország</option>'.PHP_EOL;
#     echo '           <option value="Lesotho">Lesotho</option>'.PHP_EOL;
#     echo '           <option value="Lettország">Lettország</option>'.PHP_EOL;
#     echo '           <option value="Libanon">Libanon</option>'.PHP_EOL;
#     echo '           <option value="Libéria">Libéria</option>'.PHP_EOL;
#     echo '           <option value="Liechtenstein">Liechtenstein</option>'.PHP_EOL;
#     echo '           <option value="Litvánia">Litvánia</option>'.PHP_EOL;
#     echo '           <option value="Luxemburg">Luxemburg</option>'.PHP_EOL;
#     echo '           <option value="Líbia">Líbia</option>'.PHP_EOL;
#     echo '           <option value="Madagaszkár">Madagaszkár</option>'.PHP_EOL;
#     echo '           <option value="Makaó">Makaó</option>'.PHP_EOL;
#     echo '           <option value="Malajzia">Malajzia</option>'.PHP_EOL;
#     echo '           <option value="Malawi">Malawi</option>'.PHP_EOL;
#     echo '           <option value="Maldív-szigetek">Maldív-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Mali">Mali</option>'.PHP_EOL;
#     echo '           <option value="Man">Man</option>'.PHP_EOL;
#     echo '           <option value="Marokkó">Marokkó</option>'.PHP_EOL;
#     echo '           <option value="Marshall-szigetek">Marshall-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Mauritius">Mauritius</option>'.PHP_EOL;
#     echo '           <option value="Mauritánia">Mauritánia</option>'.PHP_EOL;
#     echo '           <option value="Mayotte Mayotte">Mayotte Mayotte</option>'.PHP_EOL;
#     echo '           <option value="Mexikó">Mexikó</option>'.PHP_EOL;
#     echo '           <option value="Mianmar">Mianmar</option>'.PHP_EOL;
#     echo '           <option value="Midway-atoll">Midway-atoll</option>'.PHP_EOL;
#     echo '           <option value="Mikronézia">Mikronézia</option>'.PHP_EOL;
#     echo '           <option value="Moldova">Moldova</option>'.PHP_EOL;
#     echo '           <option value="Monaco">Monaco</option>'.PHP_EOL;
#     echo '           <option value="Mongólia">Mongólia</option>'.PHP_EOL;
#     echo '           <option value="Montenegró">Montenegró</option>'.PHP_EOL;
#     echo '           <option value="Montserrat">Montserrat</option>'.PHP_EOL;
#     echo '           <option value="Mozambik">Mozambik</option>'.PHP_EOL;
#     echo '           <option value="Málta">Málta</option>'.PHP_EOL;
#     echo '           <option value="Namíbia">Namíbia</option>'.PHP_EOL;
#     echo '           <option value="Nauru">Nauru</option>'.PHP_EOL;
#     echo '           <option value="Navassa-sziget">Navassa-sziget</option>'.PHP_EOL;
#     echo '           <option value="Nepál">Nepál</option>'.PHP_EOL;
#     echo '           <option value="Nicaragua">Nicaragua</option>'.PHP_EOL;
#     echo '           <option value="Niger">Niger</option>'.PHP_EOL;
#     echo '           <option value="Nigéria">Nigéria</option>'.PHP_EOL;
#     echo '           <option value="Niue">Niue</option>'.PHP_EOL;
#     echo '           <option value="Norfolk-sziget">Norfolk-sziget</option>'.PHP_EOL;
#     echo '           <option value="Norvégia">Norvégia</option>'.PHP_EOL;
#     echo '           <option value="Norvégia Bouvet-sziget">Norvégia Bouvet-sziget</option>'.PHP_EOL;
#     echo '           <option value="Norvégia Spitzbergák">Norvégia Spitzbergák</option>'.PHP_EOL;
#     echo '           <option value="Nyugat-Szahara">Nyugat-Szahara</option>'.PHP_EOL;
#     echo '           <option value="Németország">Németország</option>'.PHP_EOL;
#     echo '           <option value="Olaszország">Olaszország</option>'.PHP_EOL;
#     echo '           <option value="Omán">Omán</option>'.PHP_EOL;
#     echo '           <option value="Oroszország">Oroszország</option>'.PHP_EOL;
#     echo '           <option value="Pakisztán">Pakisztán</option>'.PHP_EOL;
#     echo '           <option value="Palau">Palau</option>'.PHP_EOL;
#     echo '           <option value="Palesztina">Palesztina</option>'.PHP_EOL;
#     echo '           <option value="Palmyra-atoll">Palmyra-atoll</option>'.PHP_EOL;
#     echo '           <option value="Panama">Panama</option>'.PHP_EOL;
#     echo '           <option value="Paraguay">Paraguay</option>'.PHP_EOL;
#     echo '           <option value="Peru">Peru</option>'.PHP_EOL;
#     echo '           <option value="Pitcairn-szigetek">Pitcairn-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Portugália">Portugália</option>'.PHP_EOL;
#     echo '           <option value="Puerto Rico">Puerto Rico</option>'.PHP_EOL;
#     echo '           <option value="Pápua Új-Guinea">Pápua Új-Guinea</option>'.PHP_EOL;
#     echo '           <option value="Románia">Románia</option>'.PHP_EOL;
#     echo '           <option value="Ruanda">Ruanda</option>'.PHP_EOL;
#     echo '           <option value="Saint Kitts és Nevis">Saint Kitts és Nevis</option>'.PHP_EOL;
#     echo '           <option value="Saint Lucia">Saint Lucia</option>'.PHP_EOL;
#     echo '           <option value="Saint Vincent és a Grenadine-szigetek">Saint Vincent és a Grenadine-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Saint-Barthélemy">Saint-Barthélemy</option>'.PHP_EOL;
#     echo '           <option value="Saint-Martin">Saint-Martin</option>'.PHP_EOL;
#     echo '           <option value="Saint-Pierre és Miquelon Saint-Pierre és Miquelon">Saint-Pierre és Miquelon Saint-Pierre és Miquelon</option>'.PHP_EOL;
#     echo '           <option value="Salamon-szigetek">Salamon-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Salvador">Salvador</option>'.PHP_EOL;
#     echo '           <option value="San Marino">San Marino</option>'.PHP_EOL;
#     echo '           <option value="Seychelle-szigetek">Seychelle-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Sierra Leone">Sierra Leone</option>'.PHP_EOL;
#     echo '           <option value="Sint Maarten">Sint Maarten</option>'.PHP_EOL;
#     echo '           <option value="Spanyolország">Spanyolország</option>'.PHP_EOL;
#     echo '           <option value="Srí Lanka">Srí Lanka</option>'.PHP_EOL;
#     echo '           <option value="Suriname">Suriname</option>'.PHP_EOL;
#     echo '           <option value="Svájc">Svájc</option>'.PHP_EOL;
#     echo '           <option value="Svédország">Svédország</option>'.PHP_EOL;
#     echo '           <option value="Szamoa">Szamoa</option>'.PHP_EOL;
#     echo '           <option value="Szaúd-Arábia">Szaúd-Arábia</option>'.PHP_EOL;
#     echo '           <option value="Szenegál">Szenegál</option>'.PHP_EOL;
#     echo '           <option value="Szent Ilona">Szent Ilona</option>'.PHP_EOL;
#     echo '           <option value="Szerbia">Szerbia</option>'.PHP_EOL;
#     echo '           <option value="Szingapúr">Szingapúr</option>'.PHP_EOL;
#     echo '           <option value="Szlovákia">Szlovákia</option>'.PHP_EOL;
#     echo '           <option value="Szlovénia">Szlovénia</option>'.PHP_EOL;
#     echo '           <option value="Szomália">Szomália</option>'.PHP_EOL;
#     echo '           <option value="Szomáliföld">Szomáliföld</option>'.PHP_EOL;
#     echo '           <option value="Szudán">Szudán</option>'.PHP_EOL;
#     echo '           <option value="Szváziföld">Szváziföld</option>'.PHP_EOL;
#     echo '           <option value="Szíria">Szíria</option>'.PHP_EOL;
#     echo '           <option value="São Tomé és Príncipe">São Tomé és Príncipe</option>'.PHP_EOL;
#     echo '           <option value="Tajvan">Tajvan</option>'.PHP_EOL;
#     echo '           <option value="Tanzánia">Tanzánia</option>'.PHP_EOL;
#     echo '           <option value="Thaiföld">Thaiföld</option>'.PHP_EOL;
#     echo '           <option value="Togo">Togo</option>'.PHP_EOL;
#     echo '           <option value="Tokelau-szigetek">Tokelau-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Tonga">Tonga</option>'.PHP_EOL;
#     echo '           <option value="Trinidad és Tobago">Trinidad és Tobago</option>'.PHP_EOL;
#     echo '           <option value="Tunézia">Tunézia</option>'.PHP_EOL;
#     echo '           <option value="Turks- és Caicos-szigetek">Turks- és Caicos-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Tuvalu">Tuvalu</option>'.PHP_EOL;
#     echo '           <option value="Tádzsikisztán">Tádzsikisztán</option>'.PHP_EOL;
#     echo '           <option value="Törökország">Törökország</option>'.PHP_EOL;
#     echo '           <option value="Türkmenisztán">Türkmenisztán</option>'.PHP_EOL;
#     echo '           <option value="USA">USA</option>'.PHP_EOL;
#     echo '           <option value="Uganda">Uganda</option>'.PHP_EOL;
#     echo '           <option value="Ukrajna">Ukrajna</option>'.PHP_EOL;
#     echo '           <option value="Uruguay">Uruguay</option>'.PHP_EOL;
#     echo '           <option value="Vanuatu">Vanuatu</option>'.PHP_EOL;
#     echo '           <option value="Vatikán">Vatikán</option>'.PHP_EOL;
#     echo '           <option value="Venezuela">Venezuela</option>'.PHP_EOL;
#     echo '           <option value="Vietnám">Vietnám</option>'.PHP_EOL;
#     echo '           <option value="Wake-sziget">Wake-sziget</option>'.PHP_EOL;
#     echo '           <option value="Wallis és Futuna Wallis és Futuna Wallis és Futuna">Wallis és Futuna Wallis és Futuna Wallis és Futuna</option>'.PHP_EOL;
#     echo '           <option value="Zambia">Zambia</option>'.PHP_EOL;
#     echo '           <option value="Zimbabwe">Zimbabwe</option>'.PHP_EOL;
#     echo '           <option value="Zöld-foki Köztársaság">Zöld-foki Köztársaság</option>'.PHP_EOL;
#     echo '           <option value="Észak-Ciprus">Észak-Ciprus</option>'.PHP_EOL;
#     echo '           <option value="Észak-Korea">Észak-Korea</option>'.PHP_EOL;
#     echo '           <option value="Észak-Macedónia">Észak-Macedónia</option>'.PHP_EOL;
#     echo '           <option value="Északi-Mariana-szigetek">Északi-Mariana-szigetek</option>'.PHP_EOL;
#     echo '           <option value="Észtország">Észtország</option>'.PHP_EOL;
#     echo '           <option value="Írország">Írország</option>'.PHP_EOL;
#     echo '           <option value="Örményország">Örményország</option>'.PHP_EOL;
#     echo '           <option value="Új-Kaledónia">Új-Kaledónia</option>'.PHP_EOL;
#     echo '           <option value="Új-Zéland">Új-Zéland</option>'.PHP_EOL;
#     echo '           <option value="Üzbegisztán">Üzbegisztán</option>'.PHP_EOL;
#     echo '         </select>'.PHP_EOL;
#
#     echo '         <li>Életkorod</li>'.PHP_EOL;
#     echo '         <select name="cars" id="registered_age">'.PHP_EOL;
#     echo '           <option value="10-18">10-18</option>'.PHP_EOL;
#     echo '           <option value="19-25">19-25</option>'.PHP_EOL;
#     echo '           <option value="26-30">26-30</option>'.PHP_EOL;
#     echo '           <option value="31-35">31-35</option>'.PHP_EOL;
#     echo '           <option value="36-40">36-40</option>'.PHP_EOL;
#     echo '           <option value="41-46">41-46</option>'.PHP_EOL;
#     echo '           <option value="47-50">47-50</option>'.PHP_EOL;
#     echo '           <option value="50-60">50-60</option>'.PHP_EOL;
#     echo '           <option value="60-70">60-70</option>'.PHP_EOL;
#     echo '           <option value="70-80">70-80</option>'.PHP_EOL;
#     echo '           <option value="80+">80+</option>'.PHP_EOL;
#     echo '         </select>'.PHP_EOL;
#
#     echo '         <li>Jelszó</li>'.PHP_EOL;
#     echo '         <li><input id="register_password" type="password"></li>'.PHP_EOL;
#
#     echo '         <li style="color: red; display: none" id="registration_error"></li>'.PHP_EOL;
#
#     echo '         </ul>'.PHP_EOL;
#     echo '        </form>'.PHP_EOL;
#     echo '         <button onclick="save_user();" value="Regisztráció" class="register-button">Regisztráció</button>'.PHP_EOL;
#     echo '       </div>'.PHP_EOL;
#     echo '       <div id="forgot_password_form" class="modal-body" style="text-align: center; display: none">'.PHP_EOL;
#     echo '        <form id="forgot_password_form" style="text-align: center;">'.PHP_EOL;
#     echo '         <ul>'.PHP_EOL;
#     echo '         <li>E-mail cím</li>'.PHP_EOL;
#     echo '         <li><input id="login_email_for_forgot_password" type="email"></li>'.PHP_EOL;
#     echo '         </ul>'.PHP_EOL;
#     echo '        </form>'.PHP_EOL;
#     echo '         <button onclick="forgot_password_user();" value="Elfelejtetted a jelszót?" class="register-button">Megújítás</button>'.PHP_EOL;
#     echo '       </div>'.PHP_EOL;
#     echo '     </div>'.PHP_EOL;
#     echo '   </div>'.PHP_EOL;
#     echo ' </div>'.PHP_EOL;
#
#     echo '<script src="/js/jquery.min.js"></script>'.PHP_EOL;
#     echo '<script src="/js/skel.min.js"></script>'.PHP_EOL;
#     echo '<script src="/js/util.js"></script>'.PHP_EOL;
#     echo '<script src="/js/main.js"></script>'.PHP_EOL;
#     echo '<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
#     echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>';
#     echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>';
#
#
#     echo '<script>';
#     echo ' function display_login(){';
#     echo '  document.getElementById("registration_form").style.display = "none";';
#     echo '  $("#login_form").fadeIn(1000);';
#     echo '  document.getElementById("forgot_password_form").style.display = "none";';
#     echo ' }';
#     echo ' function display_registration(){';
#     echo '  document.getElementById("login_form").style.display = "none";';
#     echo '  $("#registration_form").fadeIn(1000);';
#     echo '  document.getElementById("forgot_password_form").style.display = "none";';
#     echo ' }';
#     echo ' function display_forgot_password(){';
#     echo '  document.getElementById("login_form").style.display = "none";';
#     echo '  document.getElementById("registration_form").style.display = "none";';
#     echo '  $("#forgot_password_form").fadeIn(1000);';
#     echo ' }';
#     echo ' function forgot_password_user(){';
#     echo '    var jsondata = { '.PHP_EOL;
#     echo '        "email": document.getElementById("login_email_for_forgot_password").value '.PHP_EOL;
#     echo '    };   '.PHP_EOL;
#     echo '        $.ajax({';
#     echo '            type: "POST",';
#     echo '            url: \'/forgot-password-user/\',';
#     echo '            data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
#     echo '            contentType: "json", '.PHP_EOL;
#     echo '            success: function(data){';
#     echo '                urldata= data.trim();';
#     echo '                document.getElementById("forgot_password_form").innerHTML = "Ellenőrizd e-mail fiókod (a spamet is)!";';
#     echo '            }';
#     echo '        });';
#     echo '  }';
#     echo ' function login_user(){';
#     echo 'var jsondata = { '.PHP_EOL;
#     echo '        "email": document.getElementById("login_email").value, '.PHP_EOL;
#     echo '        "password": document.getElementById("login_password").value '.PHP_EOL;
#     echo '    };   '.PHP_EOL;
#     echo '        $.ajax({';
#     echo '            type: "POST",';
#     echo '            url: \'/login-user/\',';
#     echo '            data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
#     echo '            contentType: "json", '.PHP_EOL;
#     echo '            success: function(data){'.PHP_EOL;
#     echo '                urldata= data.trim();'.PHP_EOL;
#     echo '                if(urldata.includes("LOGIN_SUCCESS") ){'.PHP_EOL;
#     echo '                 document.getElementById("close_button").click();'.PHP_EOL;
#     echo '                 window.location.replace("http://www.'.$GLOBALS['project_name'].'.com/my-profile/");'.PHP_EOL;
#     echo '                }'.PHP_EOL;
#     echo '                if(urldata.includes("LOGIN_FAIL") ){'.PHP_EOL;
#     echo '                document.getElementById("password_error").style.display="block";';
#     echo '                }'.PHP_EOL;
#     echo '            }'.PHP_EOL;
#     echo '        });'.PHP_EOL;
#     echo '  }'.PHP_EOL;
#     echo ' function save_user(){'.PHP_EOL;
#     echo 'var jsondata = { '.PHP_EOL;
#     echo '        "email": document.getElementById("register_email").value, '.PHP_EOL;
#     echo '        "name": document.getElementById("register_name").value, '.PHP_EOL;
#     echo '        "username": document.getElementById("register_username").value, '.PHP_EOL;
#     echo '        "self_introduction": document.getElementById("register_self_introduction").value, '.PHP_EOL;
#     echo '        "registered_sex": document.getElementById("registered_sex").value, '.PHP_EOL;
#     echo '        "registered_country": document.getElementById("registered_country").value, '.PHP_EOL;
#     echo '        "registered_age": document.getElementById("registered_age").value, '.PHP_EOL;
#     echo '        "password": document.getElementById("register_password").value '.PHP_EOL;
#     echo '    };   '.PHP_EOL;
#     echo '        $.ajax({';
#     echo '            type: "POST",';
#     echo '            url: \'/register-user/\',';
#     echo '            data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
#     echo '            contentType: "json", '.PHP_EOL;
#     echo '            success: function(data){';
#     echo '                urldata= data.trim();'.PHP_EOL;
#
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_EXISTING_USER") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A felhasználó létezik!"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_USERNAME_TOO_SHORT") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A felhasználónév túl rövid! (min. 5 kar.)"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_USERNAME_TOO_LONG") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A felhasználónév túl hosszú! (max. 30 kar.)"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_EMAIL_TOO_SHORT") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "Az email túl rövid!"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_PASSWORD_TOO_SHORT") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A jelszó túl rövid!"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_NAME_TOO_SHORT") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A neved túl rövid!"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_SELF_INTRODUCTION_TOO_SHORT") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A bemutatkozás túl rövid! (min. 5 kar.)"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_FAILURE_SELF_INTRODUCTION_TOO_LONG") ){'.PHP_EOL;
#     echo '                 document.getElementById("registration_error").style.display="block";';
#     echo '                 document.getElementById("registration_error").innerHTML = "A bemutatkozás túl hosszú! (max. 500 kar.)"; '.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '                if(urldata.includes("REGISTRATION_SUCCESS") ){'.PHP_EOL;
#     echo '                 document.getElementById("close_button").click();'.PHP_EOL;
#     echo '                 window.location.replace("http://www.'.$GLOBALS['project_name'].'.com/registered/");'.PHP_EOL;
#     echo '                }'.PHP_EOL;
#
#     echo '            }';
#     echo '        });';
#     echo '  }';
#     echo '  function logout_user(){';
#     echo '        var dataString = "";';
#     echo '        $.ajax({';
#     echo '            type: "POST",';
#     echo '            url: \'/logout-user\',';
#     echo '            data: dataString,';
#     echo '            dataType: "html",';
#     echo '            success: function(data){';
#     echo '                 window.location.replace("http://www.'.$GLOBALS['project_name'].'.com/");'.PHP_EOL;
#     echo '            }';
#     echo '        });';
#     echo '  }';
#     echo '</script>';

     echo '</body>'.PHP_EOL;
     echo '</html>'.PHP_EOL;

}
function get_page_with_articles($has_section,$logged_in,$articles,$has_banner){

     $logged_in = True;
     $meta_content = "";
     get_head(False,$logged_in,array(),$meta_content);

#     if($has_banner){
#      echo '<div id="banner" class="container"> <img src="/big.jpg" width="100%" height="100%" alt="" /> </div>'.PHP_EOL;
#     }


#     echo '		<div id="three-column" class="container">'.PHP_EOL;
#     echo '			<header>'.PHP_EOL;
#     echo '				<h2>Legfrissebb bejegyzések</h2>'.PHP_EOL;
#     echo '			</header>'.PHP_EOL;
#     echo '			<div class="tbox1">'.PHP_EOL;
#     echo '				<div class="box-style box-style01">'.PHP_EOL;
#     echo '					<div class="content"> <a href="#" class="image image-full"><img src="images/img01.jpg" alt=""></a>'.PHP_EOL;
#     echo '						<h2>'.$articles[0]['title'].'</h2>'.PHP_EOL;
#     echo '						<p>'.$articles[0]['initial'].'</p>'.PHP_EOL;
#     echo '						<a href="/article/'.$articles[0]['titleForUrl'].'" class="button-style">Elolvasom</a> </div>'.PHP_EOL;
#     echo '				</div>'.PHP_EOL;
#     echo '			</div>'.PHP_EOL;
#     echo '			<div class="tbox2">'.PHP_EOL;
#     echo '				<div class="box-style box-style02">'.PHP_EOL;
#     echo '					<div class="content"> <a href="#" class="image image-full"><img src="images/img02.jpg" alt=""></a>'.PHP_EOL;
#     echo '						<h2>'.$articles[1]['title'].'</h2>'.PHP_EOL;
#     echo '						<p>'.$articles[1]['initial'].'</p>'.PHP_EOL;
#     echo '						<a href="/article/'.$articles[0]['titleForUrl'].'" class="button-style">Elolvasom</a> </div>'.PHP_EOL;
#     echo '				</div>'.PHP_EOL;
#     echo '			</div>'.PHP_EOL;
#     echo '			<div class="tbox3">'.PHP_EOL;
#     echo '				<div class="box-style box-style03">'.PHP_EOL;
#     echo '					<div class="content"> <a href="#" class="image image-full"><img src="images/img03.jpg" alt=""></a>'.PHP_EOL;
#     echo '						<h2>Nulla luctus eleifend </h2>'.PHP_EOL;
#     echo '						<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>'.PHP_EOL;
#     echo '						<a href="#" class="button-style">Learn More</a> </div>'.PHP_EOL;
#     echo '				</div>'.PHP_EOL;
#     echo '			</div>'.PHP_EOL;
#     echo '		</div>'.PHP_EOL;
#     echo '		<div id="page">'.PHP_EOL;
#     echo '			<div id="content"></div>'.PHP_EOL;
#     echo '			<div id="sidebar"></div>'.PHP_EOL;
#     echo '		</div>'.PHP_EOL;
#     echo '	</div>'.PHP_EOL;
#     echo '	<div id="footer-content" class="container">'.PHP_EOL;
#     echo '		<div id="fbox1">'.PHP_EOL;
#     echo '			<h2>Amik mostanában történtek</h2>'.PHP_EOL;
#     echo '			<ul class="style3">'.PHP_EOL;
#     echo '				<li class="first">'.PHP_EOL;
#     echo '					<p class="date"><a href="#">April<b>20</b></a></p>'.PHP_EOL;
#     echo '					<h3>Amet sed volutpat mauris</h3>'.PHP_EOL;
#     echo '					<p><a href="#">Mauris tempus nibh sodales adipiscing dolore.</a></p>'.PHP_EOL;
#     echo '				</li>'.PHP_EOL;
#     echo '				<li>'.PHP_EOL;
#     echo '					<p class="date"><a href="#">April<b>18</b></a></p>'.PHP_EOL;
#     echo '					<h3>Sagittis diam dolor sit amet</h3>'.PHP_EOL;
#     echo '					<p><a href="#">Duis arcu tortor fringilla sed  sed magna.</a></p>'.PHP_EOL;
#     echo '				</li>'.PHP_EOL;
#     echo '				<li>'.PHP_EOL;
#     echo '					<p class="date"><a href="#">April<b>15</b></a></p>'.PHP_EOL;
#     echo '					<h3>Adipiscing sed consequat</h3>'.PHP_EOL;
#	     echo '				<p><a href="#">Pharetra ac velit sed in volutpat nisl mauris vel.</a></p>'.PHP_EOL;
#     echo '				</li>'.PHP_EOL;
#     echo '				<li>'.PHP_EOL;
#     echo '			</ul>'.PHP_EOL;
#     echo '		</div>'.PHP_EOL;
#     echo '		<div id="fbox2">'.PHP_EOL;
#     echo '			<h2>Az oldalról</h2>'.PHP_EOL;
#     echo '			<p>A <strong> Tobzoska.com</strong> egy olyan portál, amelyen fontos és hasznos információt találhatsz szépségápolásról, új trendekről és eseményekről, amelyek Magyarországon és külföldön történnek.</p>'.PHP_EOL;
#     echo '			<a href="#" class="button-style">Lépj velünk kapcsolatba!</a> </div>'.PHP_EOL;
#     echo '		<div id="fbox3">'.PHP_EOL;
#     echo '			<h2>Kapcsolat</h2>'.PHP_EOL;
#     echo '			<p>Ha szeretnél velünk kapcsolatba lépni, akkor használd az alábbi lehetőségeket.</p>'.PHP_EOL;
#     echo '			<ul class="style5">'.PHP_EOL;
#     echo '				<li class="first"><span class="address">Cím</span> <span class="address-01">Magyarország, Budapest<br />'.PHP_EOL;
#     echo '					</span> </li>'.PHP_EOL;
#     echo '				<li> <span class="mail">E-Mail</span> <span class="mail-01"><a href="#">info@tobzoska.com</a></span> </li>'.PHP_EOL;
#     echo '				<li> <span class="phone">Telefon</span> <span class="phone-01">+(36) 30-831-69-72</span> </li>'.PHP_EOL;
#     echo '			</ul>'.PHP_EOL;
#     echo '		</div>'.PHP_EOL;
#     echo '	</div>'.PHP_EOL;
#     echo '</div>'.PHP_EOL;
#     echo '<div id="footer">'.PHP_EOL;
#     echo '	<p>&copy; Tobzoska. Minden jog fenntartva. Készítette <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Webmester <a href="https://www.linkedin.com/in/bence-lad%C3%B3czki-569299124/">BNC</a>.</p>'.PHP_EOL;
#     echo '</div>'.PHP_EOL;
#     echo '</body>'.PHP_EOL;
#     echo '</html>'.PHP_EOL;

     echo '<section id="banner">'.PHP_EOL;
     echo '<div class="inner">'.PHP_EOL;
     echo '<h1>Spanyoltanulás: <span>Itt mindent megtalálsz<br />'.PHP_EOL;
     echo 'Spanyolországról és a spanyol nyelvről.</span></h1>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</section>'.PHP_EOL;
#### 1st line
      echo '<section class="section first-section">'.PHP_EOL;
      echo '<div class="container-fluid">'.PHP_EOL;
      echo '<div class="masonry-blog clearfix">'.PHP_EOL;
      echo '<div class="left-side">'.PHP_EOL;
      echo '<div class="masonry-box post-media">'.PHP_EOL;
      echo '<img src="/images/'.$articles[0]['id'].'/1.jpg" alt="" class="img-fluid">'.PHP_EOL;
      echo '<div class="shadoweffect">'.PHP_EOL;
      echo '<div class="shadow-desc">'.PHP_EOL;
      echo '<div class="blog-meta">'.PHP_EOL;
      echo '<span class="bg-aqua"><a href="/category/'.$articles[0]['type_string'].'" title="">'.$articles[0]['type'].'</a></span>'.PHP_EOL;
      echo '<h4><a href="/article/'.$articles[0]['titleForUrl'].'" title="">'.$articles[0]['title'].'</a></h4>'.PHP_EOL;
      echo '<small style="color: white">'.date_format(date_create($articles[0]['created']), 'Y-m-d').'</small>'.PHP_EOL;
#      echo '<small><a href="#" title="">BNC</a></small>'.PHP_EOL;
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[0]['view_count'].'</small>'.PHP_EOL;
      echo '</div><!-- end meta -->'.PHP_EOL;
      echo '</div><!-- end shadow-desc -->'.PHP_EOL;
      echo '</div><!-- end shadow -->'.PHP_EOL;
      echo '</div><!-- end post-media -->'.PHP_EOL;
      echo '</div><!-- end left-side -->'.PHP_EOL;
      echo '<div class="center-side">'.PHP_EOL;
      echo '<div class="masonry-box post-media">'.PHP_EOL;
      echo '<img src="/images/'.$articles[1]['id'].'/1.jpg" alt="" class="img-fluid">'.PHP_EOL;
      echo '<div class="shadoweffect">'.PHP_EOL;
      echo '<div class="shadow-desc">'.PHP_EOL;
      echo '<div class="blog-meta">'.PHP_EOL;
      echo '<span class="bg-aqua"><a href="/category/'.$articles[1]['type_string'].'" title="">'.$articles[1]['type'].'</a></span>'.PHP_EOL;
      echo '<h4><a href="/article/'.$articles[1]['titleForUrl'].'" title="">'.$articles[1]['title'].'</a></h4>'.PHP_EOL;
      echo '<small style="color: white">'.date_format(date_create($articles[1]['created']), 'Y-m-d').'</small>'.PHP_EOL;
#      echo '<small><a href="#" title="">BNC</a></small>'.PHP_EOL;
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[1]['view_count'].'</small>'.PHP_EOL;
      echo '</div><!-- end meta -->'.PHP_EOL;
      echo '</div><!-- end shadow-desc -->'.PHP_EOL;
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end left-side -->';
      echo '<div class="right-side hidden-md-down">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[2]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[2]['type_string'].'" title="">'.$articles[2]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[2]['titleForUrl'].'" title="">'.$articles[2]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[2]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[2]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end right-side -->';
      echo '</div><!-- end masonry -->';
      echo '</div>';
      echo '</section>';
#### 2nd line
      echo '<section class="section first-section">';
      echo '<div class="container-fluid">';
      echo '<div class="masonry-blog clearfix">';
      echo '<div class="left-side">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[3]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[3]['type_string'].'" title="">'.$articles[3]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[3]['titleForUrl'].'" title="">'.$articles[3]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[3]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[3]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end left-side -->';
      echo '<div class="center-side">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[4]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[4]['type_string'].'" title="">'.$articles[4]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[4]['titleForUrl'].'" title="">'.$articles[4]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[4]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[4]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end left-side -->';
      echo '<div class="right-side hidden-md-down">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[5]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[5]['type_string'].'" title="">'.$articles[5]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[5]['titleForUrl'].'" title="">'.$articles[5]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[5]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[5]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end right-side -->';
      echo '</div><!-- end masonry -->';
      echo '</div>';
      echo '</section>';
#### 3rd line
      echo '<section class="section first-section">';
      echo '<div class="container-fluid">';
      echo '<div class="masonry-blog clearfix">';
      echo '<div class="left-side">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[6]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[6]['type_string'].'" title="">'.$articles[6]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[6]['titleForUrl'].'" title="">'.$articles[6]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[6]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[6]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end left-side -->';
      echo '<div class="center-side">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[7]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[7]['type_string'].'" title="">'.$articles[7]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[7]['titleForUrl'].'" title="">'.$articles[7]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[7]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[7]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end left-side -->';
      echo '<div class="right-side hidden-md-down">';
      echo '<div class="masonry-box post-media">';
      echo '<img src="/images/'.$articles[8]['id'].'/1.jpg" alt="" class="img-fluid">';
      echo '<div class="shadoweffect">';
      echo '<div class="shadow-desc">';
      echo '<div class="blog-meta">';
      echo '<span class="bg-aqua"><a href="/category/'.$articles[8]['type_string'].'" title="">'.$articles[8]['type'].'</a></span>';
      echo '<h4><a href="/article/'.$articles[8]['titleForUrl'].'" title="">'.$articles[8]['title'].'</a></h4>';
      echo '<small style="color: white">'.date_format(date_create($articles[8]['created']), 'Y-m-d').'</small>';
#      echo '<small><a href="#" title="">BNC</a></small>';
      echo '<small style="color: white"><i class="fa fa-eye"></i> '.$articles[8]['view_count'].'</small>';
      echo '</div><!-- end meta -->';
      echo '</div><!-- end shadow-desc -->';
      echo '</div><!-- end shadow -->';
      echo '</div><!-- end post-media -->';
      echo '</div><!-- end right-side -->';
      echo '</div><!-- end masonry -->';
      echo '</div>';
      echo '</section>';
     get_foot();


}
function get_head($has_section,$logged_in,$articles,$meta_content){
     echo '<!DOCTYPE html>'.PHP_EOL;
     echo '<html lang="hu">'.PHP_EOL;
     echo '<head>'.PHP_EOL;
     echo '<meta charset="utf-8">'.PHP_EOL;
     echo '<title>Betűfront - Használt könyvek eladása. Ingyenes piactér használt könyveid eladására.</title>'.PHP_EOL;
     echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>'.PHP_EOL;
     echo '<script type="text/javascript" language="JavaScript"> '.PHP_EOL;
     echo 'window.onload = function () {'.PHP_EOL;
     echo 'var input = document.querySelector(\'#my-text-box\');'.PHP_EOL;
     echo 'var messages = document.querySelector(\'#messages\');'.PHP_EOL;
     echo 'input.addEventListener(\'input\', function()'.PHP_EOL;
     echo '{'.PHP_EOL;
     echo 'var jsondata = { '.PHP_EOL;
     echo '        "keyword": input.value '.PHP_EOL;
     echo '    };   '.PHP_EOL;
     echo ' '.PHP_EOL;
     echo '    $.ajax({ '.PHP_EOL;
     echo '        url: "/dictionary-request", '.PHP_EOL;
     echo '        method: "POST",         '.PHP_EOL;
     echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
     echo '        contentType: "json", '.PHP_EOL;
     echo '        success: function(data){ '.PHP_EOL;
     echo 'document.getElementById("autocomplete").style.display = "block";'.PHP_EOL;
     echo 'document.getElementById("autocomplete").innerHTML =  data ;'.PHP_EOL;
     echo '        }, '.PHP_EOL;
     echo '        error: function(errMsg) { '.PHP_EOL;
     echo '            alert(errMsg);'.PHP_EOL;
     echo '        } '.PHP_EOL;
     echo '    }); '.PHP_EOL;
     echo ''.PHP_EOL;
     echo '});'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '</script>'.PHP_EOL;
     echo '<style>'.PHP_EOL;
     echo '@font-face {'.PHP_EOL;
     echo '  font-family: \'anton\';'.PHP_EOL;
     echo '  src: URL(\'anton.ttf\') format(\'truetype\');'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '@font-face {'.PHP_EOL;
     echo '  font-family: \'lato\';'.PHP_EOL;
     echo '  src: URL(\'lato.ttf\') format(\'truetype\');'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '@font-face {'.PHP_EOL;
     echo '  font-family: \'david\';'.PHP_EOL;
     echo '  src: URL(\'david.ttf\') format(\'truetype\');'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '@font-face {'.PHP_EOL;
     echo '  font-family: \'epi\';'.PHP_EOL;
     echo '  src: URL(\'epi.ttf\') format(\'truetype\');'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '@font-face {'.PHP_EOL;
     echo '  font-family: \'play\';'.PHP_EOL;
     echo '  src: URL(\'play.ttf\') format(\'truetype\');'.PHP_EOL;
     echo '}'.PHP_EOL;

     echo '	label {'.PHP_EOL;
     echo '		display: block;'.PHP_EOL;
     echo '		font-size: 0.9em;'.PHP_EOL;
     echo '		text-transform: uppercase;'.PHP_EOL;
     echo '		font-weight: 700;'.PHP_EOL;
     echo '		margin: 0 0 1em 0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="text"],'.PHP_EOL;
     echo '	input[type="password"],'.PHP_EOL;
     echo '	input[type="email"],'.PHP_EOL;
     echo '	select,'.PHP_EOL;
     echo '	textarea {'.PHP_EOL;
     echo '		-moz-appearance: none;'.PHP_EOL;
     echo '		-webkit-appearance: none;'.PHP_EOL;
     echo '		-ms-appearance: none;'.PHP_EOL;
     echo '		appearance: none;'.PHP_EOL;
     echo '		border-radius: 0;'.PHP_EOL;
     echo '		border: none;'.PHP_EOL;
     echo '		border: solid 3px;'.PHP_EOL;
     echo '		color: inherit;'.PHP_EOL;
     echo '		display: block;'.PHP_EOL;
     echo '		outline: 0;'.PHP_EOL;
     echo '		padding: 0 1em;'.PHP_EOL;
     echo '		text-decoration: none;'.PHP_EOL;
     echo '		width: 100%;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		input[type="text"]:invalid,'.PHP_EOL;
     echo '		input[type="password"]:invalid,'.PHP_EOL;
     echo '		input[type="email"]:invalid,'.PHP_EOL;
     echo '		select:invalid,'.PHP_EOL;
     echo '		textarea:invalid {'.PHP_EOL;
     echo '			box-shadow: none;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	.select-wrapper {'.PHP_EOL;
     echo '		text-decoration: none;'.PHP_EOL;
     echo '		display: block;'.PHP_EOL;
     echo '		position: relative;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		.select-wrapper:before {'.PHP_EOL;
     echo '			-moz-osx-font-smoothing: grayscale;'.PHP_EOL;
     echo '			-webkit-font-smoothing: antialiased;'.PHP_EOL;
     echo '			font-family: FontAwesome;'.PHP_EOL;
     echo '			font-style: normal;'.PHP_EOL;
     echo '			font-weight: normal;'.PHP_EOL;
     echo '			text-transform: none !important;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		.select-wrapper:before {'.PHP_EOL;
     echo '			content: \'\f078\';'.PHP_EOL;
     echo '			display: block;'.PHP_EOL;
     echo '			height: 2.75em;'.PHP_EOL;
     echo '			line-height: 2.75em;'.PHP_EOL;
     echo '			pointer-events: none;'.PHP_EOL;
     echo '			position: absolute;'.PHP_EOL;
     echo '			right: 0;'.PHP_EOL;
     echo '			text-align: center;'.PHP_EOL;
     echo '			top: 0;'.PHP_EOL;
     echo '			width: 2.75em;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		.select-wrapper select::-ms-expand {'.PHP_EOL;
     echo '			display: none;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="text"],'.PHP_EOL;
     echo '	input[type="password"],'.PHP_EOL;
     echo '	input[type="email"],'.PHP_EOL;
     echo '	select {'.PHP_EOL;
     echo '		height: 2.75em;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	textarea {'.PHP_EOL;
     echo '		padding: 0.75em 1em;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		input[type="checkbox"] + label,'.PHP_EOL;
     echo '		input[type="radio"] + label {'.PHP_EOL;
     echo '			text-decoration: none;'.PHP_EOL;
     echo '			cursor: pointer;'.PHP_EOL;
     echo '			display: inline-block;'.PHP_EOL;
     echo '			font-size: 1em;'.PHP_EOL;
     echo '			font-weight: 300;'.PHP_EOL;
     echo '			padding-left: 2.4em;'.PHP_EOL;
     echo '			padding-right: 0.75em;'.PHP_EOL;
     echo '			position: relative;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '			input[type="checkbox"] + label:before,'.PHP_EOL;
     echo '			input[type="radio"] + label:before {'.PHP_EOL;
     echo '				-moz-osx-font-smoothing: grayscale;'.PHP_EOL;
     echo '				-webkit-font-smoothing: antialiased;'.PHP_EOL;
     echo '				font-family: FontAwesome;'.PHP_EOL;
     echo '				font-style: normal;'.PHP_EOL;
     echo '				font-weight: normal;'.PHP_EOL;
     echo '				text-transform: none !important;'.PHP_EOL;
     echo '			}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '			input[type="checkbox"] + label:before,'.PHP_EOL;
     echo '			input[type="radio"] + label:before {'.PHP_EOL;
     echo '				border-radius: 0;'.PHP_EOL;
     echo '				border: solid 1px;'.PHP_EOL;
     echo '				content: \'\';'.PHP_EOL;
     echo '				display: inline-block;'.PHP_EOL;
     echo '				height: 1.65em;'.PHP_EOL;
     echo '				left: 0;'.PHP_EOL;
     echo '				line-height: 1.58125em;'.PHP_EOL;
     echo '				position: absolute;'.PHP_EOL;
     echo '				text-align: center;'.PHP_EOL;
     echo '				top: 0;'.PHP_EOL;
     echo '				width: 1.65em;'.PHP_EOL;
     echo '			}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		input[type="checkbox"]:checked + label:before,'.PHP_EOL;
     echo '		input[type="radio"]:checked + label:before {'.PHP_EOL;
     echo '			content: \'\f00c\';'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="checkbox"] + label:before {'.PHP_EOL;
     echo '		border-radius: 0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="radio"] + label:before {'.PHP_EOL;
     echo '		border-radius: 100%;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	::-webkit-input-placeholder {'.PHP_EOL;
     echo '		opacity: 1.0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	:-moz-placeholder {'.PHP_EOL;
     echo '		opacity: 1.0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	::-moz-placeholder {'.PHP_EOL;
     echo '		opacity: 1.0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	:-ms-input-placeholder {'.PHP_EOL;
     echo '		opacity: 1.0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	.formerize-placeholder {'.PHP_EOL;
     echo '		opacity: 1.0;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	label {'.PHP_EOL;
     echo '		color: #F1BF00;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="text"],'.PHP_EOL;
     echo '	input[type="password"],'.PHP_EOL;
     echo '	input[type="email"],'.PHP_EOL;
     echo '	select,'.PHP_EOL;
     echo '	textarea {'.PHP_EOL;
     echo '		background: none;'.PHP_EOL;
     echo '		border-color: #fceced;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		input[type="text"]:focus,'.PHP_EOL;
     echo '		input[type="password"]:focus,'.PHP_EOL;
     echo '		input[type="email"]:focus,'.PHP_EOL;
     echo '		select:focus,'.PHP_EOL;
     echo '		textarea:focus {'.PHP_EOL;
     echo '			border-color: #F1BF00;'.PHP_EOL;
     echo '			box-shadow: 0 0 0 1px #F1BF00;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	.select-wrapper:before {'.PHP_EOL;
     echo '		color: #F1BF00;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="checkbox"] + label,'.PHP_EOL;
     echo '	input[type="radio"] + label {'.PHP_EOL;
     echo '		color: #111111;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '		input[type="checkbox"] + label:before,'.PHP_EOL;
     echo '		input[type="radio"] + label:before {'.PHP_EOL;
     echo '			background: none;'.PHP_EOL;
     echo '			border-color: #F1BF00;'.PHP_EOL;
     echo '		}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="checkbox"]:checked + label:before,'.PHP_EOL;
     echo '	input[type="radio"]:checked + label:before {'.PHP_EOL;
     echo '		background-color: #F1BF00;'.PHP_EOL;
     echo '		border-color: #F1BF00;'.PHP_EOL;
     echo '		color: #ffffff;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	input[type="checkbox"]:focus + label:before,'.PHP_EOL;
     echo '	input[type="radio"]:focus + label:before {'.PHP_EOL;
     echo '		border-color: #F1BF00;'.PHP_EOL;
     echo '		box-shadow: 0 0 0 1px #F1BF00;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	::-webkit-input-placeholder {'.PHP_EOL;
     echo '		color: #717171 !important;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	:-moz-placeholder {'.PHP_EOL;
     echo '		color: #717171 !important;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	::-moz-placeholder {'.PHP_EOL;
     echo '		color: #717171 !important;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	:-ms-input-placeholder {'.PHP_EOL;
     echo '		color: #717171 !important;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '	.formerize-placeholder {'.PHP_EOL;
     echo '		color: #717171 !important;'.PHP_EOL;
     echo '	}'.PHP_EOL;
     echo '.atc-button--primary {'.PHP_EOL;
     echo ' color:#fff;'.PHP_EOL;
     echo ' background-color:#ff4436;'.PHP_EOL;
     echo ' border:0;'.PHP_EOL;
     echo ' font-size:1.5em;'.PHP_EOL;
     echo ' line-height:1;'.PHP_EOL;
     echo ' padding:.72222em'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.atc-button--primary:focus,'.PHP_EOL;
     echo '.atc-button--primary:hover {'.PHP_EOL;
     echo ' background-color:#da1919;'.PHP_EOL;
     echo ' color:#fff'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.atc-button--primary .atc-button__icon svg {'.PHP_EOL;
     echo ' fill:#fff'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.atc-button {'.PHP_EOL;
     echo ' font-size:1em;'.PHP_EOL;
     echo ' line-height:1.125;'.PHP_EOL;
     echo ' border-radius:6.25em;'.PHP_EOL;
     echo ' cursor:pointer;'.PHP_EOL;
     echo ' display:inline-block;'.PHP_EOL;
     echo ' margin:.5em 0;'.PHP_EOL;
     echo ' min-width:216px;'.PHP_EOL;
     echo ' padding:.75em;'.PHP_EOL;
     echo ' text-align:center;'.PHP_EOL;
     echo ' text-decoration:none;'.PHP_EOL;
     echo ' transition:background .2s linear'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.form-control {'.PHP_EOL;
     echo '  display: block;'.PHP_EOL;
     echo '  width: 100%;'.PHP_EOL;
     echo '  padding: 0.5rem 0.75rem;'.PHP_EOL;
     echo '  font-size: 1rem;'.PHP_EOL;
     echo '  line-height: 1.25;'.PHP_EOL;
     echo '  color: #464a4c;'.PHP_EOL;
     echo '  background-color: #fff;'.PHP_EOL;
     echo '  background-image: none;'.PHP_EOL;
     echo '  -webkit-background-clip: padding-box;'.PHP_EOL;
     echo '          background-clip: padding-box;'.PHP_EOL;
     echo '  border: 1px solid rgba(0, 0, 0, 0.15);'.PHP_EOL;
     echo '  border-radius: 0.25rem;'.PHP_EOL;
     echo '  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;'.PHP_EOL;
     echo '  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;'.PHP_EOL;
     echo '  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;'.PHP_EOL;
     echo '  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;'.PHP_EOL;
     echo '  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.atc-primary-nav__item {'.PHP_EOL;
     echo ' cursor:pointer;'.PHP_EOL;
     echo ' display:inline-block;'.PHP_EOL;
     echo ' margin-bottom:0;'.PHP_EOL;
     echo ' padding:0;'.PHP_EOL;
     echo ' position:relative'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.atc-primary-nav__item>a {'.PHP_EOL;
     echo ' text-decoration:none;'.PHP_EOL;
     echo ' font-size: 1.3em;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.form-control::-ms-expand {'.PHP_EOL;
     echo '  background-color: transparent;'.PHP_EOL;
     echo '  border: 0;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control:focus {'.PHP_EOL;
     echo '  color: #464a4c;'.PHP_EOL;
     echo '  background-color: #fff;'.PHP_EOL;
     echo '  border-color: #5cb3fd;'.PHP_EOL;
     echo '  outline: none;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control::-webkit-input-placeholder {'.PHP_EOL;
     echo '  color: #636c72;'.PHP_EOL;
     echo '  opacity: 1;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control::-moz-placeholder {'.PHP_EOL;
     echo '  color: #636c72;'.PHP_EOL;
     echo '  opacity: 1;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control:-ms-input-placeholder {'.PHP_EOL;
     echo '  color: #636c72;'.PHP_EOL;
     echo '  opacity: 1;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control::placeholder {'.PHP_EOL;
     echo '  color: #636c72;'.PHP_EOL;
     echo '  opacity: 1;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control:disabled, .form-control[readonly] {'.PHP_EOL;
     echo '  background-color: #eceeef;'.PHP_EOL;
     echo '  opacity: 1;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control:disabled {'.PHP_EOL;
     echo '  cursor: not-allowed;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo 'select.form-control:not([size]):not([multiple]) {'.PHP_EOL;
     echo '  height: calc(2.25rem + 2px);'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo 'select.form-control:focus::-ms-value {'.PHP_EOL;
     echo '  color: #464a4c;'.PHP_EOL;
     echo '  background-color: #fff;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-file,'.PHP_EOL;
     echo '.form-control-range {'.PHP_EOL;
     echo '  display: block;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.col-form-label {'.PHP_EOL;
     echo '  padding-top: calc(0.5rem - 1px * 2);'.PHP_EOL;
     echo '  padding-bottom: calc(0.5rem - 1px * 2);'.PHP_EOL;
     echo '  margin-bottom: 0;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.col-form-label-lg {'.PHP_EOL;
     echo '  padding-top: calc(0.75rem - 1px * 2);'.PHP_EOL;
     echo '  padding-bottom: calc(0.75rem - 1px * 2);'.PHP_EOL;
     echo '  font-size: 1.25rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.col-form-label-sm {'.PHP_EOL;
     echo '  padding-top: calc(0.25rem - 1px * 2);'.PHP_EOL;
     echo '  padding-bottom: calc(0.25rem - 1px * 2);'.PHP_EOL;
     echo '  font-size: 0.875rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.col-form-legend {'.PHP_EOL;
     echo '  padding-top: 0.5rem;'.PHP_EOL;
     echo '  padding-bottom: 0.5rem;'.PHP_EOL;
     echo '  margin-bottom: 0;'.PHP_EOL;
     echo '  font-size: 1rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-static {'.PHP_EOL;
     echo '  padding-top: 0.5rem;'.PHP_EOL;
     echo '  padding-bottom: 0.5rem;'.PHP_EOL;
     echo '  margin-bottom: 0;'.PHP_EOL;
     echo '  line-height: 1.25;'.PHP_EOL;
     echo '  border: solid transparent;'.PHP_EOL;
     echo '  border-width: 1px 0;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-static.form-control-sm, .input-group-sm > .form-control-static.form-control,'.PHP_EOL;
     echo '.input-group-sm > .form-control-static.input-group-addon,'.PHP_EOL;
     echo '.input-group-sm > .input-group-btn > .form-control-static.btn, .form-control-static.form-control-lg, .input-group-lg > .form-control-static.form-control,'.PHP_EOL;
     echo '.input-group-lg > .form-control-static.input-group-addon,'.PHP_EOL;
     echo '.input-group-lg > .input-group-btn > .form-control-static.btn {'.PHP_EOL;
     echo '  padding-right: 0;'.PHP_EOL;
     echo '  padding-left: 0;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-sm, .input-group-sm > .form-control,'.PHP_EOL;
     echo '.input-group-sm > .input-group-addon,'.PHP_EOL;
     echo '.input-group-sm > .input-group-btn > .btn {'.PHP_EOL;
     echo '  padding: 0.25rem 0.5rem;'.PHP_EOL;
     echo '  font-size: 0.875rem;'.PHP_EOL;
     echo '  border-radius: 0.2rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo 'select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),'.PHP_EOL;
     echo '.input-group-sm > select.input-group-addon:not([size]):not([multiple]),'.PHP_EOL;
     echo '.input-group-sm > .input-group-btn > select.btn:not([size]):not([multiple]) {'.PHP_EOL;
     echo '  height: 1.8125rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-lg, .input-group-lg > .form-control,'.PHP_EOL;
     echo '.input-group-lg > .input-group-addon,'.PHP_EOL;
     echo '.input-group-lg > .input-group-btn > .btn {'.PHP_EOL;
     echo '  padding: 0.75rem 1.5rem;'.PHP_EOL;
     echo '  font-size: 1.25rem;'.PHP_EOL;
     echo '  border-radius: 0.3rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo 'select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),'.PHP_EOL;
     echo '.input-group-lg > select.input-group-addon:not([size]):not([multiple]),'.PHP_EOL;
     echo '.input-group-lg > .input-group-btn > select.btn:not([size]):not([multiple]) {'.PHP_EOL;
     echo '  height: 3.166667rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-group {'.PHP_EOL;
     echo '  margin-bottom: 1rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-text {'.PHP_EOL;
     echo '  display: block;'.PHP_EOL;
     echo '  margin-top: 0.25rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check {'.PHP_EOL;
     echo '  position: relative;'.PHP_EOL;
     echo '  display: block;'.PHP_EOL;
     echo '  margin-bottom: 0.5rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check.disabled .form-check-label {'.PHP_EOL;
     echo '  color: #636c72;'.PHP_EOL;
     echo '  cursor: not-allowed;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-label {'.PHP_EOL;
     echo '  padding-left: 1.25rem;'.PHP_EOL;
     echo '  margin-bottom: 0;'.PHP_EOL;
     echo '  cursor: pointer;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-input {'.PHP_EOL;
     echo '  position: absolute;'.PHP_EOL;
     echo '  margin-top: 0.25rem;'.PHP_EOL;
     echo '  margin-left: -1.25rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-input:only-child {'.PHP_EOL;
     echo '  position: static;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-inline {'.PHP_EOL;
     echo '  display: inline-block;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-inline .form-check-label {'.PHP_EOL;
     echo '  vertical-align: middle;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-check-inline + .form-check-inline {'.PHP_EOL;
     echo '  margin-left: 0.75rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-feedback {'.PHP_EOL;
     echo '  margin-top: 0.25rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-control-success,'.PHP_EOL;
     echo '.form-control-warning,'.PHP_EOL;
     echo '.form-control-danger {'.PHP_EOL;
     echo '  padding-right: 2.25rem;'.PHP_EOL;
     echo '  background-repeat: no-repeat;'.PHP_EOL;
     echo '  background-position: center right 0.5625rem;'.PHP_EOL;
     echo '  -webkit-background-size: 1.125rem 1.125rem;'.PHP_EOL;
     echo '          background-size: 1.125rem 1.125rem;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-success .form-control-feedback,'.PHP_EOL;
     echo '.has-success .form-control-label,'.PHP_EOL;
     echo '.has-success .col-form-label,'.PHP_EOL;
     echo '.has-success .form-check-label,'.PHP_EOL;
     echo '.has-success .custom-control {'.PHP_EOL;
     echo '  color: #5cb85c;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-success .form-control {'.PHP_EOL;
     echo '  border-color: #5cb85c;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-success .input-group-addon {'.PHP_EOL;
     echo '  color: #5cb85c;'.PHP_EOL;
     echo '  border-color: #5cb85c;'.PHP_EOL;
     echo '  background-color: #eaf6ea;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-warning .form-control-feedback,'.PHP_EOL;
     echo '.has-warning .form-control-label,'.PHP_EOL;
     echo '.has-warning .col-form-label,'.PHP_EOL;
     echo '.has-warning .form-check-label,'.PHP_EOL;
     echo '.has-warning .custom-control {'.PHP_EOL;
     echo '  color: #f0ad4e;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-warning .form-control {'.PHP_EOL;
     echo '  border-color: #f0ad4e;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-warning .input-group-addon {'.PHP_EOL;
     echo '  color: #f0ad4e;'.PHP_EOL;
     echo '  border-color: #f0ad4e;'.PHP_EOL;
     echo '  background-color: white;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-danger .form-control-feedback,'.PHP_EOL;
     echo '.has-danger .form-control-label,'.PHP_EOL;
     echo '.has-danger .col-form-label,'.PHP_EOL;
     echo '.has-danger .form-check-label,'.PHP_EOL;
     echo '.has-danger .custom-control {'.PHP_EOL;
     echo '  color: #d9534f;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-danger .form-control {'.PHP_EOL;
     echo '  border-color: #d9534f;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.has-danger .input-group-addon {'.PHP_EOL;
     echo '  color: #d9534f;'.PHP_EOL;
     echo '  border-color: #d9534f;'.PHP_EOL;
     echo '  background-color: #fdf7f7;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-inline {'.PHP_EOL;
     echo '  display: -webkit-box;'.PHP_EOL;
     echo '  display: -webkit-flex;'.PHP_EOL;
     echo '  display: -ms-flexbox;'.PHP_EOL;
     echo '  display: flex;'.PHP_EOL;
     echo '  -webkit-flex-flow: row wrap;'.PHP_EOL;
     echo '      -ms-flex-flow: row wrap;'.PHP_EOL;
     echo '          flex-flow: row wrap;'.PHP_EOL;
     echo '  -webkit-box-align: center;'.PHP_EOL;
     echo '  -webkit-align-items: center;'.PHP_EOL;
     echo '      -ms-flex-align: center;'.PHP_EOL;
     echo '          align-items: center;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '.form-inline .form-check {'.PHP_EOL;
     echo '  width: 100%;'.PHP_EOL;
     echo '}'.PHP_EOL;

     echo '.btn-warning {'.PHP_EOL;
     echo '    background-color: red;'.PHP_EOL;
     echo '    border: 0 none;'.PHP_EOL;
     echo '    border-radius: 0;'.PHP_EOL;
     echo '    font-size: 14px;'.PHP_EOL;
     echo '    font-weight: bold;'.PHP_EOL;
     echo '    padding: 0.8rem 2rem;'.PHP_EOL;
     echo '    text-transform: none;'.PHP_EOL;
     echo '	color:#ffffff !important;'.PHP_EOL;
     echo '	border-color: #74a044 !important;'.PHP_EOL;
     echo '}'.PHP_EOL;

     echo '.btn {'.PHP_EOL;
     echo '    background-color: #111111;'.PHP_EOL;
     echo '    border: 0 none;'.PHP_EOL;
     echo '    border-radius: 0;'.PHP_EOL;
     echo '    font-size: 14px;'.PHP_EOL;
     echo '    font-weight: bold;'.PHP_EOL;
     echo '    padding: 0.8rem 2rem;'.PHP_EOL;
     echo '    text-transform: none;'.PHP_EOL;
     echo '	color:#ffffff !important;'.PHP_EOL;
     echo '	background-color: #74a044 !important;'.PHP_EOL;
     echo '	border-color: #74a044 !important;'.PHP_EOL;
     echo '}'.PHP_EOL;

     echo 'a {'.PHP_EOL;
     echo '    background-color: transparent;'.PHP_EOL;
     echo '    text-decoration: none;'.PHP_EOL;
     echo '    color: #fff;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo 'body{'.PHP_EOL;
     echo 'font-family: \'epi\';'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo 'h1{'.PHP_EOL;
     echo 'font-family: \'anton\';'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo 'h2{'.PHP_EOL;
     echo 'font-family: \'anton\';'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo 'h3{'.PHP_EOL;
     echo 'font-family: \'play\';'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.autocomplete {'.PHP_EOL;
     echo 'background: #fff; '.PHP_EOL;
     echo 'border: 2px solid #27866e; '.PHP_EOL;
     echo 'box-sizing: border-box; '.PHP_EOL;
     echo 'position: absolute; '.PHP_EOL;
     echo 'border-radius: 0 0 3px 3px; '.PHP_EOL;
     echo 'top: 10px !important; '.PHP_EOL;
     echo 'left: 0 !important; '.PHP_EOL;
     echo 'width: 100% !important; '.PHP_EOL;
     echo 'z-index: 3000; padding: 0; '.PHP_EOL;
     echo 'margin: 0; '.PHP_EOL;
     echo 'outline: 0; '.PHP_EOL;
     echo 'overflow: hidden;'.PHP_EOL;
     echo 'display: none;'.PHP_EOL;
     echo 'padding: 5px;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.footermenu li a {'.PHP_EOL;
     echo '  font-size: 13px;'.PHP_EOL;
     echo '  color: #FFFFFF;'.PHP_EOL;
     echo '  text-decoration: none;'.PHP_EOL;
     echo '  line-height: 1.2;'.PHP_EOL;
     echo '  position: relative;'.PHP_EOL;
     echo '  top:-10px;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '</style>'.PHP_EOL;
     echo '<style>'.PHP_EOL;
     echo '.review_text_container {'.PHP_EOL;
     echo ' box-shadow: 0 1px 2px #bac4c9;'.PHP_EOL;
     echo ' margin: 0 2px 2px 0;'.PHP_EOL;
     echo ' z-index: 1;'.PHP_EOL;
     echo ' position: relative;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '.review_text {'.PHP_EOL;
     echo ' padding: 20px;'.PHP_EOL;
     echo '}'.PHP_EOL;
     echo '</style>'.PHP_EOL;
     echo '<meta name="viewport" content="width=device-width, initial-scale=1">'.PHP_EOL;
     echo '<meta http-equiv="Content-Language" content="hu">'.PHP_EOL;
     echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">'.PHP_EOL;
     echo '<meta http-equiv="Pragma" content="no-cache">'.PHP_EOL;
     echo '<meta http-equiv="cache-control" content="no-cache, must-revalidate">'.PHP_EOL;
     echo '<meta name="keywords" content="használt könyvek, olcsó, könyvek olcsón, könyv magánszemélytől, antikvárium, ajándék">'.PHP_EOL;
     echo '<meta name="description" content="Használt könyvek piactere egész Magyarországon azoknak, akik olcsón szeretnének könyvet vásárolni magánszemélytől vagy hirdetést szeretnének feladni.">'.PHP_EOL;
     echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
     echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">'.PHP_EOL;
     echo '<link rel="apple-touch-icon" href="/logo_small.png"/>'.PHP_EOL;
     echo '<link rel="icon" href="/logo_small.png">'.PHP_EOL;
     echo '</head>'.PHP_EOL;
     echo '<body style="margin: 0; padding: 0; height: 100%;">'.PHP_EOL;
     echo '<div id="fb-root"></div>'.PHP_EOL;
     echo '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v8.0&appId=301829433804854&autoLogAppEvents=1" nonce="3N6fus67"></script>'.PHP_EOL;
     echo '<!-- head start --!>'.PHP_EOL;
     echo '<div style="background-color: #313c53; box-shadow: 0px 5px 5px rgba(0,0,0,0.1);">'.PHP_EOL;
     echo '<div style="padding-bottom: 0px; text-align: left; width: 1080px; position: relative; max-width: 1080px; margin: 0 auto; box-sizing: border-box;height: 100px">'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '<div style="display: inline-block; box-sizing: border-box; width: 15%; float: left; margin-top: 15px;">'.PHP_EOL;
     echo '<a href="/"><img src="/logo.png" alt="Használt könyvek piactere" title="" height="65px" width="133px" height="auto"></a>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '<div style="float: left;margin-top: 25px;">'.PHP_EOL;
     echo '<ul class="atc-primary-nav" role="menubar">'.PHP_EOL;
     echo '<li class="atc-primary-nav__item" style="margin-right: 50px;">'.PHP_EOL;
     echo '<a role="menuitem" class="tracking-navigation-link atc-primary-nav__top-level" href="/add-book-for-sale/">'.PHP_EOL;
     echo 'Eladom könyvem'.PHP_EOL;
     echo '</a>'.PHP_EOL;
     echo '</li>'.PHP_EOL;
     echo '<li class="atc-primary-nav__item" role="none">'.PHP_EOL;
     echo '<a role="menuitem" class="tracking-navigation-link atc-primary-nav__top-level" href="/blog">'.PHP_EOL;
     echo 'Blog'.PHP_EOL;
     echo '</a>'.PHP_EOL;
     echo '</li>'.PHP_EOL;
     echo '</ul>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo ''.PHP_EOL;
     echo ''.PHP_EOL;
     echo '<div style="border: 4px solid #D1D1D1; height: 46px; float: right; box-shadow: none; box-sizing: border-box; border-radius: 4px; background-color: #D1D1D1; width: 50%; margin-top: 28px;">'.PHP_EOL;
     echo '<div style="position: relative; padding-right: 70px;">'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '<form id="fm1" name="fm1" action="#" onsubmit="return goF1(\'fm1\')">'.PHP_EOL;
     echo '<input type="text" id="my-text-box" style="width: 110%; font-weight: 700; font-size: 1.8rem; height: 38px; padding: 6px 10px; background-color: #fff; border: 1px solid #C2C2C2; border-radius: 4px; box-shadow: none; box-sizing: border-box;" autocomplete="off" accesskey="e" maxlength="1000" value="" placeholder="Keresd meg könyvedet itt!">'.PHP_EOL;
     echo '<span class="reset_button"></span>'.PHP_EOL;
     echo '<input type="image" style="position: absolute; bottom: 1px; right: 3px; height: 36px; width: 90px; cursor: pointer;" id="submitMessage" value="" src="/search.png">'.PHP_EOL;
     echo '<div id="autocomplete" class="autocomplete" style="">'.PHP_EOL;
     echo 'search'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</form>'.PHP_EOL;
     echo '<form id="f1" name="f1" method="post" action="">'.PHP_EOL;
     echo '<input name="q" type="hidden" value="">'.PHP_EOL;
     echo '<input name="ie" type="hidden" value="UTF-8">'.PHP_EOL;
     echo '</form>'.PHP_EOL;
#     echo '<a data-toggle="modal" data-target="#exampleModal" href="#">Bejelentkezés</a>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '<!-- head end --!>'.PHP_EOL;
}

###############################################################
#############  INDEX ENDPOINT #################################
###############################################################
switch ($request) {
    case '/' :

     $auth  = explode("/",$request)[3];
     $logged_in = False;
     if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
      $logged_in = True;
     }
     $handler = new DatabaseHandler;
#     get_head(False,$logged_in,array(),$meta_content);

     $useragent=$_SERVER['HTTP_USER_AGENT'];

     $meta_content = ''.PHP_EOL;
     get_head(False,$logged_in,array(),$meta_content);

     echo '<div style="width: 1080px; padding: 0;position: relative; max-width: 1080px; margin: 0 auto; box-sizing: border-box;">'.PHP_EOL;

     echo ' <div style="margin-top: 2%; width: 20%; min-height: 550px; float: left">'.PHP_EOL;
     echo '</div>'.PHP_EOL;

     echo ' <div style="margin-top: 2%; min-height: 550px; width: 71%; float: left">'.PHP_EOL;
      
     $bfs_array = array_reverse($handler->conditional_select_from("books_for_sale",array("active_book" => 1)));

     echo '<div style="display: block; background: #ffffff; color: black; width: 100%; margin: 0 0 15px 0; padding: 10px 25px 0 25px;  box-shadow: none; box-sizing: border-box; font-size: 1.3rem; text-align: left;" >'.PHP_EOL;
     foreach( $bfs_array as $bfs ){
  
      $image = $handler->conditional_select_from("books_for_sale_images",array("book_unique_hash" => $bfs['book_unique_hash'] ))[0];

      echo ' <div style="float: left;  padding: 30px"> <a style="color: blue" href="http://www.betufront.hu/hasznalt-konyv/'.$bfs['titleForUrl'].'"><img width="300px" height="400px" src="/images/books/'.$bfs['id'].'/'.$image['book_image_name'].'"/></a></div>'.PHP_EOL;

      echo '<div style="border-bottom: 1px solid #004A1D;min-height: 470px;">'.PHP_EOL;
      echo '<h3>'.$bfs['book_author'].'</h3>'.PHP_EOL;
      echo '<h4>'.$bfs['book_title'].' <a style="color: blue" href="http://www.betufront.hu/hasznalt-konyv/'.$bfs['titleForUrl'].'">Megtekintem</a></h4>'.PHP_EOL;
      echo '<h5>'.$bfs['book_publisher'].' '.'['.$bfs['book_publish_date'].']</h5>'.PHP_EOL;
      echo '<div><p>'.$bfs['book_summary'].'</p></div>'.PHP_EOL;
      echo '<div><p>'.$bfs['book_price'].' Forint / <span style="font-size: 0.75em"> '.full_date($bfs['created']).'</span> </p></div>'.PHP_EOL;
      echo '</div>'.PHP_EOL;
     }
     echo '</div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;


     echo '</div>'.PHP_EOL;

 
     get_foot();

     echo '</body>'.PHP_EOL;
     echo '</html>'.PHP_EOL;
     break;
}

if(preg_match('/partners/', $request)){
$logged_in = False;
$meta_content = '';
$meta_content = $meta_content.' <meta name="viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<h3>A következő oldalakkal állunk partnerségben</h3>';
echo '<div>';
echo  "<ul style='line-height: 3em; list-style: none'>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='https://imulat.com/'>".PHP_EOL;
echo "imulat.com".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='http://bookingport.hu/'>".PHP_EOL;
echo "bookingport.hu".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='http://spanyoltanulas.com/'>".PHP_EOL;
echo "spanyoltanulas.com".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='http://sotetoldal.com/'>".PHP_EOL;
echo "sotetoldal.com".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='http://tobzoska.com/'>".PHP_EOL;
echo "tobzoska.com".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='https://vengriyanakarte.ru/'>".PHP_EOL;
echo "vengriyanakarte.ru".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "<li>".PHP_EOL;
echo  "<a style='color: blue' href='https://zaixiongyali.com/'>".PHP_EOL;
echo "zaixiongyali.com".PHP_EOL;
echo  "</a>".PHP_EOL;
echo  "</li>".PHP_EOL;

echo  "</ul>".PHP_EOL;
echo '</div>'.PHP_EOL;
get_foot();
}
if(preg_match('/social-media/', $request)){
$logged_in = False;
$meta_content = '';
$meta_content = $meta_content.' <meta name="viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);

echo '<h3>Közösségi média</h3>';
echo '<div style="margin-bottom: 15px; text-align: center">'.PHP_EOL;
     echo '<div style="width: 44%; margin-left: 80px; margin-top: 39px;" class="fb-page" data-href="https://www.facebook.com/Betufront-101826948360331" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Betufront-101826948360331" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Betufront-101826948360331">Betufront</a></blockquote></div>'.PHP_EOL;
echo '</div>'.PHP_EOL;

echo '<div>A legegyszerűbben online veheted fel a kapcsolatot velünk. Ha fel szeretnéd velünk venni a kapcsolatot használd a következő kapcsolattartási mezőket és küldj nekünk üzenetet.</div><br>';
echo '<div style="float: right" >2020. szeptember - <a style="color: blue" href="https://www.linkedin.com/in/bence-lad%C3%B3czki-569299124/">Az üzemeltető</a></div><br>';
echo '<h3>Kapcsolat</h3>';
echo '<div id="message_from_user">';
echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="email_address" placeholder="E-mail cím">';
echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="user_name" placeholder="Név">';
echo '<textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="user_message" placeholder="Üzenet"></textarea>';
echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="send_message()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>';
echo '</div>';
get_foot();
}
if(preg_match('/advertisement/', $request)){
$logged_in = False;
$meta_content = '';
$meta_content = $meta_content.' <meta name="viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
 echo '<h3>Hirdetések elhelyezése</h3>';
 echo '<div>Ha az oldalon hirdetést szeretne elhelyezni van rá lehetőség. Ilyen esetben lépjen kapcsolatba az oldal fejlesztőjével a következő mezők kitöltésével:</div><br>';
 echo '<h3>Kapcsolat</h3>';
 echo '<div id="message_from_user">';
 echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="email_address" placeholder="E-mail cím">';
 echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="user_name" placeholder="Név">';
 echo '<textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="user_message" placeholder="Üzenet"></textarea>';
 echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="send_message()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>';
 echo '</div>';
 get_foot();
}
if(preg_match('/remove-book-image/', $request)){

     $handler = new DatabaseHandler;
     $json = json_decode(file_get_contents("php://input"));
     $book_image_name  = $json->Data->book_image_name;
     $book_unique_hash  = $json->Data->book_unique_hash;

     $auth  = explode("/",$request)[4];

     $logged_in = False;

     if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
      $logged_in = True;
     }
     $bfs = $handler->conditional_select_from("books_for_sale",array("book_unique_hash" => $book_unique_hash))[0];

     $file_to_unlink = '/home/animefil/betufront/images/books/'.$bfs['id'].'/'.$book_image_name;
     unlink($file_to_unlink);

     $table_name = "books_for_sale";
     $field = "book_image_name";
     $value = $book_image_name;

     $bfs = $handler->delete_entry_from_table($table_name,$field,$value);
     header("HTTP/1.1 200 OK");

     echo "REMOVED";

}
if(preg_match('/hasznalt-konyv/', $request)){

     $titleForUrl  = explode("/",$request)[2];

     $auth  = explode("/",$request)[3];
     $logged_in = False;
     if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
      $logged_in = True;
     }
     $handler = new DatabaseHandler;
     $bfs = $handler->conditional_select_from("books_for_sale",array("titleForUrl" => $titleForUrl))[0];

     $updates = array("view_count" => $bfs['view_count'] + 1);
     $handler->update_in_table("books_for_sale",$updates,"book_unique_hash",$bfs['book_unique_hash']);

#     get_head(False,$logged_in,array(),$meta_content);

     $useragent=$_SERVER['HTTP_USER_AGENT'];

     $meta_content = ''.PHP_EOL;
     get_head(False,$logged_in,array(),$meta_content);

     echo '<div style="width: 1080px; padding: 0;position: relative; max-width: 1080px; margin: 0 auto; box-sizing: border-box;">'.PHP_EOL;
     echo '<!-- news start -->'.PHP_EOL;
     echo ' <div style="margin-top: 2%; width: 54%; float: left">'.PHP_EOL;
     echo '  <div style="display: block; background: #ffffff; color: black; width: 100%; margin: 0 0 15px 0; padding: 10px 25px 0 25px;  box-shadow: none; box-sizing: border-box; font-size: 1.3rem; text-align: left;"><p style="color: black; background-color: #286ABE; height: 0px; font-weight: 600; text-align: left;padding-left: 20px;"></p>'.PHP_EOL;

$images = $handler->conditional_select_from("books_for_sale_images",array("book_unique_hash" => $bfs['book_unique_hash'] ));

echo '<table>'.PHP_EOL;

foreach( $images as $image ){
echo '<tr>'.PHP_EOL;
echo ' <td>'.PHP_EOL;
echo ' <img width="150px" height="150px" src="/images/books/'.$bfs['id'].'/'.$image['book_image_name'].'"/>'.PHP_EOL;
echo ' </td>'.PHP_EOL;
echo ' <td>'.PHP_EOL;
echo ' </td>'.PHP_EOL;
echo '</tr>'.PHP_EOL;
}

echo '</table>'.PHP_EOL;



     echo '<span><a style="color: blue;text-decoration: underline " href="http://betufront.hu/edit-book-for-sale/'.$bfs['titleForUrl'].'/057a39a1cf79eb4625c16c51eadd3283">Szerkesztés</a></span>'.PHP_EOL;
     echo '   <div >'.PHP_EOL;
     echo '    <h2 style="margin: 0; border-bottom: 3px dashed #ff4436">Adatok</h2>'.PHP_EOL;
     echo '   <ul style="list-style: none; color: black;padding: 0; line-height: 2em;">'.PHP_EOL;
     echo '    <li> <span style="text-decoration: underline">Nyelv:</span> '.$bfs['book_language'].'</li>'.PHP_EOL;
     echo '    <li> <span style="text-decoration: underline">Állapot:</span> '.$bfs['book_condition'].'</li>'.PHP_EOL;
     echo '    <li> <span style="text-decoration: underline">Kiadó:</span> '.$bfs['book_publisher'].'</li>'.PHP_EOL;
     echo '    <li> <span style="text-decoration: underline">Oldalak száma:</span> '.$bfs['book_page_numbers'].'</li>'.PHP_EOL;
     echo '    <li> <span style="text-decoration: underline">Kiadás éve:</span> '.$bfs['book_publish_date'].'</li>'.PHP_EOL;
     if(count($bfs['book_isbn']) > 5){
      echo '    <li> <span style="text-decoration: underline">ISBN:</span> '.$bfs['book_isbn'].'</li>'.PHP_EOL;
     }
     echo '   </ul>'.PHP_EOL;
     echo '   </div>'.PHP_EOL;
     echo '   <div>'.PHP_EOL;
     echo '    <h2 style="margin: 0; border-bottom: 3px dashed #ff4436"> Összefoglaló</h2>'.PHP_EOL;
     echo '    <p>'.PHP_EOL;
     echo ''.$bfs['book_summary'].''.PHP_EOL;
     echo '    <p>'.PHP_EOL;
     echo '   </div>'.PHP_EOL;
     echo '   <div>'.PHP_EOL;
     echo '    <h2 style="margin: 0; border-bottom: 3px dashed #ff4436">Hirdetés szövege</h2>'.PHP_EOL;
     echo '    <p>'.PHP_EOL;
     echo '     '.$bfs['ad_text'].''.PHP_EOL;
     echo '    <p>'.PHP_EOL;
     echo '   </div>'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '  </div>'.PHP_EOL;
     echo ' </div>'.PHP_EOL;
     echo ' <div style="margin-top: 2%; width: 45%; float: left">'.PHP_EOL;
     echo '  <div style="display: block; background: #ffffff; color: black; width: 100%; margin: 0 0 15px 0; padding: 10px 25px 0 25px;  box-shadow: none; box-sizing: border-box; font-size: 1.3rem; text-align: left;">'.PHP_EOL;
     echo '   <h3>'.$bfs['book_title'].' - '.$bfs['book_author'].'</h3>'.PHP_EOL;
     echo '   <h4>Használt</h4>'.PHP_EOL;
     echo '   <ul style="list-style: none; padding: 0; line-height: 2em;">'.PHP_EOL;
     echo '    <li style="color: #da1919"> '.$bfs['book_price'].' Forint</li>'.PHP_EOL;
     echo '    <li> Átvehető: '.$bfs['delivery_place'].'</li>'.PHP_EOL;
     echo '    <li style="font-size: 0.75em"> Feltöltve: '.full_date($bfs['created']).'</li>'.PHP_EOL;
     echo '   </ul>'.PHP_EOL;
     echo '   <div style="background: #f7f7f5">'.PHP_EOL;
     echo '    <div style="text-align: center">'.PHP_EOL;
     echo '    <h4 style="margin-bottom: 5px;padding-top: 15px;">Hirdető</h4>'.PHP_EOL;
     echo '     <div style="text-align: center;">'.PHP_EOL;
     echo '     <img src="/no_image.png" alt="Felhasználó" title="" height="60px" width="90px" height="auto">'.PHP_EOL;
     echo '     </div>'.PHP_EOL;
     echo '    </div>'.PHP_EOL;
     echo '    <div>'.PHP_EOL;
     echo '     <img src="/phone" alt="Használt könyvek piactere" title="" height="20px" width="30px" height="auto">'.PHP_EOL;
     echo '     +36(30)831-69-72 '.PHP_EOL;
     echo '    </div>'.PHP_EOL;
     echo '    <div style="text-align: center;">'.PHP_EOL;
     echo '<a class="atc-button atc-button--primary  split-btn split-btn-tertiary" href="">Kapcsolat</a>'.PHP_EOL;
     echo '    </div>'.PHP_EOL;
     echo '   </div>'.PHP_EOL;
     echo '  </div>'.PHP_EOL;
     echo ' </div>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
     echo '<!-- news end -->'.PHP_EOL;
     echo '<div id="messages" style="white-space:pre;"></div>'.PHP_EOL;
     echo ''.PHP_EOL;
     echo '</div>'.PHP_EOL;
 
     get_foot();

     echo '</body>'.PHP_EOL;
     echo '</html>'.PHP_EOL;
}
if(preg_match('/cookie-policy/', $request)){

        $logged_in = False;
        $meta_content = ''.PHP_EOL;
        get_head(False,$logged_in,array(),$meta_content);

        echo '<section class="section wb">'.PHP_EOL;
        echo '<div class="container">'.PHP_EOL;
        echo '<div class="row">'.PHP_EOL;
        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
        echo '<div class="page-wrapper">'.PHP_EOL;
        echo '<div class="blog-list clearfix">'.PHP_EOL;

        echo '<p>'.PHP_EOL;
        echo '<h3>Süti tájékoztató a honlapon használt sütikről</h3>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'Honlapunk sütiket használ.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A honlapunkon sütiket használunk, hogy Önnek a lehető legjobb felhasználói élményt tudjuk nyújtani. Ezek a sütik vagy elengedhetetlenek a honlap használatához (funkcionális sütik), vagy csak az Ön hozzájárulásával települnek. Az alábbiakban tudja beállítani, hogy az általunk használt hozzájárulást igénylő sütik közül (statisztikai sütik, marketing sütik) melyek települjenek az Ön gépére.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A süti a webszerver által a honlap látogató végberendezésén (jellemzően számítógép vagy mobiltelefon) elhelyezett szöveges fájl, mely a felhasználóra, a weboldal működésére, vagy akár a felhasználó és a webszerver közötti kapcsolatra vonatkozó információt tárol.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A webszerver az oldal letöltésekor gyakran ezekből az információkból „dolgozik” és így javítja a felhasználói élményt, vagy nyújt szolgáltatásokat. Például, ha Ön meg szeretne vásárolni több dolgot, ahhoz, hogy Önnek ne kelljen egyenként fizetnie a termékekért, egy süti segít abban, hogy a kosár tartalma elérhető maradjon addig, ameddig Ön le nem kívánja zárni a vásárlást.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A legtöbb böngésző automatikusan fogadja a sütiket. Önnek a böngésző beállításainál van lehetősége a sütiket kezelni: tilthatja és törölheti őket. Ha szeretne a sütik beállításáról bővebben olvasni, az Ön által használt böngésző nevére kattintva többet is megtudhat:'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo '<a style="color: black; text-decoration: underline!important;" href="https://www.google.com/chrome/privacy/">Google Chorome</a>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo '<a style="color: black; text-decoration: underline!important;" href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop">Firefox</a>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A honlapunkon két típusú sütit használunk: az egyik a funkcionális sütik, amelyek szükségesek vagy a honlapon zajló kommunikációhoz, vagy ahhoz a művelethez, amelyet Ön, mint felhasználó igényelt. A másik típus a hozzájárulás igénylő sütik kategóriája. Ahhoz, hogy ezek az Ön eszközére települjenek, szükséges, hogy Ön beleegyezzen a használatukba. Az oldal böngészésével automatikus módon engedélyezi ezen sütik használatát is. Amennyiben ebbe nem egyezik bele, az oldalt nem látogathatja. Az általunk használt sütiket a következőkben mutatjuk be.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo '<h4>1. Funkcionális</h4>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'Használatot elősegítő. ún. funkcionális süti, ezek nélkül nem tud jól működni a honlap – Ez a süti nem igényli az Ön hozzájárulásának a beszerzését. Ezeket a sütiket jogos érdekünk alapján kezeljük.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A funkcionális sütikkel kezelünk olyan személyes adatot, amivel Ön nem közvetlenül azonosítható (IP cím), és olyan személyes adatot is, amellyel Ön közvetlenül azonosítható (így például amikor sütiben tárolódnak egy-egy űrlap kitöltése során az adatok, az űrlapon bevitt adatok lehetnek Önt közvetlenül azonosító adatok is, amilyen adat például az Ön neve). Ez utóbbi adatgyűjtés a felhasználói élmény javítására, így például a zökkenőmentes, gyors vásárlás biztosítására, szolgál.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo '<h4>2. Statisztikai célokat biztosító süti</h4>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A statisztikai sütiket a honlapunkon a Google Analytics programhoz kapcsolódik, ennek a programnak a beágyazott sütijeit használjuk. A sütik harmadik féltől, a Google-től származnak. A Google Analytics a Google elemző eszköze, amely abban segít nekünk, hogy pontosabb képet kapjunk látogatóink tevékenységeiről, és ennek megfelelően alakítsuk át holnapunk tartalmát. Önnek lehetősége van arra, hogy a Google Analytics szolgáltatását a használat engedélyezését követően kikapcsolja azokra az esetekre, amikor meglátogat egy weboldalt. További információt erről <a style="color: black; text-decoration: underline!important;" href="https://tools.google.com/dlpage/gaoptout?hl=en"">itt</a> érhet el.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A statisztikai sütik alkalmazása során igénybe vesszük a Google azon szolgáltatását, amely biztosítja, hogy személyes adatok kezelése ne történjen. Emiatt a statisztikai sütiken keresztül személyes adatot nem kezelünk.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo '<h4>3. Marketing célokat segítő süti</h4>'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A marketing sütik harmadik féltől, a Google-től és a Facebooktól származnak.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A Google-től származó sütik a következő személyes adatokat kezelik:: online azonosítók, ideértve a süti azonosítókat és eszköz azonosítókat, ahogyan az a Google tájékoztatásában is szerepel.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        echo '<p>'.PHP_EOL;
        echo 'A Facebook sütik ezeket a személyes adatokat kezelik: altartományindex, időbélyeg, véletlenszerű szám, felhasználó- és böngészőazonosító, egyéb adatok. Ezeket az adatokat a Facebook süti tájékoztatóban is tudja ellenőrizni.'.PHP_EOL;
        echo '</p>'.PHP_EOL;
        echo '<br>'.PHP_EOL;


        echo '</div><!-- end blog-list -->'.PHP_EOL;
        echo '</div><!-- end page-wrapper -->'.PHP_EOL;
        echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
        echo '</div><!-- end row -->'.PHP_EOL;
        echo '</div><!-- end container -->'.PHP_EOL;
        echo '</section>'.PHP_EOL;
        get_foot();
}
if(preg_match('/handle_online_test_image_upload/', $request)){
$id = $_POST['post_id'];
$file_name = serialize($_POST);
$fileTmpPath = $_FILES['advert_image_form']['tmp_name'][0];
$fileName = $_FILES['advert_image_form']['name'][0];
$fileSize = $_FILES['advert_image_form']['size'][0];
$fileType = $_FILES['advert_image_form']['type'][0];
$uploadFileDir = '/home/qqwwaass/'.$GLOBALS['project_name'].'/test_images/'.$id.'/';
if(!file_exists($uploadFileDir)){
mkdir($uploadFileDir);
}
$newFileName = "1.jpg";
$dest_path = $uploadFileDir . $newFileName;
move_uploaded_file($fileTmpPath, $dest_path);

echo 'OK';
}

if(preg_match('/handle_profile_image_upload/', $request)){
$id = $_POST['post_id'];
$file_name = serialize($_POST);
$fileTmpPath = $_FILES['profile_image_form']['tmp_name'][0];
$fileName = $_FILES['profile_image_form']['name'][0];
$fileSize = $_FILES['profile_image_form']['size'][0];
$fileType = $_FILES['profile_image_form']['type'][0];
$uploadFileDir = '/home/qqwwaass/'.$GLOBALS['project_name'].'/images/user_profiles/';
if(!file_exists($uploadFileDir)){
mkdir($uploadFileDir);
}
$uploadFileDir = '/home/qqwwaass/'.$GLOBALS['project_name'].'/images/user_profiles/'.$id.'/';
if(!file_exists($uploadFileDir)){
mkdir($uploadFileDir);
}
$newFileName = "1.jpg";
$dest_path = $uploadFileDir . $newFileName;
move_uploaded_file($fileTmpPath, $dest_path);

echo 'OK';
}
if(preg_match('/handle_image_upload/', $request)){
$id = $_POST['post_id'];
$book_unique_hash = $_POST['book_unique_hash'];

$file_name = serialize($_POST);
$fileTmpPath = $_FILES['advert_image_form']['tmp_name'][0];
$fileName = $_FILES['advert_image_form']['name'][0];
$fileSize = $_FILES['advert_image_form']['size'][0];
$fileType = $_FILES['advert_image_form']['type'][0];

$uploadFileDir = '/home/animefil/betufront/images/books/'.$id.'/';

if(!file_exists($uploadFileDir)){
mkdir($uploadFileDir);
}
$random_title = md5(microtime());
$newFileName = $random_title.".jpg";

$dest_path = $uploadFileDir . $newFileName;

move_uploaded_file($fileTmpPath, $dest_path);

$handler = new DatabaseHandler;

$results_content = array("book_unique_hash" => $book_unique_hash, "book_image_name" => $newFileName);
$results_array   = array("book_unique_hash" , "book_image_name" );

$handler->insert_into_table("books_for_sale_images",$results_array ,$results_content);

echo $id."/".$newFileName;
}

if(preg_match('/handle_additional_image_upload/', $request)){

$id = $_POST['post_id'];
$image_id = $_POST['image_id'];
$image_type = $_POST['image_type'];

$file_name = serialize($_POST);

$fileTmpPath = $_FILES['additional_advert_image_form']['tmp_name'][0];

$fileName = $_FILES['additional_advert_image_form']['name'][0];
$fileSize = $_FILES['additional_advert_image_form']['size'][0];
$fileType = $_FILES['additional_advert_image_form']['type'][0];

$uploadFileDir = '/home/animefil/betufront/images/books/'.$id.'/';
if(!file_exists($uploadFileDir)){
mkdir($uploadFileDir);
}

$newFileName = "additional_image_".$image_id.".".$image_type;

$dest_path = $uploadFileDir . $newFileName;
move_uploaded_file($fileTmpPath, $dest_path);

echo 'OK';
}
############### Online Test endpoints ##################
if(preg_match('/evaluate-test\//', $request)){

$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$online_test_id = $json->Data->online_test_id;
$tests = $handler->conditional_select_from("online_tests",array("id" => $online_test_id ))[0];

$results = "<h3> Eredményeid: </h3><br>";

$target_word_1_a = $json->Data->target_word_1_a;
$target_word_1_b = $json->Data->target_word_1_b;
$target_word_1_c = $json->Data->target_word_1_c;
$target_word_10_a = $json->Data->target_word_10_a;
$target_word_10_b = $json->Data->target_word_10_b;
$target_word_10_c = $json->Data->target_word_10_c;
$target_word_2_a = $json->Data->target_word_2_a;
$target_word_2_b = $json->Data->target_word_2_b;
$target_word_2_c = $json->Data->target_word_2_c;
$target_word_3_a = $json->Data->target_word_3_a;
$target_word_3_b = $json->Data->target_word_3_b;
$target_word_3_c = $json->Data->target_word_3_c;
$target_word_4_a = $json->Data->target_word_4_a;
$target_word_4_b = $json->Data->target_word_4_b;
$target_word_4_c = $json->Data->target_word_4_c;
$target_word_5_a = $json->Data->target_word_5_a;
$target_word_5_b = $json->Data->target_word_5_b;
$target_word_5_c = $json->Data->target_word_5_c;
$target_word_6_a = $json->Data->target_word_6_a;
$target_word_6_b = $json->Data->target_word_6_b;
$target_word_6_c = $json->Data->target_word_6_c;
$target_word_7_a = $json->Data->target_word_7_a;
$target_word_7_b = $json->Data->target_word_7_b;
$target_word_7_c = $json->Data->target_word_7_c;
$target_word_8_a = $json->Data->target_word_8_a;
$target_word_8_b = $json->Data->target_word_8_b;
$target_word_8_c = $json->Data->target_word_8_c;
$target_word_9_a = $json->Data->target_word_9_a;
$target_word_9_b = $json->Data->target_word_9_b;
$target_word_9_c = $json->Data->target_word_9_c;

$cummulative_points = 0;

if($tests['solution_1'] == 1 && $target_word_1_a){
 $results = $results . "<br> <div style='color: green'>1. ".$tests['target_word_1']." == ".$tests['target_word_1_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_1'] == 2 && $target_word_1_b){
 $results = $results . "<br> <div style='color: green'>1. ".$tests['target_word_1']." == ".$tests['target_word_1_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_1'] == 3 && $target_word_1_c){
 $results = $results . "<br> <div style='color: green'>1. ".$tests['target_word_1']." == ".$tests['target_word_1_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>1. ".$tests['target_word_1']." --> Helytelen</div>";
}

if($tests['solution_2'] == 1 && $target_word_2_a){
 $results = $results . "<br> <div style='color: green'>2. ".$tests['target_word_2']." == ".$tests['target_word_2_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_2'] == 2 && $target_word_2_b){
 $results = $results . "<br> <div style='color: green'>2. ".$tests['target_word_2']." == ".$tests['target_word_2_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_2'] == 3 && $target_word_2_c){
 $results = $results . "<br> <div style='color: green'>2. ".$tests['target_word_2']." == ".$tests['target_word_2_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>2. ".$tests['target_word_2']." --> Helytelen</div>";
}

if($tests['solution_3'] == 1 && $target_word_3_a){
 $results = $results . "<br> <div style='color: green'>3. ".$tests['target_word_3']." == ".$tests['target_word_3_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_3'] == 2 && $target_word_3_b){
 $results = $results . "<br> <div style='color: green'>3. ".$tests['target_word_3']." == ".$tests['target_word_3_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_3'] == 3 && $target_word_3_c){
 $results = $results . "<br> <div style='color: green'>3. ".$tests['target_word_3']." == ".$tests['target_word_3_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>3. ".$tests['target_word_3']." --> Helytelen</div>";
}

if($tests['solution_4'] == 1 && $target_word_4_a){
 $results = $results . "<br> <div style='color: green'>4. ".$tests['target_word_4']." == ".$tests['target_word_4_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_4'] == 2 && $target_word_4_b){
 $results = $results . "<br> <div style='color: green'>4. ".$tests['target_word_4']." == ".$tests['target_word_4_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_4'] == 3 && $target_word_4_c){
 $results = $results . "<br> <div style='color: green'>4. ".$tests['target_word_4']." == ".$tests['target_word_4_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>4. ".$tests['target_word_4']." --> Helytelen</div>";
}

if($tests['solution_5'] == 1 && $target_word_5_a){
 $results = $results . "<br> <div style='color: green'>5. ".$tests['target_word_5']." == ".$tests['target_word_5_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_5'] == 2 && $target_word_5_b){
 $results = $results . "<br> <div style='color: green'>5. ".$tests['target_word_5']." == ".$tests['target_word_5_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_5'] == 3 && $target_word_5_c){
 $results = $results . "<br> <div style='color: green'>5. ".$tests['target_word_5']." == ".$tests['target_word_5_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>5. ".$tests['target_word_5']." --> Helytelen</div>";
}

if($tests['solution_6'] == 1 && $target_word_6_a){
 $results = $results . "<br> <div style='color: green'>6. ".$tests['target_word_6']." == ".$tests['target_word_6_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_6'] == 2 && $target_word_6_b){
 $results = $results . "<br> <div style='color: green'>6. ".$tests['target_word_6']." == ".$tests['target_word_6_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_6'] == 3 && $target_word_6_c){
 $results = $results . "<br> <div style='color: green'>6. ".$tests['target_word_6']." == ".$tests['target_word_6_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>6. ".$tests['target_word_6']." --> Helytelen</div>";
}

if($tests['solution_7'] == 1 && $target_word_7_a){
 $results = $results . "<br> <div style='color: green'>7. ".$tests['target_word_7']." == ".$tests['target_word_7_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_7'] == 2 && $target_word_7_b){
 $results = $results . "<br> <div style='color: green'>7. ".$tests['target_word_7']." == ".$tests['target_word_7_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_7'] == 3 && $target_word_7_c){
 $results = $results . "<br> <div style='color: green'>7. ".$tests['target_word_7']." == ".$tests['target_word_7_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>7. ".$tests['target_word_7']." --> Helytelen</div>";
}

if($tests['solution_8'] == 1 && $target_word_8_a){
 $results = $results . "<br> <div style='color: green'>8. ".$tests['target_word_8']." == ".$tests['target_word_8_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_8'] == 2 && $target_word_8_b){
 $results = $results . "<br> <div style='color: green'>8. ".$tests['target_word_8']." == ".$tests['target_word_8_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_8'] == 3 && $target_word_8_c){
 $results = $results . "<br> <div style='color: green'>8. ".$tests['target_word_8']." == ".$tests['target_word_8_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>8. ".$tests['target_word_8']." --> Helytelen</div>";
}

if($tests['solution_9'] == 1 && $target_word_9_a){
 $results = $results . "<br> <div style='color: green'>9. ".$tests['target_word_9']." == ".$tests['target_word_9_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_9'] == 2 && $target_word_9_b){
 $results = $results . "<br> <div style='color: green'>9. ".$tests['target_word_9']." == ".$tests['target_word_9_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_9'] == 3 && $target_word_9_c){
 $results = $results . "<br> <div style='color: green'>9. ".$tests['target_word_9']." == ".$tests['target_word_9_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>9. ".$tests['target_word_9']." --> Helytelen</div>";
}

if($tests['solution_10'] == 1 && $target_word_10_a){
 $results = $results . "<br> <div style='color: green'>10. ".$tests['target_word_10']." == ".$tests['target_word_10_a']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_10'] == 2 && $target_word_10_b){
 $results = $results . "<br> <div style='color: green'>10. ".$tests['target_word_10']." == ".$tests['target_word_10_b']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else if($tests['solution_10'] == 3 && $target_word_10_c){
 $results = $results . "<br> <div style='color: green'>10. ".$tests['target_word_10']." == ".$tests['target_word_10_c']." ==> Helyes </div>";
 $cummulative_points = $cummulative_points + 1;
}
else{
 $results = $results . "<br> <div style='color: red'>10. ".$tests['target_word_10']." --> Helytelen</div>";
}


$results = $results. '<br><div style="font-weight: bold">Pontjaid: '.$cummulative_points.'</div>'.PHP_EOL;
if($_COOKIE['LOGGED_IN']){


$user = $handler->conditional_select_from("website_user",array("email" => $_COOKIE['login_email'] ))[0];

send_service_mail($user['registered_name']." megcsinált egy tesztet.");

$user_id = $user['id'];
$test_result =  $cummulative_points;

$results_content = array("user_id" => $user_id, "online_test_id" => $online_test_id, "test_result" => $test_result);
$results_array   = array("user_id" , "online_test_id" , "test_result" );
$handler = new DatabaseHandler;
$handler->insert_into_table("online_test_results",$results_array ,$results_content);
 
}


$results = $results. '<button style="float: right" type="submit" class="btn btn-primary" onclick="location.reload();" >Vissza a teszthez</button>'.PHP_EOL;

echo $results;
return $results;
}

############ Password Reset ENDPOINT ##############
if(preg_match('/password-reset/', $request)){
$password_reset_hash = explode("/",$request)[2];

$updates = array("enabled" => 1);
$handler->update_in_table("website_user",$updates,"confirmation_hash",$confirmation_hash);
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div id="password_reset_div" class="blog-list clearfix">'.PHP_EOL;
echo '<p>Jelszó visszaállítási felület</p>'.PHP_EOL;

echo '<input id="new_password_box" style="width: 100%;" type="password"></input>';
echo '<textarea id="reset_hash" style="display: none;" >'.$password_reset_hash.'</textarea>';
echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="reset_password_from_site()">Átállítom <i class="fa fa-envelope-open-o"></i></button>';

echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function reset_password_from_site(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "reset_hash":   document.getElementById("reset_hash").value, '.PHP_EOL;
echo '        "new_password": document.getElementById("new_password_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/reset-password-action/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '         document.getElementById("password_reset_div").innerHTML = "<h2 style=\'color: green\' >A jelszó frissült!</h2>"; '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;
get_foot();
}
##################################################
############### Reset Password ENDPOINT #########
##################################################
if(preg_match('/reset-password-action/', $request)){
 $json = json_decode(file_get_contents("php://input"));
 
 $reset_hash = $json->Data->reset_hash;
 $new_password = $json->Data->new_password;

 $updates = array("password" => md5($new_password));
 $handler->update_in_table("website_user",$updates,"password_reset_hash",$reset_hash);
 echo "OK"; 
} 
#####################################################
############ Confirm Registration ENDPOINT ##############
if(preg_match('/confirm-registration/', $request)){
$confirmation_hash = explode("/",$request)[2];
$updates = array("enabled" => 1);
$handler->update_in_table("website_user",$updates,"confirmation_hash",$confirmation_hash);
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;
echo '<p>A regisztrációd sikeres. Innentől kezdve a fenti bejelentkezés gombra kattintva használhatod az oldal tanulós felületét.</p>'.PHP_EOL;
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}
#####################################################
############ Registered ENDPOINT ##############
if(preg_match('/registered/', $request)){
$confirmation_hash = explode("/",$request)[2];
$updates = array("enabled" => 1);
$handler->update_in_table("website_user",$updates,"confirmation_hash",$confirmation_hash);
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;
echo '<p>A regisztrációd sikeres. Kérlek ellenőrizd email fiókodat, a spameket beleértve és erősítsd meg regisztrációdat!</p>'.PHP_EOL;
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}
#####################################################
############ Logout ENDPOINT ##############
if(preg_match('/logout/', $request)){
setcookie("login_email","",time()+3600,"/");
setcookie("LOGGED_IN", False, time()+3600,"/");
header("location: /");
return;
}
#####################################################
############ Sentences ENDPOINT ##############
if(preg_match('/spanyol-mondatok-magyar-forditassal/', $request)){
 $block_start  = explode("/",$request)[2];
 $auth  = explode("/",$request)[3];
 $logged_in = False;
 if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
  $logged_in = True;
 }
 $meta_content = ''.PHP_EOL;
 get_head(False,$logged_in,array(),$meta_content);
 
 echo '<section class="section wb">'.PHP_EOL;
 echo '<div class="container">'.PHP_EOL;
 echo '<div class="row">'.PHP_EOL;
 echo '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">'.PHP_EOL;
 echo '<div class="page-wrapper">'.PHP_EOL;
 echo '<div class="blog-list clearfix">'.PHP_EOL;

 echo '<h4>Spanyol mondatok magyar fordítással</h4>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 echo '<p>'.PHP_EOL;
 echo 'Spanyol mondatokat keresel magyar fordítással? Megtaláltad! Itt felsorolok neked egy néhány száz mondatot. Ezekkel elkezdheted tanulni a spanyol nyelvet és meghallgathatod a kiejtésüket is. Jó tanulást!'.PHP_EOL;
 echo '</p>'.PHP_EOL;
 $listening_entry = $handler->conditional_select_from("listening_entry",array());
 $count = 1;
 foreach($listening_entry as $le){
  if($count < $block_start + 20 && $count > $block_start){
   echo '<p>'.PHP_EOL;
   echo $le['solution'].PHP_EOL;
   echo '</p>'.PHP_EOL;

   echo '<p>'.PHP_EOL;
   echo '<audio controls>'.PHP_EOL;
   $audio_src = '/audio_files/listening/spanish'.$le['id'].'.mp3';
   echo '  <source src="'.$audio_src.'" type="audio/mpeg">'.PHP_EOL;
   echo '</audio>'.PHP_EOL;
   echo '</p>'.PHP_EOL;
  }
   $count = $count + 1;
 }
 echo '<br>'.PHP_EOL;
 $next_batch = $block_start + 20;
 $prev_batch = $block_start - 20;
 if($prev_batch > 0){
  echo '<a href="/spanyol-mondatok-magyar-forditassal/'.$prev_batch.'"><button type="submit" style="float: left" class="btn btn-primary" >Előző adag</button></a>'.PHP_EOL;
 }
 if($next_batch  < count($listening_entry)){
  echo '<a href="/spanyol-mondatok-magyar-forditassal/'.$next_batch.'"><button type="submit" style="float: right" class="btn btn-primary" >Következő adag</button></a>'.PHP_EOL;
 }
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;

       
 get_bottom_part();


 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '</div><!-- end page-wrapper -->'.PHP_EOL;
 echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
 get_sidebar();
 echo '</div><!-- end row -->'.PHP_EOL;
 echo '</div><!-- end container -->'.PHP_EOL;
 echo '</section>'.PHP_EOL;
 get_foot();
}
#####################################################
############ Listening Entry EDIT ENDPOINT ##############
if(preg_match('/listening-entry-edit/', $request)){

        $auth  = explode("/",$request)[3];

        $logged_in = False;
        if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
         $logged_in = True;
        }
        if(!$logged_in){
         die("Unauthorized!");
        }

$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);

echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

$listening_entry_id  = explode("/",$request)[2];

 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id ))[0];

 $next_listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id + 1 ))[0];
 $previous_listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id - 1 ))[0];

 $view_count = $listening_entry['view_count'];
 echo '<audio controls>'.PHP_EOL;
 $audio_src = '/audio_files/listening/spanish'.$listening_entry['id'].'.mp3';
 echo '  <source src="'.$audio_src.'" type="audio/mpeg">'.PHP_EOL;
 echo '</audio>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 echo '<input  type="hidden" id="post_id" value="'.$listening_entry['id'].'"/>'.PHP_EOL;
 echo '<br>'.PHP_EOL;

 echo '<input onchange="set_solution();" id="solution" type="text" value="'.$listening_entry['solution'].'">'.PHP_EOL;

 echo '<div id="result_div"></div>'.PHP_EOL;

 echo '<a href="/listening-entry-edit/'.$previous_listening_entry['id'].'/057a39a1cf79eb4625c16c51eadd3283"><button type="submit" class="btn btn-primary" >Előző</button></a>'.PHP_EOL;
 echo '<a style="float: right" href="/listening-entry-edit/'.$next_listening_entry['id'].'/057a39a1cf79eb4625c16c51eadd3283"><button type="submit" class="btn btn-primary" >Következő</button></a>'.PHP_EOL;
 echo '<br>'.PHP_EOL;

       
 get_bottom_part();


 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '</div><!-- end page-wrapper -->'.PHP_EOL;
 echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
 get_sidebar();
 echo '</div><!-- end row -->'.PHP_EOL;
 echo '</div><!-- end container -->'.PHP_EOL;
 echo '</section>'.PHP_EOL;
 get_foot();

$json_data = "";
$json_data = $json_data. 'var jsondata = { '.PHP_EOL;
$json_data = $json_data. '        "solution":   document.getElementById("solution").value, '.PHP_EOL;
$json_data = $json_data. '        "element_id":   document.getElementById("post_id").value '.PHP_EOL;
$json_data = $json_data. '    };   '.PHP_EOL;
$server_endpoint =  "/set-listening-entry-solution/";
$success_function = 'document.getElementById("result_div").innerHTML =   "<h2 style=\'color: green\' >Siker!</h2>"; '.PHP_EOL;
$error_function =   'document.getElementById("result_div").innerHTML =   "<h2 style=\'color: red\'   >Baj!  </h2>"; '.PHP_EOL;

get_ajax_script("set_solution",$json_data, $server_endpoint, $success_function, $error_function);
}
#####################################################
############ Listening Entry ENDPOINT ##############
if(preg_match('/listening-entry/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);

echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

$listening_entry_id  = explode("/",$request)[2];

 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id ))[0];

 $listening_entries = $handler->conditional_select_from("listening_entry",array());
 shuffle($listening_entries);
 $listening_entry_1 = $listening_entry;

 $listening_entry_2 = $listening_entries[0];
 $listening_entry_3 = $listening_entries[1];

 while($listening_entry_1['id'] == $listening_entry_2['id']){
 shuffle($listening_entries);
 $listening_entry_2 = $listening_entries[0];
 }
 while($listening_entry_1['id'] == $listening_entry_3['id']){
 shuffle($listening_entries);
 $listening_entry_3 = $listening_entries[1];
 }
 while($listening_entry_2['id'] == $listening_entry_3['id']){
 shuffle($listening_entries);
 $listening_entry_3 = $listening_entries[1];
 $listening_entry_2 = $listening_entries[0];
 }


 $random_number = rand(1,3);

 $next_listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id + 1 ))[0];
 $previous_listening_entry = $handler->conditional_select_from("listening_entry",array("id" => $listening_entry_id - 1 ))[0];

 $view_count = $listening_entry['view_count'];
 $updates = array("view_count" => $view_count + 1);
 $handler->update_in_table("listening_entry",$updates,"id",$listening_entry_id);

 echo '<h5>Kattints a lejátszás gombra, majd válaszd ki a magyar jelentést!</h5>'.PHP_EOL;
 echo '<table id="user_data_table">'.PHP_EOL;

 echo '<tr>'.PHP_EOL;
 echo '<td>'.PHP_EOL;
 echo '<audio controls>'.PHP_EOL;
 $audio_src = '/audio_files/listening/spanish'.$listening_entry['id'].'.mp3';
 echo '  <source src="'.$audio_src.'" type="audio/mpeg">'.PHP_EOL;
 echo '</audio>'.PHP_EOL;
 echo '</td>'.PHP_EOL;
 echo '</tr>'.PHP_EOL;

 if($random_number == 1){
  echo '<tr><td><input type="radio" onclick="checkbox_first_handler();" style="margin-right: 10px;" id="checkbox_first"/> 1. '.$listening_entry_1['solution'].' </td> <td><input type="radio" onclick="checkbox_second_handler();" style="margin-right: 10px;" id="checkbox_second"/> 2. '.$listening_entry_2['solution'].'</td><td><input type="radio" onclick="checkbox_third_handler();" style="margin-right: 10px;" id="checkbox_third"/> 3. '.$listening_entry_3['solution'].'</td></tr>'.PHP_EOL;
 echo '<script>'.PHP_EOL;
    echo 'function checkbox_first_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: green\' >Helyes!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_second_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_third_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
 echo '</script>'.PHP_EOL;
 }
 if($random_number == 2){
  echo '<tr><td><input type="radio" onclick="checkbox_first_handler();" style="margin-right: 10px;" id="checkbox_first"/> 1. '.$listening_entry_2['solution'].' </td> <td><input type="radio" onclick="checkbox_second_handler();" style="margin-right: 10px;" id="checkbox_second"/>2. '.$listening_entry_1['solution'].'</td><td><input type="radio" onclick="checkbox_third_handler();" style="margin-right: 10px;" id="checkbox_third"/> 3. '.$listening_entry_3['solution'].'</td></tr>'.PHP_EOL;
 echo '<script>'.PHP_EOL;
    echo 'function checkbox_first_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_second_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: green\' >Helyes!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_third_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
 echo '</script>'.PHP_EOL;
 }
 if($random_number == 3){
  echo '<tr><td><input type="radio" onclick="checkbox_first_handler();" style="margin-right: 10px;" id="checkbox_first"/> 1. '.$listening_entry_2['solution'].' </td> <td> <input type="radio" onclick="checkbox_second_handler();" style="margin-right: 10px;" id="checkbox_second"/> 2. '.$listening_entry_3['solution'].'</td><td><input type="radio" onclick="checkbox_third_handler();" style="margin-right: 10px;" id="checkbox_third"/> 3. '.$listening_entry_1['solution'].'</td></tr>'.PHP_EOL;
 echo '<script>'.PHP_EOL;
    echo 'function checkbox_first_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_second_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: red\' >Helytelen!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_third").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
    echo 'function checkbox_third_handler(){'.PHP_EOL;
    echo 'document.getElementById("checkbox_first").checked = false;'.PHP_EOL;
    echo 'document.getElementById("results").innerHTML = "<h2 style=\'color: green\' >Helyes!</h2>"; '.PHP_EOL;
    echo 'document.getElementById("checkbox_second").checked = false;'.PHP_EOL;
    echo ' };'.PHP_EOL;
 echo '</script>'.PHP_EOL;
 }


 echo '<tr id="results" ></tr>'.PHP_EOL;

 echo '</table>'.PHP_EOL;
 echo '<a href="/listening-entry/'.$previous_listening_entry['id'].'"><button type="submit" class="btn btn-primary" >Előző</button></a>'.PHP_EOL;
 echo '<a style="float: right" href="/listening-entry/'.$next_listening_entry['id'].'"><button type="submit" class="btn btn-primary" >Következő</button></a>'.PHP_EOL;
 echo '<br>'.PHP_EOL;

       
 get_bottom_part();


 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '</div><!-- end page-wrapper -->'.PHP_EOL;
 echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
 get_sidebar();
 echo '</div><!-- end row -->'.PHP_EOL;
 echo '</div><!-- end container -->'.PHP_EOL;
 echo '</section>'.PHP_EOL;
 get_foot();


}
#####################################################
############ Website User ENDPOINT ##############
if(preg_match('/website-user/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);

echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

$username  = explode("/",$request)[2];

 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $user = $handler->conditional_select_from("website_user",array("username" => $username ))[0];

 echo '<table id="user_data_table">'.PHP_EOL;
 echo '<tr><td>Felhasználónév:</td> <td>'.$user['username'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Kor:</td> <td>'.$user['registered_age'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Nem:</td> <td>'.$user['registered_sex'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Ország:</td> <td>'.$user['registered_country'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Bemutatkozás:</td><td>'.$user['self_introduction'].'</td></tr>'.PHP_EOL;

 $user_profile_image = '/home/qqwwaass/'.$GLOBALS['project_name'].'/images/user_profiles/'.$user['id'].'/1.jpg';

 if(filesize($user_profile_image) > 100){
  echo '<tr><td>Profilkép:</td><td id="user_image" ><img width="300px" height="300px" src="/images/user_profiles/'.$user['id'].'/1.jpg"/></td></tr>'.PHP_EOL;
 }
 else{
  echo '<tr><td>Profilkép:</td><td id="user_image" ><img width="300px" height="300px" src="/noimage.png"/></td></tr>'.PHP_EOL;
 }

 echo '<tr><td>Regisztráció időpontja: </td><td>'.full_date($user['created_at']).'</td></tr>'.PHP_EOL;
 echo '</table>'.PHP_EOL;
 get_bottom_part();
 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '</div><!-- end page-wrapper -->'.PHP_EOL;
 echo '<hr class="invis">'.PHP_EOL;
 echo '</div><!-- end col -->'.PHP_EOL;
 get_sidebar();
 echo '</div><!-- end row -->'.PHP_EOL;
 echo '</div><!-- end container -->'.PHP_EOL;
 echo '</section>'.PHP_EOL;

 get_foot();
}
#####################################################
############ Personal Data ENDPOINT ##############
if(preg_match('/personal-data/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

get_personal_menu();

if($_COOKIE['LOGGED_IN']){
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $user = $handler->conditional_select_from("website_user",array("email" => $_COOKIE['login_email'] ))[0];

 echo '<table id="user_data_table">'.PHP_EOL;
 echo '<tr><td>Email címed:</td> <td>'.$user['email'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Felhasználóneved:</td> <td>'.$user['username'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Bemutatkozásod:</td><td>'.$user['self_introduction'].'</td></tr>'.PHP_EOL;
 echo '<tr><td>Országod:</td><td>'.$user['registered_country'].'</td></tr>'.PHP_EOL;

$user_profile_image = '/home/qqwwaass/'.$GLOBALS['project_name'].'/images/user_profiles/'.$user['id'].'/1.jpg';
if(filesize($user_profile_image) > 100){
 echo '<tr><td>Profilképed:</td><td id="user_image" ><img width="300px" height="300px" src="/images/user_profiles/'.$user['id'].'/1.jpg"/></td></tr>'.PHP_EOL;
}
else{
 echo '<tr><td>Profilképed:</td><td id="user_image" ><img width="300px" height="300px" src="/noimage.png"/></td></tr>'.PHP_EOL;
}
 echo '<tr><td>Regisztrációd időpontja: </td><td>'.full_date($user['created_at']).'</td></tr>'.PHP_EOL;
 echo '</table>'.PHP_EOL;

 echo '<div id="delete_user_div">'.PHP_EOL;
 echo '<button type="submit" class="btn btn-primary" onclick="document.getElementById(\'profile_image\').click();" >Profilkép feltöltése </button>'.PHP_EOL;
 echo ' <button style="float: right" type="submit" class="btn btn-danger" onclick="delete_account_from_site()">Fiókom törlése <i class="fa fa-envelope-open-o"></i></button>';
 echo ' <input  type="hidden" id="user_email_to_be_deleted" value="'.$_COOKIE['login_email'].'"/>'.PHP_EOL;
 echo '</div>'.PHP_EOL;


        echo '<div id="profile_image_loader"></div>'.PHP_EOL;
        echo '<form method="post" id="profile_image_form" enctype="multipart/form-data">'.PHP_EOL;
        echo '<input type="file" id="profile_image" name="profile_image_form[]" class="form-control" style="display: none;" multiple/>'.PHP_EOL;
        echo '<input  type="hidden" name="post_id" value="'.$user['id'].'"/>'.PHP_EOL;
        echo '</form>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
}
else{
 echo '<div>Kérlek jelentkezz be a fenti bejelentkezés gombbal!</div>';
}
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;

$json_data = "";
$json_data = $json_data. 'var jsondata = { '.PHP_EOL;
$json_data = $json_data. '        "user_email":   document.getElementById("user_email_to_be_deleted").value '.PHP_EOL;
$json_data = $json_data. '    };   '.PHP_EOL;
$server_endpoint = "/delete-user/";
$success_function = 'window.location.replace("http://www.'.$GLOBALS['project_name'].'.com/");'.PHP_EOL;
$error_function = 'document.getElementById("delete_user_div").innerHTML =   "<h2 style=\'color: red\' >A fiókot törlése sikertelen!</h2>"; '.PHP_EOL;
get_ajax_script("delete_account_from_site",$json_data, $server_endpoint, $success_function, $error_function);

	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>'.PHP_EOL;
        echo '<script>'.PHP_EOL;
        echo '$(\'#profile_image\').on(\'change\',function(){'.PHP_EOL;
        echo ' if($(this).val())'.PHP_EOL;
        echo '  {'.PHP_EOL;
        echo '   $(\'#profile_image_form\').submit();'.PHP_EOL;
        echo '  }'.PHP_EOL;
        echo '});'.PHP_EOL;
        echo '$(document).ready(function () {'.PHP_EOL;
        echo '$(\'#profile_image_form\').submit(function(e) {'.PHP_EOL;
        echo '    e.preventDefault();'.PHP_EOL;
        echo '    $(\'#profile_image_loader\').html(\'<img src="http://bookingport.hu/images/loading.gif") }}" style="width: 36px; margin-left: 10px;" class="loader"/>\').attr(\'disabled\',\'disabled\');'.PHP_EOL;
        echo '    $.ajax({'.PHP_EOL;
        echo '        type : "POST",'.PHP_EOL;
        echo '        url: \'/handle_profile_image_upload/\','.PHP_EOL;
        echo '        data : new FormData(this),'.PHP_EOL;
        echo '        contentType: false,'.PHP_EOL;
        echo '        cache: false,'.PHP_EOL;
        echo '        processData:false,'.PHP_EOL;
        echo '        success : onSaveSuccess'.PHP_EOL;
        echo '    });'.PHP_EOL;
        echo '    function onSaveSuccess(data)'.PHP_EOL;
        echo '    {'.PHP_EOL;
        echo '        data = $.trim(data);'.PHP_EOL;
        echo '        $(\'#profile_image_loader\').html(\'<p style="color: green;">Siker!</p>\');'.PHP_EOL;
        echo '        $(\'#user_image\').html(\'<div class="uploaded_image"><img width="300px" height="300px" src="/images/user_profiles/'.$user['id'].'/1.jpg"/></div>\');'.PHP_EOL;
        echo '    }'.PHP_EOL;
        echo '});'.PHP_EOL;
        echo '});'.PHP_EOL;
        echo '</script>'.PHP_EOL;

get_foot();
}
#####################################################
############ Delete USER ENDPOINT ##############
if(preg_match('/delete-user/', $request)){
 $json = json_decode(file_get_contents("php://input"));
 $user_email = $json->Data->user_email;
 $updates = array("enabled" => 0);
 $handler->update_in_table("website_user",$updates,"email",$user_email);
 send_service_mail("<div>".$user_email." megpróbálta kitörölni magát.<div>");
 setcookie("login_email","",time()-3600,"/");
 setcookie("LOGGED_IN", False, time()-3600,"/");
 echo "DELETE_SUCCESS";
}
#####################################################
############ SET-LISTENING-ENTRY-SOLUTION ENDPOINT ##############
if(preg_match('/set-listening-entry-solution/', $request)){
 $json = json_decode(file_get_contents("php://input"));
 $solution = $json->Data->solution;
 $element_id = $json->Data->element_id;
 $updates = array("solution" => $solution);
 $handler->update_in_table("listening_entry",$updates,"id",$element_id);
 echo "SUCCESS";
}
#####################################################
############ Results ENDPOINT ##############
if(preg_match('/results/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

get_personal_menu();

if($_COOKIE['LOGGED_IN']){
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $user = $handler->conditional_select_from("website_user",array("email" => $_COOKIE['login_email'] ))[0];
 echo '<br>'.PHP_EOL;
 echo '<h5 style="color: black" >Eredményeid:</h5>'.PHP_EOL;
 echo '<div class="blog-list-widget">'.PHP_EOL;
 $counter = 0;
 $online_test_results = array_reverse($handler->conditional_select_from("online_test_results",array("user_id" => $user['id'])));
 foreach($online_test_results as $result){
  $counter = $counter + 1;
  $online_test = array_reverse($handler->conditional_select_from("online_tests",array("id" => $result['online_test_id'])))[0];
  $test_date = "<span>(".full_date($result['created']).") </span>";
  echo '<div style="line-height: 2em">'.$online_test['title'].' Pontszám: '.$result['test_result'].' '.$test_date.' </div>'.PHP_EOL;
 }                                      
 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '<br>'.PHP_EOL;
}
else{
 echo '<div>Kérlek jelentkezz be a fenti bejelentkezés gombbal!</div>';
}
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}
#####################################################
############ Tests ENDPOINT ##############
if(preg_match('/tests/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

get_personal_menu();

if($_COOKIE['LOGGED_IN']){
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $user = $handler->conditional_select_from("website_user",array("email" => $_COOKIE['login_email'] ))[0];
 echo '<div><span style="font-weight: bold;">'.$user['registered_name'].'</span>, üdvözollek!</div>';
 echo '<br>'.PHP_EOL;
 echo '<h5 style="color: black" >Tesztjeid:</h5>'.PHP_EOL;
 echo '<div class="blog-list-widget">'.PHP_EOL;
 $counter = 0;
 $online_tests = array_reverse($handler->conditional_select_from("online_tests",array("active_online_test" => 1)));
 foreach($online_tests as $article){
  $counter = $counter + 1;
  echo '<div style="line-height: 2em">'.$counter.'. '.$article['title'].' <a style="text-transform: none!important" href="/online-test/'.$article['titleForUrl'].'" title=""> Irány a teszthez!</a></div>'.PHP_EOL;
 }                                      
 echo '</div><!-- end blog-list -->'.PHP_EOL;
 echo '<br>'.PHP_EOL;
}
else{
 echo '<div>Kérlek jelentkezz be a fenti bejelentkezés gombbal!</div>';
}
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}
#####################################################
############ My-Profile ENDPOINT ##############
if(preg_match('/my-profile/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
$GLOBALS['page_title'] = "Személyes felület";
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;

get_personal_menu();

if($_COOKIE['LOGGED_IN']){
 echo '<br>'.PHP_EOL;
 echo '<br>'.PHP_EOL;
 $user = $handler->conditional_select_from("website_user",array("email" => $_COOKIE['login_email'] ))[0];
 echo '<div><span style="font-weight: bold;">'.$user['registered_name'].'</span>, üdvözollek!</div>';
 echo '<br>'.PHP_EOL;

}
else{
 echo '<div>Kérlek jelentkezz be a fenti bejelentkezés gombbal!</div>';
}
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}
if(preg_match('/login-user/', $request)){
 $json = json_decode(file_get_contents("php://input"));
 
 $email = $json->Data->email;
 
 $handler = new DatabaseHandler;
 
 $user = $handler->conditional_select_from("website_user",array("email" => $json->Data->email ))[0];

########## TODO ############
### If User is inactive ####
############################
 
 if(md5($json->Data->password) == $user['password']){
  echo "LOGIN_SUCCESS";
  send_service_mail("<div>".$user['email']." sikeresen bejelentkezett.<div>");
  setcookie("LOGGED_IN", True, time()+3600,"/");  /* expire in 1 hour */
  setcookie("login_email", $user['email'], time()+3600,"/");  /* expire in 1 hour */
 }
 else{
  echo "LOGIN_FAIL";
  setcookie("LOGGED_IN", False, time()+3600,"/");  /* expire in 1 hour */
  send_service_mail("<div>".$user['email']." megpróbált bejelentkezni, de nem sikerült.<div>");
 }

}
##################################################
############### Forgot Password ENDPOINT #########
##################################################
if(preg_match('/forgot-password-user/', $request)){
 $json = json_decode(file_get_contents("php://input"));
 
 $email = $json->Data->email;
 
 $handler = new DatabaseHandler;
 
 $user = $handler->conditional_select_from("website_user",array("email" => $email ))[0];

 $hash = hash ( "sha256" , date("h") . 'professorairenmadrid' );
 $updates = array("password_reset_hash" => $hash);
 $handler->update_in_table("website_user",$updates,"email",$email);
 send_service_mail("<div>".$user['email']." új jelszót igényelt.<div>");

########## Send password reset email ##################
$confirmation_link = "http://www.".$GLOBALS['project_name'].".com/password-reset/".$hash;
$mail_content = "A betufront.hu örül, hogy a tagjai között tudhat téged!</div><br> <br> <div>A jelszó frissítéséhez kattints a következő linkre: <a href='".$confirmation_link."'>".$confirmation_link."</a></div><div><br> Ha nem működne, közvetlenül másold ki a linket és egy új lapon nyisd meg azt! <br> Jó spanyol tanulást kívánok! <br> Facebook oldalunkat megtalálod a következő linken: <a href='https://bit.ly/2BsKqtJ'>https://bit.ly/2BsKqtJ</a>. <br> Ne felejtsd el az oldalt like-olni! </div>";

$subject = 'Jelszó visszaállító levél a spanyoltanulás.com-ról';

$headers = "From: " . strip_tags('info@betufront.hu') . "\r\n";
$headers .= "Reply-To: ". strip_tags('info@betufront.hu') . "\r\n";
$headers .= "CC: info@betufront.hu\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<html>'.$mail_content;
$message .= "</html>";
mail($email,$subject,$message,$headers);
}

############ Register User ENDPOINT ##############
if(preg_match('/register-user/', $request)){
$json = json_decode(file_get_contents("php://input"));

$email = $json->Data->email;
$name = $json->Data->name;
$username = $json->Data->username;
$self_introduction = $json->Data->self_introduction;

$registered_age = $json->Data->registered_age;
$registered_sex = $json->Data->registered_sex;
$registered_country = $json->Data->registered_country;

$password = md5($json->Data->password);
$confirmation_hash = hash ( "sha256" , date("h") . 'professorairenmadrid' );

$register_content = array("email" => $email, "registered_name" => $name, "username" => $username, "password" => $password, "enabled" => 0,"confirmation_hash" => $confirmation_hash, "self_introduction" => $self_introduction, "registered_age" => $registered_age, "registered_sex" => $registered_sex, "registered_country" => $registered_country);
$register_array   = array("email" , "registered_name" , "username" , "password","enabled","confirmation_hash","self_introduction","registered_age", "registered_sex", "registered_country");

$handler = new DatabaseHandler;

if(strlen($username) < 5){
 echo "REGISTRATION_FAILURE_USERNAME_TOO_SHORT";
 return;
}
if(strlen($username) > 30){
 echo "REGISTRATION_FAILURE_USERNAME_TOO_LONG";
 return;
}
if(strlen($email) < 5){
 echo "REGISTRATION_FAILURE_EMAIL_TOO_SHORT";
 return;
}
if(strlen($json->Data->password) < 5){
 echo "REGISTRATION_FAILURE_PASSWORD_TOO_SHORT";
 return;
}
if(strlen($name) < 5){
 echo "REGISTRATION_FAILURE_NAME_TOO_SHORT";
 return;
}
if(strlen($self_introduction) < 5){
 echo "REGISTRATION_FAILURE_SELF_INTRODUCTION_TOO_SHORT";
 return;
}
if(strlen($self_introduction) > 500){
 echo "REGISTRATION_FAILURE_SELF_INTRODUCTION_TOO_LONG";
 return;
}

if(!check_user_exists($email)){

 $handler->insert_into_table("website_user",$register_array ,$register_content);
 ########## Send confirmation email ##################
 $confirmation_link = "http://www.".$GLOBALS['project_name'].".com/confirm-registration/".$confirmation_hash;
 $mail_content = "<h1>Üdvözlünk!</h1><div>Kedves ".$name.", <br><br> Köszönöm a regisztrációt!<br> A betufront.hu örül, hogy a tagjai között tudhat téged!</div><br> <div>A regisztrációd megerősítéséhez kattints a következő linkre: <a href='".$confirmation_link."'>".$confirmation_link."</a></div><div><br> Ha nem működne, közvetlenül másold ki a linket és egy új lapon nyisd meg azt! <br> Jó spanyol tanulást kívánok! <br> Facebook oldalunkat megtalálod a következő linken: <a href='https://bit.ly/2BsKqtJ'>https://bit.ly/2BsKqtJ</a>. <br> Ne felejtsd el az oldalt like-olni! </div>";
 
 $subject = 'Megerősítő email a spanyoltanulás.com-ról [felhasználónév: '.$username.']';
 
 $headers = "From: " . strip_tags('info@betufront.hu') . "\r\n";
 $headers .= "Reply-To: ". strip_tags('info@betufront.hu') . "\r\n";
 $headers .= "CC: info@betufront.hu\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
 $message = '<html>'.$mail_content;
 $message .= "</html>";
 mail($email,$subject,$message,$headers);
 mail("ladotski@yandex.ru",$subject,$message,$headers);
 #####################################################
 echo "REGISTRATION_SUCCESS";
}
else{
 echo "REGISTRATION_FAILURE_EXISTING_USER";
}
}
##################################################

if(preg_match('/set-solution-1/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_1" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-2/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_2" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-3/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_3" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-4/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_4" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-5/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_5" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-6/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_6" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-7/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_7" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-8/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_8" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-9/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_9" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}
if(preg_match('/set-solution-10/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("solution_10" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
}


if(preg_match('/edit-online-test-initial/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$initial = $json->Data->initial;
$id = $json->Data->id;
$updates = array("initial" => $initial);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-title-for-url/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("titleForUrl" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-title/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$title = $json->Data->title;
$id = $json->Data->id;
$updates = array("title" => $title);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-1\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_1" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-1_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_1_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-1_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_1_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-1_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_1_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-2\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_2" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-2_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_2_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-2_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_2_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-2_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_2_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-3\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_3" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-3_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_3_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-3_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_3_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-3_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_3_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-4\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_4" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-4_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_4_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-4_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_4_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-4_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_4_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-5\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_5" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-5_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_5_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-5_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_5_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-5_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_5_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-6\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_6" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-6_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_6_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-6_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_6_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-6_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_6_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-7\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_7" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-7_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_7_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-7_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_7_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-7_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_7_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-8\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_8" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-8_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_8_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-8_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_8_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-8_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_8_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-9\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_9" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-9_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_9_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-9_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_9_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-9_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_9_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-10\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_10" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-10_a\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_10_a" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-10_b\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_10_b" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/edit-online-test-set-target-word-10_c\//', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("target_word_10_c" => $titleForUrl);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/activate-online-test/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_online_test" => 1);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}
if(preg_match('/deactivate-online-test/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_online_test" => 0);
$handler->update_in_table("online_tests",$updates,"id",$id);
return;
}

########################################################

############### Book endpoints ##################
if(preg_match('/activate-article/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_article" => 1);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/deactivate-article/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_article" => 0);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/edit-ad-text/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("ad_text" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-price/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_price" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-publish-date/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_publish_date" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-condition/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_condition" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-delivery-place/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("delivery_place" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-publisher/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_publisher" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/upload-book-advert-endpoint/', $request)){

$handler = new DatabaseHandler;

$json = json_decode(file_get_contents("php://input"));

$id = $json->Data->id;

$bfs = $handler->conditional_select_from("books_for_sale",array("id" => $id ))[0];

$book_title = rtrim(ltrim($bfs['book_title']));
$book_author = rtrim(ltrim($bfs['book_author']));

 $titleForUrl = preg_replace('/\s+/', '-', $book_title." ".$book_author);

 $replace = [
     '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
     '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae',
     '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
     'Ç' => 'C', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
     'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
     'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
     'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
     'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
     'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
     'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
     'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
     'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
     'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
     'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
     'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
     '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
     'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
     'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
     'ä' => 'ae', '&auml;' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
     'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
     'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e',
     'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
     'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
     'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
     'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
     'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
     'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
     'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe',
     '&ouml;' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe',
     'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => 'u', 'ú' => 'u',
     'û' => 'u', 'ü' => 'ue', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
     'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
     'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
     'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
     'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
     'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
     'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
     'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
     'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
     'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
     'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
     'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
     'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
     'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
     'ю' => 'yu', 'я' => 'ya'
 ];

$titleForUrl = str_replace(array_keys($replace), $replace, $titleForUrl);
$titleForUrl = mb_strtolower($titleForUrl);

$updates = array("titleForUrl" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);

echo $titleForUrl;

return;
}
if(preg_match('/edit-book-language/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_language" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-page-number/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_page_numbers" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-isbn/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_isbn" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-summary/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_summary" => $titleForUrl);
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-author/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_author" => rtrim(ltrim($titleForUrl)));
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-book-title/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("book_title" => rtrim(ltrim($titleForUrl)));
$handler->update_in_table("books_for_sale",$updates,"id",$id);
return;
}
if(preg_match('/edit-article-type-string/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$typeString = $json->Data->typeString;
$id = $json->Data->id;
$updates = array("type_string" => $typeString);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/edit-article-type/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$type = $json->Data->type;
$id = $json->Data->id;
$updates = array("type" => $type);
$handler->update_in_table("article",$updates,"id",$id);
return;
}

if(preg_match('/edit-article-content2/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content2 = $json->Data->content2;
$id = $json->Data->id;
$updates = array("content2" => $content2);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
else if(preg_match('/edit-article-content/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content = $json->Data->content;
$id = $json->Data->id;
$updates = array("content" => $content);
$handler->update_in_table("article",$updates,"id",$id);
}

if(preg_match('/edit-article-initial/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$initial = $json->Data->initial;
$id = $json->Data->id;
$updates = array("initial" => $initial);
$handler->update_in_table("article",$updates,"id",$id);
}


if(preg_match('/edit-article-content1/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content1 = $json->Data->content1;
$id = $json->Data->id;
$updates = array("content1" => $content1);
$handler->update_in_table("article",$updates,"id",$id);
}
if(preg_match('/edit-article-title/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$title = $json->Data->title;
$id = $json->Data->id;
$updates = array("title" => $title);
$handler->update_in_table("article",$updates,"id",$id);
}
########################################################

############### Article endpoints ##################
if(preg_match('/activate-article/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_article" => 1);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/deactivate-article/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("active_article" => 0);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/edit-article-title-for-url/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$titleForUrl = $json->Data->titleForUrl;
$id = $json->Data->id;
$updates = array("titleForUrl" => $titleForUrl);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/edit-article-type-string/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$typeString = $json->Data->typeString;
$id = $json->Data->id;
$updates = array("type_string" => $typeString);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
if(preg_match('/edit-article-type/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$type = $json->Data->type;
$id = $json->Data->id;
$updates = array("type" => $type);
$handler->update_in_table("article",$updates,"id",$id);
return;
}

if(preg_match('/edit-article-content2/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content2 = $json->Data->content2;
$id = $json->Data->id;
$updates = array("content2" => $content2);
$handler->update_in_table("article",$updates,"id",$id);
return;
}
else if(preg_match('/edit-article-content/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content = $json->Data->content;
$id = $json->Data->id;
$updates = array("content" => $content);
$handler->update_in_table("article",$updates,"id",$id);
}

if(preg_match('/edit-article-initial/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$initial = $json->Data->initial;
$id = $json->Data->id;
$updates = array("initial" => $initial);
$handler->update_in_table("article",$updates,"id",$id);
}


if(preg_match('/edit-article-content1/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$content1 = $json->Data->content1;
$id = $json->Data->id;
$updates = array("content1" => $content1);
$handler->update_in_table("article",$updates,"id",$id);
}
if(preg_match('/edit-article-title/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$title = $json->Data->title;
$id = $json->Data->id;
$updates = array("title" => $title);
$handler->update_in_table("article",$updates,"id",$id);
}
########################################################

if(preg_match('/send-message-from-site/', $request)){
$handler = new DatabaseHandler;
$json = json_decode(file_get_contents("php://input"));
$email_address = $json->Data->email_address;
$user_message = $json->Data->user_message;
$user_name = $json->Data->user_name;
$data_type_from_site = $json->Data->data_type_from_site;
if($data_type_from_site == 0){
 $subject = 'Hozzászólás a Spanyoltanulás.com-ról';
 $handler = new DatabaseHandler;
 $comment_article_id = $json->Data->comment_article_id;
# CREATE TABLE IF NOT EXISTS `article_comments` (created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,  `comment_key` INT AUTO_INCREMENT , `comment_email` TEXT NOT NULL, `comment_name` TEXT NOT NULL, `comment_content` TEXT NOT NULL, `comment_article_id` INT NOT NULL ,`active_flag` INT NOT NULL , PRIMARY KEY (`comment_key`) ) ENGINE = InnoDB; 
 $handler->insert_into_table("article_comments",array("comment_email","comment_name","comment_content","comment_article_id","active_flag"),array("comment_email" => $email_address,"comment_name" => $user_name,"comment_content" => $user_message, "comment_article_id" => $comment_article_id,'active_flag' => 0));

}
if($data_type_from_site == 1){
 $subject = 'Érdeklődés a Spanyoltanulás.com-ról:';
}



$headers = "From: " . strip_tags('hikari.code@gmail.com') . "\r\n";
$headers .= "Reply-To: ". strip_tags('hikari.code@gmail.com') . "\r\n";
$headers .= "CC: hikari.code@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email_address) . "</td></tr>";
$message .= "<tr><td><strong>Név:</strong> </td><td>" . strip_tags($user_name) . "</td></tr>";
$message .= "<tr><td><strong>Tartalom:</strong> </td><td>" . strip_tags($user_message) . "</td></tr>";
$message .= "<tr><td><strong>Ekkor </strong> </td><td>" . date('l jS \of F Y h:i:s A') . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
mail("ladotski@yandex.ru",$subject,$message,$headers);
echo "ok";
}

if(preg_match('/add-book-for-sale\//', $request)){
        $handler = new DatabaseHandler;
        $auth  = explode("/",$request)[2];

#        $logged_in = False;
#        if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
#         $logged_in = True;
#        }
#        if(!$logged_in){
#         die("Unauthorized!");
#        }

        $random_title = md5(microtime());

        $handler->insert_into_table("books_for_sale",array(
	     "titleForUrl",
	     "book_summary",
	     "ad_text",
	     "category",
	     "active_book",
	     "book_language",
	     "book_condition",
	     "book_publisher",
	     "book_page_numbers",
	     "book_publish_date",
	     "book_isbn",
	     "delivery_place",
	     "book_price",
	     "book_author",
	     "book_title",
	     "book_unique_hash"),
          array(
             "titleForUrl" => $random_title,
	     "book_summary" => "",
	     "ad_text" => "",
	     "category" => "",
	     "active_book" => 0,
	     "book_language" => "",
	     "book_condition" => "",
	     "book_publisher" => "",
	     "book_page_numbers" => "",
	     "book_publish_date" => "",
	     "book_isbn" => "",
	     "delivery_place" => "",
	     "book_price" => "",
	     "book_author" => "",
	     "book_title" => "",
	     "book_unique_hash" => $random_title
             )
           );

        $redirect_route = "Location: http://".$GLOBALS['project_name'].".hu/edit-book-for-sale/".$random_title."/057a39a1cf79eb4625c16c51eadd3283";
        header($redirect_route);

}
if(preg_match('/add-article\//', $request)){
        $handler = new DatabaseHandler;
        $auth  = explode("/",$request)[2];

        $logged_in = False;
        if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
         $logged_in = True;
        }
        if(!$logged_in){
         die("Unauthorized!");
        }
        $random_title = md5(microtime());
        $handler->insert_into_table("article",array("title","titleForUrl","active_article"),array("title" => $random_title, "titleForUrl" => $random_title,"active_article" => 0));
        $redirect_route = "Location: http://".$GLOBALS['project_name'].".com/edit/".$random_title."/057a39a1cf79eb4625c16c51eadd3283";
        header($redirect_route);

}
if(preg_match('/edit-book-for-sale\//', $request)){

$auth  = explode("/",$request)[3];

$logged_in = False;
if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
$logged_in = True;
}
if(!$logged_in){
die("Unauthorized!");
}

$meta_content = "";
get_head(False,$logged_in,array(),$meta_content);
$title = explode("/",$request)[2];
$bfs = $handler->conditional_select_from("books_for_sale",array("titleForUrl" => $title ))[0];
    
echo '<div style="width: 1080px; padding: 0;position: relative; max-width: 1080px; margin: 0 auto; box-sizing: border-box;">'.PHP_EOL;

echo '<h4>A könyved szerzője</h4>'.PHP_EOL;
echo '<textarea id="book_author_box" onchange="set_book_author();" style="width: 100%;height: 1em;" >'.$bfs['book_author'].'</textarea>';

echo '<h4>Címe</h4>'.PHP_EOL;
echo '<textarea id="book_title_box" onchange="set_book_title();" style="width: 100%;height: 1em;" >'.$bfs['book_title'].'</textarea>';

echo '<h4>A könyved tartalma</h4>'.PHP_EOL;
echo '<textarea id="book_summary_box" onchange="set_book_summary();" style="width: 100%;" >'.$bfs['book_summary'].'</textarea>';

echo '<h4>A hirdetés szövege</h4>'.PHP_EOL;
echo '<textarea id="ad_text_box" onchange="set_ad_text();" style="width: 100%; height: 3em;" >'.$bfs['ad_text'].'</textarea>';

echo '<h4>Mennyiért adod?</h4>'.PHP_EOL;
echo '<textarea id="book_price_box" onchange="set_book_price();" style="width: 100%;height: 1em;" >'.$bfs['book_price'].'</textarea>';

echo '<h4>Oldalainak száma</h4>'.PHP_EOL;
echo '<textarea id="book_page_number_box" onchange="set_book_page_number();" style="width: 100%;height: 1em;" >'.$bfs['book_page_numbers'].'</textarea>';

echo '<h4>Kiadás éve</h4>'.PHP_EOL;
echo '<textarea id="book_publish_date_box" onchange="set_publish_date();" style="width: 100%;height: 1em;" >'.$bfs['book_publish_date'].'</textarea>';

echo '<h4>ISBN száma (ha van)</h4>'.PHP_EOL;
echo '<textarea id="book_isbn_box" onchange="set_book_isbn();" style="width: 100%;height: 1em;" >'.$bfs['book_isbn'].'</textarea>';

echo '<h4>Milyen nyelven íródott?</h4>'.PHP_EOL;
echo '<textarea id="book_language_box" onchange="set_book_language();" style="width: 100%;height: 1em;" >'.$bfs['book_language'].'</textarea>';

echo '<h4>A könyved állapota</h4>'.PHP_EOL;
echo '<textarea id="book_condition_box" onchange="set_book_condition();" style="width: 100%;height: 1em;" >'.$bfs['book_condition'].'</textarea>';

echo '<h4>Kiadója</h4>'.PHP_EOL;
echo '<textarea id="book_publisher_box" onchange="set_book_publisher();" style="width: 100%;height: 1em;" >'.$bfs['book_publisher'].'</textarea>';

echo '<h4>Hol tudod átadni? (Írj minnél részletesebben)?</h4>'.PHP_EOL;
echo '<textarea id="delivery_place_box" onchange="set_delivery_place();" style="width: 100%;height: 1em;" >'.$bfs['delivery_place'].'</textarea>';

echo '<button style="margin-top: 10px; margin-bottom: 10px;float: right" type="submit" class="btn btn-primary" onclick="upload_book_advert()">Feltöltöm <i class="fa fa-envelope-open-o"></i></button>'.PHP_EOL;


#echo '<br>';
#echo '<button type="submit" class="btn btn-primary" onclick="add_references()">Hozzáadom</button>'.PHP_EOL;
#echo '<button type="submit" class="btn btn-primary" onclick="add_url_address()">URL cím</button>'.PHP_EOL;
#echo '<button type="submit" class="btn btn-primary" onclick="deactivate()">Deactivate</button>'.PHP_EOL;
#echo '<button type="submit" class="btn btn-primary" onclick="activate()">Activate</button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="document.getElementById(\'advert_image\').click();" >Kép feltöltése</button>'.PHP_EOL;

echo '<div id="advert_image_loader"></div>'.PHP_EOL;
echo '<div id="advert_image_image"></div>'.PHP_EOL;

echo '<form method="post" id="advert_image_form" enctype="multipart/form-data">'.PHP_EOL;
echo '<input type="file" id="advert_image" name="advert_image_form[]" class="form-control" style="display: none;" multiple/>'.PHP_EOL;
echo '<input  type="hidden" name="post_id" value="'.$bfs['id'].'"/>'.PHP_EOL;
echo '<input  type="hidden" name="book_unique_hash" value="'.$bfs['book_unique_hash'].'"/>'.PHP_EOL;
echo '</form>'.PHP_EOL;

$images = $handler->conditional_select_from("books_for_sale_images",array("book_unique_hash" => $bfs['book_unique_hash'] ));

echo '<table>'.PHP_EOL;

foreach( $images as $image ){
echo '<tr>'.PHP_EOL;

echo ' <td>'.PHP_EOL;
echo ' <img width="150px" height="150px" src="/images/books/'.$bfs['id'].'/'.$image['book_image_name'].'"/>'.PHP_EOL;
echo ' </td>'.PHP_EOL;
echo ' <td>'.PHP_EOL;
echo ' <button type="submit" class="btn-warning" onclick="delete_book_image(\''.$image['book_image_name'].'\')">Törlés</button>'.PHP_EOL;
echo ' </td>'.PHP_EOL;

echo '</tr>'.PHP_EOL;
}

echo '</table>'.PHP_EOL;

echo "</div>".PHP_EOL;

	 
echo '<script>'.PHP_EOL;
echo 'function delete_book_image(book_image_name){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "book_unique_hash": "'.$bfs['book_unique_hash'].'", '.PHP_EOL;
echo '        "book_image_name": book_image_name '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/remove-book-image/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '         location.reload();'.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo 'function set_initial(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "initial": document.getElementById("initial_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-initial/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_author(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_author_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-author/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_ad_text(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("ad_text_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-ad-text/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_price(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_price_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-price/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_language(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_language_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-language/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function upload_book_advert(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("delivery_place_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/upload-book-advert-endpoint/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        window.location.replace("http://www.'.$GLOBALS['project_name'].'.hu/hasznalt-konyv/"+data);'.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_delivery_place(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("delivery_place_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-delivery-place/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_publisher(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_publisher_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-publisher/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_condition(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_condition_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-condition/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_publish_date(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_publish_date_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-publish-date/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_page_number(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_page_number_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-page-number/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_isbn(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_isbn_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-isbn/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_summary(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_summary_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-summary/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_book_title(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("book_title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-book-title/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_type_string(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "typeString": document.getElementById("type_string_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-type-string/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_type(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "type": document.getElementById("type_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-type/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content2(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "content2": document.getElementById("content2_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content2/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content1(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "content1": document.getElementById("content1_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content1/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "content": document.getElementById("content_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_title(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-title/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function add_references(){'.PHP_EOL;
echo '        var reference_article_1 = document.getElementById("reference_article_1").value; '.PHP_EOL;
echo '        var reference_article_2 = document.getElementById("reference_article_2").value;'.PHP_EOL;
echo '        var reference_article_3 = document.getElementById("reference_article_3").value;'.PHP_EOL;
echo '        var reference_article_4 = document.getElementById("reference_article_4").value;'.PHP_EOL;
echo '        var reference_article_5 = document.getElementById("reference_article_5").value;'.PHP_EOL;
echo '        var reference_article_1_text_1 = document.getElementById("reference_article_1"); '.PHP_EOL;
echo '        var reference_article_2_text_1 = document.getElementById("reference_article_2");'.PHP_EOL;
echo '        var reference_article_3_text_1 = document.getElementById("reference_article_3");'.PHP_EOL;
echo '        var reference_article_4_text_1 = document.getElementById("reference_article_4");'.PHP_EOL;
echo '        var reference_article_5_text_1 = document.getElementById("reference_article_5");'.PHP_EOL;
echo '        var reference_article_1_text = reference_article_1_text_1.options[reference_article_1_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_2_text = reference_article_2_text_1.options[reference_article_2_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_3_text = reference_article_3_text_1.options[reference_article_3_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_4_text = reference_article_4_text_1.options[reference_article_4_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_5_text = reference_article_5_text_1.options[reference_article_5_text_1.selectedIndex].text;'.PHP_EOL;
echo '        document.getElementById("content2_box").value = "<div class=\'review_text_container\'>\n<div class=\'review_text\'> \n Ezek is érdekesek lehetnek: \n <ul style=\'line-height: 4em\'> \n <li><a href=\'/article/"+reference_article_1+"\'>"+reference_article_1_text+"</a></li> \n <li><a href=\'/article/"+reference_article_2+"\'>"+reference_article_2_text+"</a></li> \n <li><a href=\'/article/"+reference_article_3+"\'>"+reference_article_3_text+"</a></li> \n <li><a href=\'/article/"+reference_article_4+"\'>"+reference_article_4_text+"</a></li> \n <li><a href=\'/article/"+reference_article_5+"\'>"+reference_article_5_text+"</a></li> \n </ul> \n </div> \n</div>"; '.PHP_EOL;
echo '        set_content2();'.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function deactivate(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/deactivate-article/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function activate(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$bfs['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/activate-article/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function add_url_address(){'.PHP_EOL;
echo '        document.getElementById("title_for_url_box").value = document.getElementById("title_box").value.toLowerCase().replace(/\s+/g, \'-\').normalize(\'NFD\').replace(/[\u0300-\u036f]/g, ""); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo '$(\'#advert_image\').on(\'change\',function(){'.PHP_EOL;
echo ' if($(this).val())'.PHP_EOL;
echo '  {'.PHP_EOL;
echo '   $(\'#advert_image_form\').submit();'.PHP_EOL;
echo '  }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(document).ready(function () {'.PHP_EOL;
echo '$(\'#advert_image_form\').submit(function(e) {'.PHP_EOL;
echo '    e.preventDefault();'.PHP_EOL;
echo '    $(\'#advert_image_loader\').html(\'<img src="http://bookingport.hu/images/loading.gif") }}" style="width: 36px; margin-left: 10px;" class="loader"/>\').attr(\'disabled\',\'disabled\');'.PHP_EOL;
echo '    $.ajax({'.PHP_EOL;
echo '        type : "POST",'.PHP_EOL;
echo '        url: \'/handle_image_upload/\','.PHP_EOL;
echo '        data : new FormData(this),'.PHP_EOL;
echo '        contentType: false,'.PHP_EOL;
echo '        cache: false,'.PHP_EOL;
echo '        processData:false,'.PHP_EOL;
echo '        success : onSaveSuccess'.PHP_EOL;
echo '    });'.PHP_EOL;
echo '    function onSaveSuccess(data)'.PHP_EOL;
echo '    {'.PHP_EOL;
echo '        data = $.trim(data);'.PHP_EOL;
echo '        $(\'#advert_image_loader\').html(\'<p style="color: green;">Success</p>\');'.PHP_EOL;
echo '        $(\'#advert_image_image\').after(\'<div class="uploaded_image"><img width="150px" height="150px" src="/images/books/\'+data+\'"/></div>\');'.PHP_EOL;
echo '    }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(\'#additional_advert_image\').on(\'change\',function(){'.PHP_EOL;
echo ' if($(this).val())'.PHP_EOL;
echo '  {'.PHP_EOL;
echo '   $(\'#additional_advert_image_form\').submit();'.PHP_EOL;
echo '  }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(document).ready(function () {'.PHP_EOL;
echo '$(\'#additional_advert_image_form\').submit(function(e) {'.PHP_EOL;
echo '    e.preventDefault();'.PHP_EOL;
echo '    $(\'#advert_image_loader\').html(\'<img src="http://bookingport.hu/images/loading.gif") }}" style="width: 36px; margin-left: 10px;" class="loader"/>\').attr(\'disabled\',\'disabled\');'.PHP_EOL;
echo '    $.ajax({'.PHP_EOL;
echo '        type : "POST",'.PHP_EOL;
echo '        url: \'/handle_additional_image_upload/\','.PHP_EOL;
echo '        data : new FormData(this),'.PHP_EOL;
echo '        contentType: false,'.PHP_EOL;
echo '        cache: false,'.PHP_EOL;
echo '        processData:false,'.PHP_EOL;
echo '        success : onSaveSuccess'.PHP_EOL;
echo '    });'.PHP_EOL;
echo '    function onSaveSuccess(data)'.PHP_EOL;
echo '    {'.PHP_EOL;
echo '        data = $.trim(data);'.PHP_EOL;
echo '        $(\'#advert_image_loader\').html(\'<p style="color: green;">Success</p>\');'.PHP_EOL;
echo '    }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '});'.PHP_EOL;
echo '</script>'.PHP_EOL;

        get_foot();
}
if(preg_match('/edit\//', $request)){

$auth  = explode("/",$request)[3];

$logged_in = False;
if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
 $logged_in = True;
}
if(!$logged_in){
 die("Unauthorized!");
}

$meta_content = "";
get_head(False,$logged_in,array(),$meta_content);
$title = explode("/",$request)[2];
$articles = $handler->conditional_select_from("article",array("titleForUrl" => $title ));
$this_article = $articles[0];

echo '<section class="section wb">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">';
echo '<div class="page-wrapper">';
echo '<div class="blog-list clearfix">';
echo '<div class="blog-box row">';
echo '<div class="blog-meta big-meta" style="width: 100%; text-align: justify;">';
echo '<textarea id="title_box" onchange="set_title();" style="width: 100%;" >'.$this_article['title'].'</textarea>';
echo '<textarea id="initial_box" onchange="set_initial();" style="width: 100%;height: 24em;" >'.$this_article['initial'].'</textarea>';
echo '<textarea id="content_box" onchange="set_content();" style="width: 100%;height: 24em;" >'.$this_article['content'].'</textarea>';
echo '<textarea id="content1_box" onchange="set_content1();" style="width: 100%;height: 24em;" >'.$this_article['content1'].'</textarea>';
echo '<textarea id="content2_box" onchange="set_content2();" style="width: 100%;height: 24em;" >'.$this_article['content2'].'</textarea>';
echo '<textarea id="type_string_box" onchange="set_type_string();" style="width: 100%;height: 4em;" >'.$this_article['type_string'].'</textarea>';
echo '<textarea id="type_box" onchange="set_type();" style="width: 100%;height: 4em;" >'.$this_article['type'].'</textarea>';
echo '<textarea id="title_for_url_box" onchange="set_title_for_url();" style="width: 100%;height: 4em;" >'.$this_article['titleForUrl'].'</textarea>';
$articles = array_reverse($handler->select_all_from("article"));
echo '<br>';
echo '<span style="color: black" >Feltöltés: scp jpg qqwwaass@107.180.50.188:/home/qqwwaass/'.$GLOBALS['project_name'].'/images/'.$this_article['id'].'/1.jpg </span>';
echo '<br>';
echo '<label for="reference_article_1">Referencia 1:</label>'.PHP_EOL;
echo '<select name="cars" id="reference_article_1">'.PHP_EOL;
foreach( $articles as $article ){
 echo '  <option value="'.$article['titleForUrl'].'">'.$article['title'].'</option>'.PHP_EOL;
}
echo '</select>'.PHP_EOL;

echo '<br>';
echo '<label for="reference_article_2">Referencia 2:</label>'.PHP_EOL;
echo '<select name="cars" id="reference_article_2">'.PHP_EOL;
foreach( $articles as $article ){
 echo '  <option value="'.$article['titleForUrl'].'">'.$article['title'].'</option>'.PHP_EOL;
}
echo '</select>'.PHP_EOL;

echo '<br>';
echo '<label for="reference_article_3">Referencia 3:</label>'.PHP_EOL;
echo '<select name="cars" id="reference_article_3">'.PHP_EOL;
foreach( $articles as $article ){
 echo '  <option value="'.$article['titleForUrl'].'">'.$article['title'].'</option>'.PHP_EOL;
}
echo '</select>'.PHP_EOL;

echo '<br>';
echo '<label for="reference_article_4">Referencia 4:</label>'.PHP_EOL;
echo '<select name="cars" id="reference_article_4">'.PHP_EOL;
foreach( $articles as $article ){
 echo '  <option value="'.$article['titleForUrl'].'">'.$article['title'].'</option>'.PHP_EOL;
}
echo '</select>'.PHP_EOL;

echo '<br>';
echo '<label for="reference_article_5">Referencia 5:</label>'.PHP_EOL;
echo '<select name="cars" id="reference_article_5">'.PHP_EOL;
foreach( $articles as $article ){
 echo '  <option value="'.$article['titleForUrl'].'">'.$article['title'].'</option>'.PHP_EOL;
}
echo '</select>'.PHP_EOL;
echo '<br>';
echo '<button type="submit" class="btn btn-primary" onclick="add_references()">Hozzáadom</button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="add_url_address()">URL cím</button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="deactivate()">Deactivate</button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="activate()">Activate</button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="document.getElementById(\'advert_image\').click();" >Főkép feltöltése </button>'.PHP_EOL;
echo '<button type="submit" class="btn btn-primary" onclick="document.getElementById(\'additional_advert_image\').click();" >Továbbiak feltöltése</button>'.PHP_EOL;
echo '<div id="advert_image_loader"></div>'.PHP_EOL;
echo '<form method="post" id="advert_image_form" enctype="multipart/form-data">'.PHP_EOL;
echo '<input type="file" id="advert_image" name="advert_image_form[]" class="form-control" style="display: none;" multiple/>'.PHP_EOL;
echo '<input  type="hidden" name="post_id" value="'.$this_article['id'].'"/>'.PHP_EOL;
echo '</form>'.PHP_EOL;
echo '<form method="post" id="additional_advert_image_form" enctype="multipart/form-data">'.PHP_EOL;
echo '<input type="file" id="additional_advert_image" name="additional_advert_image_form[]" class="form-control" style="display: none;" multiple/>'.PHP_EOL;
echo '<input  type="hidden" name="post_id" value="'.$this_article['id'].'"/>'.PHP_EOL;
echo '<input  type="text" name="image_id" value="Enter ID"/>'.PHP_EOL;
echo '<input  type="text" name="image_type" value="jpg"/>'.PHP_EOL;
echo '</form>'.PHP_EOL;
echo '</div><!-- end meta -->'.PHP_EOL;
echo '</div><!-- end blog-box -->'.PHP_EOL;
echo '<hr class="invis">'.PHP_EOL;
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '<hr class="invis">'.PHP_EOL;
echo '</div><!-- end col -->'.PHP_EOL;
echo '</div><!-- end col -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo 'function set_initial(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "initial": document.getElementById("initial_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-initial/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_title_for_url(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "titleForUrl": document.getElementById("title_for_url_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-title-for-url/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_type_string(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "typeString": document.getElementById("type_string_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-type-string/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_type(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "type": document.getElementById("type_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-type/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content2(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "content2": document.getElementById("content2_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content2/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content1(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "content1": document.getElementById("content1_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content1/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_content(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "content": document.getElementById("content_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-content/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function set_title(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/edit-article-title/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script>'.PHP_EOL;
echo 'function add_references(){'.PHP_EOL;
echo '        var reference_article_1 = document.getElementById("reference_article_1").value; '.PHP_EOL;
echo '        var reference_article_2 = document.getElementById("reference_article_2").value;'.PHP_EOL;
echo '        var reference_article_3 = document.getElementById("reference_article_3").value;'.PHP_EOL;
echo '        var reference_article_4 = document.getElementById("reference_article_4").value;'.PHP_EOL;
echo '        var reference_article_5 = document.getElementById("reference_article_5").value;'.PHP_EOL;

echo '        var reference_article_1_text_1 = document.getElementById("reference_article_1"); '.PHP_EOL;
echo '        var reference_article_2_text_1 = document.getElementById("reference_article_2");'.PHP_EOL;
echo '        var reference_article_3_text_1 = document.getElementById("reference_article_3");'.PHP_EOL;
echo '        var reference_article_4_text_1 = document.getElementById("reference_article_4");'.PHP_EOL;
echo '        var reference_article_5_text_1 = document.getElementById("reference_article_5");'.PHP_EOL;

echo '        var reference_article_1_text = reference_article_1_text_1.options[reference_article_1_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_2_text = reference_article_2_text_1.options[reference_article_2_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_3_text = reference_article_3_text_1.options[reference_article_3_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_4_text = reference_article_4_text_1.options[reference_article_4_text_1.selectedIndex].text;'.PHP_EOL;
echo '        var reference_article_5_text = reference_article_5_text_1.options[reference_article_5_text_1.selectedIndex].text;'.PHP_EOL;

echo '        document.getElementById("content2_box").value = "<div class=\'review_text_container\'>\n<div class=\'review_text\'> \n Ezek is érdekesek lehetnek: \n <ul style=\'line-height: 4em\'> \n <li><a href=\'/article/"+reference_article_1+"\'>"+reference_article_1_text+"</a></li> \n <li><a href=\'/article/"+reference_article_2+"\'>"+reference_article_2_text+"</a></li> \n <li><a href=\'/article/"+reference_article_3+"\'>"+reference_article_3_text+"</a></li> \n <li><a href=\'/article/"+reference_article_4+"\'>"+reference_article_4_text+"</a></li> \n <li><a href=\'/article/"+reference_article_5+"\'>"+reference_article_5_text+"</a></li> \n </ul> \n </div> \n</div>"; '.PHP_EOL;
echo '        set_content2();'.PHP_EOL;
echo ' };'.PHP_EOL;

echo '</script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo 'function deactivate(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/deactivate-article/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo 'function activate(){'.PHP_EOL;
echo 'var jsondata = { '.PHP_EOL;
echo '        "id": '.$this_article['id'].', '.PHP_EOL;
echo '        "title": document.getElementById("title_box").value '.PHP_EOL;
echo '    };   '.PHP_EOL;
echo ' '.PHP_EOL;
echo '    $.ajax({ '.PHP_EOL;
echo '        url: "/activate-article/", '.PHP_EOL;
echo '        method: "POST",         '.PHP_EOL;
echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
echo '        contentType: "json", '.PHP_EOL;
echo '        success: function(data){ '.PHP_EOL;
echo '        }, '.PHP_EOL;
echo '        error: function(errMsg) { '.PHP_EOL;
echo '            alert(errMsg);'.PHP_EOL;
echo '        } '.PHP_EOL;
echo '    }); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo 'function add_url_address(){'.PHP_EOL;
echo '        document.getElementById("title_for_url_box").value = document.getElementById("title_box").value.toLowerCase().replace(/\s+/g, \'-\').normalize(\'NFD\').replace(/[\u0300-\u036f]/g, ""); '.PHP_EOL;
echo ' };'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>'.PHP_EOL;
echo '<script>'.PHP_EOL;

echo '$(\'#advert_image\').on(\'change\',function(){'.PHP_EOL;
echo ' if($(this).val())'.PHP_EOL;
echo '  {'.PHP_EOL;
echo '   $(\'#advert_image_form\').submit();'.PHP_EOL;
echo '  }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(document).ready(function () {'.PHP_EOL;
echo '$(\'#advert_image_form\').submit(function(e) {'.PHP_EOL;
echo '    e.preventDefault();'.PHP_EOL;
echo '    $(\'#advert_image_loader\').html(\'<img src="http://bookingport.hu/images/loading.gif") }}" style="width: 36px; margin-left: 10px;" class="loader"/>\').attr(\'disabled\',\'disabled\');'.PHP_EOL;
echo '    $.ajax({'.PHP_EOL;
echo '        type : "POST",'.PHP_EOL;
echo '        url: \'/handle_image_upload/\','.PHP_EOL;
echo '        data : new FormData(this),'.PHP_EOL;
echo '        contentType: false,'.PHP_EOL;
echo '        cache: false,'.PHP_EOL;
echo '        processData:false,'.PHP_EOL;
echo '        success : onSaveSuccess'.PHP_EOL;
echo '    });'.PHP_EOL;
echo '    function onSaveSuccess(data)'.PHP_EOL;
echo '    {'.PHP_EOL;
echo '        data = $.trim(data);'.PHP_EOL;
echo '        $(\'#advert_image_loader\').html(\'<p style="color: green;">Success</p>\');'.PHP_EOL;
echo '        $(\'#advert_image_image\').after(\'<div class="uploaded_image"><img width="150px" height="150px" src="/images/properties/\'+data+\'"/></div>\');'.PHP_EOL;
echo '    }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(\'#additional_advert_image\').on(\'change\',function(){'.PHP_EOL;
echo ' if($(this).val())'.PHP_EOL;
echo '  {'.PHP_EOL;
echo '   $(\'#additional_advert_image_form\').submit();'.PHP_EOL;
echo '  }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '$(document).ready(function () {'.PHP_EOL;
echo '$(\'#additional_advert_image_form\').submit(function(e) {'.PHP_EOL;
echo '    e.preventDefault();'.PHP_EOL;
echo '    $(\'#advert_image_loader\').html(\'<img src="http://bookingport.hu/images/loading.gif") }}" style="width: 36px; margin-left: 10px;" class="loader"/>\').attr(\'disabled\',\'disabled\');'.PHP_EOL;
echo '    $.ajax({'.PHP_EOL;
echo '        type : "POST",'.PHP_EOL;
echo '        url: \'/handle_additional_image_upload/\','.PHP_EOL;
echo '        data : new FormData(this),'.PHP_EOL;
echo '        contentType: false,'.PHP_EOL;
echo '        cache: false,'.PHP_EOL;
echo '        processData:false,'.PHP_EOL;
echo '        success : onSaveSuccess'.PHP_EOL;
echo '    });'.PHP_EOL;
echo '    function onSaveSuccess(data)'.PHP_EOL;
echo '    {'.PHP_EOL;
echo '        data = $.trim(data);'.PHP_EOL;
echo '        $(\'#advert_image_loader\').html(\'<p style="color: green;">Success</p>\');'.PHP_EOL;
echo '    }'.PHP_EOL;
echo '});'.PHP_EOL;
echo '});'.PHP_EOL;
echo '</script>'.PHP_EOL;
get_foot();

}
if(preg_match('/category/', $request)){
 
$category  = explode("/",$request)[2];

$articles = $handler->conditional_select_from("article",array("type_string" => $category ));

$auth  = explode("/",$request)[4];
$logged_in = False;
if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
 $logged_in = True;
}
get_page_with_articles(True,$logged_in,$articles,False);
}
if(preg_match('/site-admin-route-secret\//', $request)){

$auth  = explode("/",$request)[2];

$logged_in = False;
if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
 $logged_in = True;
}
if(!$logged_in){
 die("Unauthorized!");
}

$meta_content = "";
get_head(False,$logged_in,array(),$meta_content);
$title = explode("/",$request)[2];
$articles = $handler->conditional_select_from("article",array());
$number_of_articles = count($articles);
$to_be_sorted = array();
$total_view_count = 0;
foreach( $articles as $article ){
 $to_be_sorted[$article['title']] = $article['view_count'];
 $total_view_count = $total_view_count + $article['view_count'];
}
$content = "<div><h4>Admin felület (".$number_of_articles.") (".$total_view_count.")</h4></div>";
$content = $content."<ul>";
asort($to_be_sorted);
foreach( array_reverse($to_be_sorted) as $key => $value ){
 $article_url = get_url_with_title($key);
 $content = $content."<li style='font-family: ProximaNova-Bold;margin-bottom: 10px; font-size: larger;' ><a href='/article/".$article_url."'>".$key."</a> (".$value.") <a style='color: blue' href='/edit/".$article_url."/057a39a1cf79eb4625c16c51eadd3283'>Szerk.</a> </li>";
}
$content = $content."</ul>";
get_page_content($content);
}
if(preg_match('/online-test/', $request)){
$title = explode("/",$request)[2];
$title = explode("?",$title)[0];
$auth  = explode("/",$request)[3];

$logged_in = False;
if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
 $logged_in = True;
}

$online_tests = $handler->conditional_select_from("online_tests",array("titleForUrl" => $title ));

$meta_content = '<meta property="og:image" content="/test_images/'.$online_tests[0]['id'].'/1.jpg">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:image:type" content="image/jpeg">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:image:width" content="200">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:image:height" content="200">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:title" content="'.$online_tests[0]['title'].'">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:url" content="/online-test/'.$online_tests[0]['titleForUrl'].'">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:type" content="article">'.PHP_EOL;
$meta_content = $meta_content.'<meta property="og:description" content="'.$online_tests[0]['initial'].'">'.PHP_EOL;

$GLOBALS['page_title'] = $online_tests[0]['title'];

get_head(False,$logged_in,$online_tests,$meta_content,$online_tests[0]['title']);

$view_count = $online_tests[0]['view_count'];
$handler = new DatabaseHandler;
$id = $online_tests[0]['id'];;
$updates = array("view_count" => $view_count + 1);
$handler->update_in_table("online_tests",$updates,"id",$id);
echo '<section class="section wb">'.PHP_EOL;
echo '<img src="/test_images/'.$online_tests[0]['id'].'/1.jpg" alt="'.$online_tests[0]['title'].'" style="display: none;">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;
echo '<div class="blog-box row">'.PHP_EOL;
if($logged_in){
 echo '<h1>'.$online_tests[0]['title'].'<a href="/edit/'.$online_tests[0]['titleForUrl'].'">szerkesztem</a></h1>';
}
if(!$logged_in){
 echo '<h1>'.$online_tests[0]['title'].'</h1>';
}
echo '<div class="fb-share-button" data-href="http://'.$GLOBALS['project_name'].'.com/article/'.$title.'" data-layout="button_count" data-size="large"><a target="_blank" href="http://'.$GLOBALS['project_name'].'.com/article/'.$title.'" class="fb-xfbml-parse-ignore">Megosztás</a></div>';
echo '<br><p>';
echo "Hozzáadva: ".full_date($online_tests[0]['created'])." <italic>Megtekintve:</italic> ".$online_tests[0]['view_count'];
echo '</p>';
echo '<div class="blog-meta big-meta" style="max-width: 100%; text-align: justify;">';
echo '<p style="font-size: large;line-height: 2em; color: black; font-weight: bold;">'.$online_tests[0]['initial'].'</p>';

echo '<div id="test_div">';
get_test_option_table(1,$online_tests);
get_test_option_table(2,$online_tests);
get_test_option_table(3,$online_tests);
get_test_option_table(4,$online_tests);
get_test_option_table(5,$online_tests);
get_test_option_table(6,$online_tests);
get_test_option_table(7,$online_tests);
get_test_option_table(8,$online_tests);
get_test_option_table(9,$online_tests);
get_test_option_table(10,$online_tests);
echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="evaluate_test()">Kiértékelem <i class="fa fa-envelope-open-o"></i></button>';
echo '</div><!-- test_div -->';
echo '</div><!-- end meta -->';
echo '</div><!-- end blog-box -->';
echo '<hr class="invis">';
###### Hozzászólások #################
echo '<div id="comments_bottom_id" class="comments_bottom" style="padding: 0 !important;margin-left: -15px;">';
echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">';
$comments = $handler->conditional_select_from("article_comments",array("active_flag" => 1, "comment_article_id" => $online_tests[0]['id'] ));
$number_of_comments = count($comments);
echo 'Hozzászólások ('.$number_of_comments.')';
echo '</div><br>';
echo "<div>";
foreach($comments as $comment){
 echo "<div style='padding-left: 10px; margin-top: 10px;margin-bottom: 10px;background-color: #f4f4f4;' ><span style='color: #1bf;'>".$comment['comment_name']."</span> <span>".date_format(date_create($comment['created_at']), 'Y.m.d h:m')." </span> <br><p style='padding-left: 5px;' >".$comment['comment_content']."</p></div>";
}
echo "</div>";
echo '<div id="comment_from_user">';
echo ' <input type="text" style="margin-bottom: 10px" class="form-control" id="comment_email_address" placeholder="E-mail cím">';
echo ' <input type="text" style="margin-bottom: 10px" class="form-control" id="comment_user_name" placeholder="Név">';
echo ' <textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="comment_user_message" placeholder="Hozzászólás"></textarea>';
echo ' <div style="text-align: right;">';
echo '  <button type="submit" class="btn btn-primary" onclick="send_comment()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>';
echo ' </div>';
echo '</div>';


        echo '</div><br>';
###### Spanyolimádóknak #################
        echo '<div class="article_bottom" style="padding: 0 !important;margin-left: -15px;">';
        echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">';
        echo 'Spanyolimádóknak';
        echo '</div>';
        echo '<br>';
        $articles = array_reverse($handler->conditional_select_from("article",array("active_article" => 1)));

        shuffle($articles);
        $article1 = $articles[0];
        $article2 = $articles[1];
        $article3 = $articles[2];
        echo '<div class="row">';

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">';
        echo '<a href="/article/'.$article1['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article1['id'].'/1.jpg" alt="'.$article1['title'].'" class="img-fluid float-left"></a>';
        echo '<div style="clear:both"></div>';
        echo ' <div style="text-align: left">';
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article1['type'].'</div>';
        echo '<a style="color: black" href="/article/'.$article1['titleForUrl'].'" title="">'.$article1['title']."</a>";
        echo '</div>';
        echo '</div>';

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">';
        echo '<a href="/article/'.$article2['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article2['id'].'/1.jpg" alt="'.$article2['title'].'" class="img-fluid float-left"></a>';
        echo '<div style="clear:both"></div>';
        echo ' <div style="text-align: left">';
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article2['type'].'</div>';
        echo '<a style="color: black" href="/article/'.$article2['titleForUrl'].'" title="">'.$article2['title']."</a>";
        echo '</div>';
        echo '</div>';

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">';
        echo '<a href="/article/'.$article3['titleForUrl'].'" title=""><img style="width: 100%; height: 200px;" src="/images/'.$article3['id'].'/1.jpg" alt="'.$article3['title'].'" class="img-fluid float-left"></a>';
        echo '<div style="clear:both"></div>';
        echo ' <div style="text-align: left">';
        echo ' <div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.$article3['type'].'</div>';
        echo '<a style="color: black" href="/article/'.$article3['titleForUrl'].'" title="">'.$article3['title']."</a>";
        echo ' </div>';
        echo '</div>';

        echo '</div>';
        echo '</div>';

###### Partnereink írták #################
        echo '<div class="article_bottom" style="margin-top: 10px; padding: 0 !important;margin-left: -15px;">'.PHP_EOL;
        echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">'.PHP_EOL;
        echo 'Partnereink írták '.PHP_EOL;
        echo '</div>'.PHP_EOL;
        echo '<br>'.PHP_EOL;
        $articles = array_reverse($imulat_handler->conditional_select_from("blog_entry",array("locale" => "hu")));
        shuffle($articles);
        $article1 = $articles[1];
        $article2 = $articles[2];
        $article3 = $articles[3];
        echo '<div class="row">'.PHP_EOL;

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;

        $image_id = $article1['image1'];
	if(is_null($image_id)){
		$image_id = $article1['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article1['image3'];
	}

        echo '<a href="https://imulat.com/hu/english/blog/'.$article1['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article1['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article1['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article1['titleForUrl'].'" title="">'.$article1['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        $image_id = $article2['image1'];
	if(is_null($image_id)){
		$image_id = $article2['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article2['image3'];
	}
        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="https://imulat.com/hu/english/blog/'.$article2['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article2['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article2['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article2['titleForUrl'].'" title="">'.$article2['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        $image_id = $article3['image1'];
	if(is_null($image_id)){
		$image_id = $article3['image2'];
	}
	if(is_null($image_id)){
		$image_id = $article3['image3'];
	}

        echo '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: center;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 18px;">'.PHP_EOL;
        echo '<a href="https://imulat.com/hu/english/blog/'.$article3['titleForUrl'].'" title=""><img style="image-orientation: from-image;width: 100%; height: 200px;" src="https://imulat.com/images/blog/'.$image_id.'.jpg" alt="'.$article3['title'].'" class="img-fluid float-left"></a>'.PHP_EOL;
        echo '<div style="clear:both"></div>'.PHP_EOL;
        echo '<div style="text-align: left">'.PHP_EOL;
        echo '<div style="font-size: 12px; text-transform: uppercase; color: rgb(255, 1, 64)">'.category_converter($article3['category']).'</div>'.PHP_EOL;
        echo ' <a style="color: black" href="https://imulat.com/hu/english/blog/'.$article3['titleForUrl'].'" title="">'.$article3['title']."</a>";
        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;

        echo '</div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;
###### Partnereink írták vége #################
        echo '</div><!-- end blog-list -->'.PHP_EOL;
        echo '</div><!-- end page-wrapper -->'.PHP_EOL;
        echo '<hr class="invis">'.PHP_EOL;
        echo '</div><!-- end col -->'.PHP_EOL;
        get_sidebar();
        echo '</div><!-- end col -->'.PHP_EOL;
        echo '</div><!-- end row -->'.PHP_EOL;
        echo '</div><!-- end container -->'.PHP_EOL;
        echo '</section>'.PHP_EOL;
        get_foot();
        echo '<script>'.PHP_EOL;
        echo 'function evaluate_test(){'.PHP_EOL;
        echo 'var jsondata = { '.PHP_EOL;


        for($i = 1; $i < 11; ++$i){
         $test_number_id = $i;
         $second = "target_word_".$test_number_id."_a";
         $third = "target_word_".$test_number_id."_b";
         $fourth = "target_word_".$test_number_id."_c";
         echo '        "'.$second.'":   document.getElementById("checkbox_'.$second.'").checked, '.PHP_EOL;
         echo '        "'.$third.'":   document.getElementById("checkbox_'.$third.'").checked, '.PHP_EOL;
         echo '        "'.$fourth.'":   document.getElementById("checkbox_'.$fourth.'").checked, '.PHP_EOL;
        }
        echo '        "online_test_id": '.$id.' '.PHP_EOL;
        echo '    };   '.PHP_EOL;
        echo '    $.ajax({ '.PHP_EOL;
        echo '        url: "/evaluate-test/", '.PHP_EOL;
        echo '        method: "POST",'.PHP_EOL;
        echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
        echo '        contentType: "json", '.PHP_EOL;
        echo '        success: function(data){ '.PHP_EOL;
        echo '         document.getElementById("test_div").innerHTML = "<h2 style=\'color: black\' >A tesztet kiértékeltem neked! Íme: </h2>"+data; '.PHP_EOL;
        echo "         window.scrollTo({top: 0, behavior: 'smooth'});";
        echo '        }, '.PHP_EOL;
        echo '        error: function(errMsg) { '.PHP_EOL;
        echo '         document.getElementById("comment_from_user").innerHTML = "<span style=\'color: red\' >Nem sikerült kiértékelni...</span>"; '.PHP_EOL;
        echo "         window.scrollTo({top: 0, behavior: 'smooth'});";
        echo '        } '.PHP_EOL;
        echo '    }); '.PHP_EOL;
        echo ' };'.PHP_EOL;
        echo '</script>'.PHP_EOL;

        echo '<script>'.PHP_EOL;
        echo 'function send_comment(){'.PHP_EOL;
        echo 'var jsondata = { '.PHP_EOL;
        echo '        "email_address":       document.getElementById("comment_email_address").value, '.PHP_EOL;
        echo '        "user_message":        document.getElementById("comment_user_message").value, '.PHP_EOL;
        echo '        "user_name":           document.getElementById("comment_user_name").value, '.PHP_EOL;
        echo '        "data_type_from_site": 0,'.PHP_EOL;
        echo '        "comment_article_id": '.$id.' '.PHP_EOL;
        echo '    };   '.PHP_EOL;
        echo '    $.ajax({ '.PHP_EOL;
        echo '        url: "/send-message-from-site/", '.PHP_EOL;
        echo '        method: "POST",'.PHP_EOL;
        echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
        echo '        contentType: "json", '.PHP_EOL;
        echo '        success: function(data){ '.PHP_EOL;
        echo '         document.getElementById("comment_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Átnézzünk hozzászólásodat.</span>"; '.PHP_EOL;
        echo '        }, '.PHP_EOL;
        echo '        error: function(errMsg) { '.PHP_EOL;
        echo '         document.getElementById("comment_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Átnézzünk hozzászólásodat.</span>"; '.PHP_EOL;
        echo '        } '.PHP_EOL;
        echo '    }); '.PHP_EOL;
        echo ' };'.PHP_EOL;
        echo '</script>'.PHP_EOL;
}
if(preg_match('/article/', $request)){
        $title = explode("/",$request)[2];
        $title = explode("?",$title)[0];
        $auth  = explode("/",$request)[3];

        $logged_in = False;
        if(strcmp($auth, "057a39a1cf79eb4625c16c51eadd3283") == 0){
         $logged_in = True;
        }

        $articles = $handler->conditional_select_from("article",array("titleForUrl" => $title ));

        $meta_content = '<meta property="og:image" content="http://www.'.$GLOBALS['project_name'].'.com/images/'.$articles[0]['id'].'/1.jpg"> <meta property="og:image:type" content="image/jpeg"> <meta property="og:image:width" content="200"> <meta property="og:image:height" content="200"> <meta property="og:title" content="'.$articles[0]['title'].'"> <meta property="og:url" content="http://www.'.$GLOBALS['project_name'].'.com/article/'.$articles[0]['titleForUrl'].'">  <meta property="og:type" content="article"> <meta property="og:description" content="'.$articles[0]['initial'].'">'.PHP_EOL;

        $GLOBALS['page_title'] = $articles[0]['title'];

        get_head(False,$logged_in,$articles,$meta_content,$articles[0]['title']);

        $view_count = $articles[0]['view_count'];
        $handler = new DatabaseHandler;
        $id = $articles[0]['id'];;
        $updates = array("view_count" => $view_count + 1);
        $handler->update_in_table("article",$updates,"id",$id);
        echo '<section class="section wb">'.PHP_EOL;
        echo '<div class="container">'.PHP_EOL;
        echo '<div class="row">'.PHP_EOL;
        echo '<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
        echo '<div class="page-wrapper">'.PHP_EOL;
        echo '<div class="blog-list clearfix">'.PHP_EOL;
        echo '<div class="blog-box row">'.PHP_EOL;

        if($logged_in){
         echo '<h1>'.$articles[0]['title'].'<a href="/edit/'.$articles[0]['titleForUrl'].'">szerkesztem</a></h1>'.PHP_EOL;
        }
        if(!$logged_in){
         echo '<h1>'.$articles[0]['title'].'</h1>'.PHP_EOL;
        }
        echo '<div class="fb-share-button" data-href="http://'.$GLOBALS['project_name'].'.com/article/'.$title.'" data-layout="button_count" data-size="large"><a target="_blank" href="http://'.$GLOBALS['project_name'].'.com/article/'.$title.'" class="fb-xfbml-parse-ignore">Megosztás</a></div>'.PHP_EOL;
         echo '<br><p>'.PHP_EOL;
         echo "Hozzáadva: ".full_date($articles[0]['created'])." <italic>Megtekintve:</italic> ".$articles[0]['view_count'];
         echo '</p>'.PHP_EOL;
        echo '<div class="blog-meta big-meta" style="max-width: 100%; text-align: justify;">'.PHP_EOL;
        echo '<p style="font-size: large;    line-height: 2em; color: black; font-weight: bold;">'.$articles[0]['initial'].'</p>'.PHP_EOL;
        echo '<img style="margin-right: 5px;width: 100%;height: 30em;" src="/images/'.$articles[0]['id'].'/1.jpg" alt="" class="img-fluid">'.PHP_EOL;
        echo '<p style="font-size: large; color: black;    line-height: 2em;" >'.$articles[0]['content'].'</p>'.PHP_EOL;
        echo '<p style="font-size: large; color: black;    line-height: 2em;" >'.$articles[0]['content1'].'</p>'.PHP_EOL;
        echo '<p style="font-size: large; color: black;    line-height: 2em;" >'.$articles[0]['content2'].'</p>'.PHP_EOL;
        echo '</div><!-- end meta -->'.PHP_EOL;
        echo '</div><!-- end blog-box -->'.PHP_EOL;
        echo '<hr class="invis">'.PHP_EOL;

###### Hozzászólások #################
        echo '<div id="comments_bottom_id" class="comments_bottom" style="padding: 0 !important;margin-left: -15px;">'.PHP_EOL;
        echo '<div style="text-align: left;font-family: ProximaNova-Bold, helvetica, Arial, sans-serif;font-size: 22px;">'.PHP_EOL;
        $comments = $handler->conditional_select_from("article_comments",array("active_flag" => 1, "comment_article_id" => $articles[0]['id'] ));
        $number_of_comments = count($comments);
        echo 'Hozzászólások ('.$number_of_comments.')'.PHP_EOL;
        echo '</div><br>'.PHP_EOL;
        echo "<div>";
        foreach($comments as $comment){
           echo "<div style='padding-left: 10px; margin-top: 10px;margin-bottom: 10px;background-color: #f4f4f4;' ><span style='color: #1bf;'>".$comment['comment_name']."</span> <span>".date_format(date_create($comment['created_at']), 'Y.m.d h:m')." </span> <br><p style='padding-left: 5px;' >".$comment['comment_content']."</p></div>";
        }
        echo "</div>";
        echo '<div id="comment_from_user">'.PHP_EOL;
        echo ' <input type="text" style="margin-bottom: 10px" class="form-control" id="comment_email_address" placeholder="E-mail cím">'.PHP_EOL;
        echo ' <input type="text" style="margin-bottom: 10px" class="form-control" id="comment_user_name" placeholder="Név">'.PHP_EOL;
        echo ' <textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="comment_user_message" placeholder="Hozzászólás"></textarea>'.PHP_EOL;
        echo ' <div style="text-align: right;">'.PHP_EOL;
        echo '  <button type="submit" class="btn btn-primary" onclick="send_comment()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>'.PHP_EOL;
        echo ' </div>'.PHP_EOL;
        echo '</div>'.PHP_EOL;
        echo '</div><br>'.PHP_EOL;

        get_bottom_part();

        echo '</div><!-- end blog-list -->'.PHP_EOL;
        echo '</div><!-- end page-wrapper -->'.PHP_EOL;
        echo '<hr class="invis">'.PHP_EOL;
        echo '</div><!-- end col -->'.PHP_EOL;
        get_sidebar();
        echo '</div><!-- end col -->'.PHP_EOL;
        echo '</div><!-- end row -->'.PHP_EOL;
        echo '</div><!-- end container -->'.PHP_EOL;

        echo '</section>'.PHP_EOL;

        get_foot();
        echo '<script>'.PHP_EOL;
        echo 'function calculate_height(){'.PHP_EOL;
        echo ' var father_height = parseInt(document.getElementById("father_height").value);'.PHP_EOL;
        echo ' var mom_height = parseInt(document.getElementById("mom_height").value);'.PHP_EOL;
        echo ' var calculator_sex = parseInt(document.getElementById("calculator_sex").value);'.PHP_EOL;
        echo ' if(calculator_sex == 0) {'.PHP_EOL;
        echo '  document.getElementById("calculator_result").innerHTML = "<span style=\'color: red\' >Válassz nemet!</span>"; '.PHP_EOL;
        echo ' }'.PHP_EOL;
        echo '  if(calculator_sex == 1) {'.PHP_EOL;
        echo '   child_height = ( mom_height + father_height ) / 2 + 6.5;'.PHP_EOL;
        echo '   document.getElementById("calculator_result").innerHTML = "<span style=\'color: green\' >A gyerek várható magassága: "+child_height+".</span>"; '.PHP_EOL;
        echo '   }'.PHP_EOL;
        echo '   if(calculator_sex == 2) {'.PHP_EOL;
        echo '    child_height = ( mom_height + father_height ) / 2 - 6.5;'.PHP_EOL;
        echo '    document.getElementById("calculator_result").innerHTML = "<span style=\'color: green\' >A gyerek várható magassága: "+child_height+".</span>"; '.PHP_EOL;
        echo '   }'.PHP_EOL;
        echo '  }'.PHP_EOL;
        echo '</script>'.PHP_EOL;
        echo '<script>'.PHP_EOL;
        echo 'function send_comment(){'.PHP_EOL;
        echo 'var jsondata = { '.PHP_EOL;
        echo '        "email_address":       document.getElementById("comment_email_address").value, '.PHP_EOL;
        echo '        "user_message":        document.getElementById("comment_user_message").value, '.PHP_EOL;
        echo '        "user_name":           document.getElementById("comment_user_name").value, '.PHP_EOL;
        echo '        "data_type_from_site": 0,'.PHP_EOL;
        echo '        "comment_article_id": '.$id.' '.PHP_EOL;
        echo '    };   '.PHP_EOL;
        echo '    $.ajax({ '.PHP_EOL;
        echo '        url: "/send-message-from-site/", '.PHP_EOL;
        echo '        method: "POST",'.PHP_EOL;
        echo '        data: JSON.stringify({ Data: jsondata }), '.PHP_EOL;
        echo '        contentType: "json", '.PHP_EOL;
        echo '        success: function(data){ '.PHP_EOL;
        echo '         document.getElementById("comment_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Átnézzünk hozzászólásodat.</span>"; '.PHP_EOL;
        echo '        }, '.PHP_EOL;
        echo '        error: function(errMsg) { '.PHP_EOL;
        echo '         document.getElementById("comment_from_user").innerHTML = "<span style=\'color: green\' >Elküldve... Átnézzünk hozzászólásodat.</span>"; '.PHP_EOL;
        echo '        } '.PHP_EOL;
        echo '    }); '.PHP_EOL;
        echo ' };'.PHP_EOL;
        echo '</script>'.PHP_EOL;
}

if(preg_match('/contact-us/', $request)){
$logged_in = False;
$meta_content = ''.PHP_EOL;
get_head(False,$logged_in,array(),$meta_content);
echo '<section class="section wb">'.PHP_EOL;
echo '<div class="container">'.PHP_EOL;
echo '<div class="row">'.PHP_EOL;
echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
echo '<div class="page-wrapper">'.PHP_EOL;
echo '<div class="blog-list clearfix">'.PHP_EOL;
echo '<h3>Kapcsolat</h3>'.PHP_EOL;
echo '<div>Természetesen van <a href="https://www.facebook.com/Betufront-101826948360331" style="color: black; text-decoration: underline!important;">Facebook oldalunk</a> is, de a legegyszerűbben online veheted fel a kapcsolatot velünk. Ha fel szeretnéd velünk venni a kapcsolatot használd a következő kapcsolattartási mezőket és küldj nekünk üzenetet.</div><br>'.PHP_EOL;
echo '<div style="float: right" >2020. szeptember - Az üzemeltető</div><br>'.PHP_EOL;
echo '<h3>Kapcsolat</h3>'.PHP_EOL;
echo '<div id="message_from_user">'.PHP_EOL;
echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="email_address" placeholder="E-mail cím">'.PHP_EOL;
echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="user_name" placeholder="Név">'.PHP_EOL;
echo '<textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="user_message" placeholder="Üzenet"></textarea>'.PHP_EOL;
echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="send_message()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>'.PHP_EOL;
echo '</div>'.PHP_EOL;
echo '</div><!-- end blog-list -->'.PHP_EOL;
echo '</div><!-- end page-wrapper -->'.PHP_EOL;
echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
echo '</div><!-- end row -->'.PHP_EOL;
echo '</div><!-- end container -->'.PHP_EOL;
echo '</section>'.PHP_EOL;
get_foot();
}

if(preg_match('/operation/', $request)){
        $logged_in = False;
        $meta_content = ''.PHP_EOL;
        get_head(False,$logged_in,array(),$meta_content);
        echo '<section class="section wb">'.PHP_EOL;
        echo '<div class="container">'.PHP_EOL;
        echo '<div class="row">'.PHP_EOL;
        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
        echo '<div class="page-wrapper">'.PHP_EOL;
        echo '<div class="blog-list clearfix">'.PHP_EOL;
        echo '<h3>A '.$GLOBALS['project_name'].'.com működése</h3>'.PHP_EOL;
        echo '<div>A '.$GLOBALS['project_name'].'.com-t azért hoztam létre, hogy az internet egy hasznosabb világgá váljon. Sok haszontalan, felesleges információt tartalmazó oldal van már a weben a spanyol nyelv tanulásával kapcsolatban és emiatt éreztem szükségét egy ilyen információs tár létrehozásának. Sokan dolgozunk az oldal kinézetén, tartalmán és népszerűsítésén. Ha fel szeretnéd velünk venni a kapcsolatot használd a következő kapcsolattartási mezőket és küldj nekünk üzenetet! Cselekedj hasonlóan, ha kérdésed van Spanyolországgal kapcsolatban, vagy esetleg Dél-Amerikába szeretnél utazni.</div><br>'.PHP_EOL;
        echo '<div>Bizonyos illusztrációk a <a href="https://www.pexels.com/">pexels.com</a>-ról és a <a href="https://pixabay.com/">pixabay</a>-ről származnak.</div><br>'.PHP_EOL;
        echo '<div style="float: right" >2020. szeptember - Az üzemeltető</div><br>'.PHP_EOL;
     echo '<h3>Kapcsolat</h3>'.PHP_EOL;
     echo '<div id="message_from_user">'.PHP_EOL;
     echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="email_address" placeholder="E-mail cím">'.PHP_EOL;
     echo '<input type="text" style="margin-bottom: 10px" class="form-control" id="user_name" placeholder="Név">'.PHP_EOL;
     echo '<textarea style="margin-bottom: 10px; resize: none;" rows=4 class="form-control" id="user_message" placeholder="Üzenet"></textarea>'.PHP_EOL;
     echo '<button style="float: right" type="submit" class="btn btn-primary" onclick="send_message()">Elküldöm <i class="fa fa-envelope-open-o"></i></button>'.PHP_EOL;
     echo '</div>'.PHP_EOL;
        echo '</div><!-- end blog-list -->'.PHP_EOL;
        echo '</div><!-- end page-wrapper -->'.PHP_EOL;
        echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
        echo '</div><!-- end row -->'.PHP_EOL;
        echo '</div><!-- end container -->'.PHP_EOL;
        echo '</section>'.PHP_EOL;
        get_foot();
}
if(preg_match('/terms-and-conditions/', $request)){

        $logged_in = False;
        $meta_content = ''.PHP_EOL;
        get_head(False,$logged_in,array(),$meta_content);

        echo '<section class="section wb">'.PHP_EOL;
        echo '<div class="container">'.PHP_EOL;
        echo '<div class="row">'.PHP_EOL;
        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">'.PHP_EOL;
        echo '<div class="page-wrapper">'.PHP_EOL;
        echo '<div class="blog-list clearfix">'.PHP_EOL;
        echo '<h3> A használat feltételei</h3>'.PHP_EOL;
        echo '<h4> A '.$GLOBALS['project_name'].'.com internetes oldalainak használati feltételei és jogi szabályozása ("Feltételek")</h4><div> A '.$GLOBALS['project_name'].'.com fenntartói és kiadói ("Kiadók") engedélyezik a '.$GLOBALS['project_name'].'.com domain alatti oldalakra látógató felhasználók ("Felhasználók") számára az utóbbiakon keresztül megjelenô anyagok letöltését és tanulmányozását, az alábbi feltételekkel; az oldalak felhasználói ("Felhaszálók") pedig az oldalak megtekintésével és az oldalakon keresztül elérhetô szolgáltatások ("Szolgáltatások") használatával elfogadják és magukra nézve kötelezônek fogadják el az alábbi feltételeket és irányelveket. </div>'.PHP_EOL;
        echo '<br><h3> Az oldalak használata.</h3><div> A '.$GLOBALS['project_name'].'.com oldalain található anyagokat a Felhasználó nem jogosult módosítani, újra elôállítani, nyilvánosan közzétenni, elôadni, terjeszteni, illetve egyéb módon a nyilvánosságot szolgáló vagy kereskedelmi célzattal felhasználni,kivéve az e dokumentumban kifejezetten engedélyezett módon és formában.A jelen Feltételek értelmében ezen anyagok más Internetes oldalakon, illetve számítógépes hálózati rendszerekben való bármilyen célú felhasználása, vagy egyéb elektronikus vagy nem-elektronikus módon történô teljes vagy részleteiben történô reprodukálása csak a Kiadó írásbeli engedélyének birtokában lehetséges.</div> '.PHP_EOL;
        echo '<br><h3>Szavatosság és Jótállás kizárása.</h3><div>A JELEN OLDALAKON SZOLGÁLTATOTT ANYAGOK ÖNMAGUKBAN, JÓTÁLLÁS VAGY GARANCIA VÁLLALÁSA NÉLKÜL KERÜLNEK KÖZLÉSRE. A '.$GLOBALS['project_name'].'.com ÉS A MEGJELENT ANYAGOK SZERZŐI KIFEJEZETTEN ELUTASÍTANAK BÁRMIFÉLE FELELŐSSÉGVÁLLALÁST EZEN ANYAGOKÉRT, IDEÉRTVE EGY ADOTT CÉLNAK VALÓ MEGFELELÉSSEL VAGY A SZELLEMI ALKOTÁSOKKAL KAPCSOLATOS FELELŐSSÉGET. A '.$GLOBALS['project_name'].'.com nem garantálja, hogy a jelen Oldalakon található anyagok pontosak és teljesek. A '.$GLOBALS['project_name'].'.com oldalain fellelhetô anyagok esetenként lehetnek idejét múltak, amelyek felújítására és aktualizálására Kiadók kötelezettséget nem vállalnak.  </div> <br> <div> <h3>Jogok visszavonása.</h3> </div> <br> <div> A '.$GLOBALS['project_name'].'.com üzemeltetôi fenntartják maguknak a jogot, hogy visszavonják vagy megtagadják a hozzáférést a '.$GLOBALS['project_name'].'.com bizonyos vagy akár összes szolgáltatásához olyan személyektôl akik meggyôzôdésük szerint megsértik vagy megsérteni tervezik a felsorolt feltételeket vagy a megállapodás bármilyen más pontját.  </div> <br> <div> A felhasználási szerződés és feltételek kifejezett megszegését jelenti - nem kizárólagos jellegel - az Kiadók vagy megbízott partnereik által az oldalba ágyazott hirdetések vagy reklámok blokkolása, megjelenésük megakadályozása, áthelyezésük vagy hatékonyságuk csökkentése bármilyen módszerrel.  Egyéb rendelkezések.  </div> <br> <div> Kiadók jogosultak a fenti Feltételek tartalmát naprakész állapotba hozni, azt bármikor módosítani. Ezért Felhasználók számára tanácsoljuk jelen oldalak idôrôl idôre történô ismételt áttanulmányozását, hogy mindig az idôszerű, kötelezô érvényű információk birtokában legyenek. A jelen Rendelkezések egyes szabályai az '.$GLOBALS['project_name'].'.com egyes oldalain megjelenô helyi szabályozás pontjainak tekintetében ellentmondásos esetben érvényüket veszíthetik.</div>'.PHP_EOL;
        echo '</div><!-- end blog-list -->'.PHP_EOL;
        echo '</div><!-- end page-wrapper -->'.PHP_EOL;
        echo '</div><!-- end col-lg-12 -->'.PHP_EOL;
        echo '</div><!-- end row -->'.PHP_EOL;
        echo '</div><!-- end container -->'.PHP_EOL;
        echo '</section>'.PHP_EOL;
        get_foot();
}
if(preg_match('/xml_sitemap/', $request)){
     $handler = new DatabaseHandler;
     header('Content-type: text/xml');

     $articles = array_reverse($handler->select_all_from("article"));
     echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
     echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> '.PHP_EOL;
     foreach($articles as $article){
      echo '  <url>'.PHP_EOL;
      echo '    <loc>http://www.'.$GLOBALS['project_name'].'.com/article/'.$article['titleForUrl'].'</loc>'.PHP_EOL;
      echo '    <lastmod>'.date_format(date_create($article['created']), 'Y-m-d').'</lastmod>'.PHP_EOL;
      echo '  </url>'.PHP_EOL;
     }
     echo '</urlset>'.PHP_EOL;

}


