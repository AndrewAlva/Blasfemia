<?php

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2551752218-4mYsvxm0kdagC17XcEmacPiUnvtRZLHkv0jkiJv",
    'oauth_access_token_secret' => "oILKEaK8lm5XSgdbL5SJPUTSf8K6kJNgcSBaPydel3OsF",
    'consumer_key' => "rbGYhcI7LXncAGdy7OULKUqqX",
    'consumer_secret' => "qP3PFsqU6dp7hxVs4K53ryuJaYNd5dNVa6OCOZaMYG8H8ThgZ2"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);



/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23haha&result_type=recent&count=1000';
$requestMethod = 'GET';


$twitter = new TwitterAPIExchange($settings);      
$tweets = $twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest();
$tweetsArray = json_decode($tweets,true);





