<?php 
ignore_user_abort(true);
error_reporting(0);
set_time_limit(0);

function file_getcontent_with_proxy($urltoget) {
    $url = $urltoget;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // read more about HTTPS 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 10; IN2011 Build/QKQ1.191222.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/84.0.4147.89 Mobile Safari/537.36 GSA/11.20.15.21.arm64');
    $curl_scraped_page = curl_exec($ch);
    curl_close($ch);
    return $curl_scraped_page;
}


$urls = array (
  array ("ricardo8596","https://kandillihamit.pserver.ru/ricardo8596/index.php"),
  array ("alaramorgennn18","https://alaramorgennn18.euserverpro.xyz/?name=alaramor"),
  array ("alaramorgennn18","https://alaramorgennn18.euserverpro.xyz/?name=alaramorgen"),
  array ("alaramorgennn18","https://alaramorgennn18.euserverpro.xyz/?name=myalara"),
  array ("alexsis85more","https://alexsis85more.euserverpro.xyz/?name=alexsismore"),
  array ("alexsis85more","https://alexsis85more.euserverpro.xyz/?name=myalemore"),
  array ("alexsissreyna","https://alexsissreyna.euserverpro.xyz/?name=alexsismusic"),
  array ("alexsissreyna","https://alexsissreyna.euserverpro.xyz/?name=alexsisreyna"),
  array ("alexsissreyna","https://alexsissreyna.euserverpro.xyz/?name=alreynamusic"),
  array ("brenda16harley","https://brenda16harley.euserverpro.xyz/?name=brendathemusic"),
  array ("brenda16harley","https://brenda16harley.euserverpro.xyz/?name=brenharlimusic"),
  array ("brenda16harley","https://brenda16harley.euserverpro.xyz/?name=harleymobmusic"),
  array ("dannieddrakke","https://dannieddrakke.euserverpro.xyz/?name=dandrakemusic"),
  array ("dannieddrakke","https://dannieddrakke.euserverpro.xyz/?name=danniedrake"),
  array ("dannieddrakke","https://dannieddrakke.euserverpro.xyz/?name=danniedrakemusic"),
  array ("darcyemma11","https://darcyemma11.euserverpro.xyz/?name=emdarcymusic"),
  array ("darcyemma11","https://darcyemma11.euserverpro.xyz/?name=emmadarcymusic"),
  array ("darcyemma11","https://darcyemma11.euserverpro.xyz/?name=myemmadarcy"),
  array ("dianagustavv18","https://dianagustavv18.euserverpro.xyz/?name=diagustav"),
  array ("dianagustavv18","https://dianagustavv18.euserverpro.xyz/?name=dianagustav"),
  array ("dianagustavv18","https://dianagustavv18.euserverpro.xyz/?name=dianagustavmusic"),
  array ("eldaamingger","https://eldaamingger.euserverpro.xyz/?name=eldaminger"),
  array ("eldaamingger","https://eldaamingger.euserverpro.xyz/?name=eldammusic"),
  array ("eldaamingger","https://eldaamingger.euserverpro.xyz/?name=mingermusic"),
  array ("foxterrariya","https://foxterrariya.euserverpro.xyz/?name=ariyafoxter"),
  array ("foxterrariya","https://foxterrariya.euserverpro.xyz/?name=ariyamusic"),
  array ("foxterrariya","https://foxterrariya.euserverpro.xyz/?name=foxtermusic"),
  array ("lainagustavv","https://lainagustavv.euserverpro.xyz/?name=laigustav"),
  array ("lainagustavv","https://lainagustavv.euserverpro.xyz/?name=lainagustav"),
  array ("lainagustavv","https://lainagustavv.euserverpro.xyz/?name=lainamusic"),
  array ("natalieadixonn","https://natalieadixonn.euserverpro.xyz/?name=dixdixmusic"),
  array ("natalieadixonn","https://natalieadixonn.euserverpro.xyz/?name=natadixmusic"),
  array ("natalieadixonn","https://natalieadixonn.euserverpro.xyz/?name=natadixon"),
  array ("rairaravensis","https://rairaravensis.euserverpro.xyz/?name=rairar"),
  array ("rairaravensis","https://rairaravensis.euserverpro.xyz/?name=rairaravensis"),
  array ("rairaravensis","https://rairaravensis.euserverpro.xyz/?name=raravensis"),
  array ("rickyyjoradd","https://rickyyjoradd.euserverpro.xyz/?name=ricjorad"),
  array ("rickyyjoradd","https://rickyyjoradd.euserverpro.xyz/?name=rickyjora"),
  array ("rickyyjoradd","https://rickyyjoradd.euserverpro.xyz/?name=rickyjorad"),
  array ("martincr","https://kandillihamit.pserver.ru/martincr/index.php"),
  array ("martincr","https://kandillihamit.pserver.ru/martincr/index.php"),
  array ("martincr","https://kandillihamit.pserver.ru/martincr/index.php"),
  array ("martincr","https://kandillihamit.pserver.ru/martincr/index.php"),
  array ("martincr","https://kandillihamit.pserver.ru/martincr/index.php"),
  array ("mersharo","https://kandillihamit.pserver.ru/mersharo/index.php"),
  array ("mersharo","https://kandillihamit.pserver.ru/mersharo/index.php"),
  array ("mersharo","https://kandillihamit.pserver.ru/mersharo/index.php"),
  array ("mersharo","https://kandillihamit.pserver.ru/mersharo/index.php"),
  array ("mersharo","https://kandillihamit.pserver.ru/mersharo/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alaradilrapp","https://kandillihamit.pserver.ru/alaradilrapp/index.php")
    
   
);
$st = count($urls);
//echo "Start ht";
while ( 1 ){
    $dt = 0;
    foreach($urls as $key=>$val){
        $name = $val[0];
        $url = $val[1];
        $res = file_getcontent_with_proxy($url);
        if($res){
        $dt += 1;
        }else{
        file_put_contents("php://stderr", "$url error \n");
        }
    }
    //echo "sleeping<br>";
    file_put_contents("php://stderr", "Tot:$st - Succes:$dt\n");
    sleep(0);
}
?>
