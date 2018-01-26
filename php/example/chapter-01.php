<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'f0ee00bdba1460f67f9e0b4991422097
';
$access_token  = 'ozGfNAi/Ho8XhNXyAbvshLXFM5E5u8PFFYuDwcDgHo7BGyVwlDl60J5MoU3zqsflgCNpL9KJl5I6YfMpmNveUjbwcoi4f943KMjpHwmxb+otuhVR7dplahDrd8dHUXI+D8lDXZ1wqLyRiZ6sa+fF3AdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
