<?php 
ini_set('display_errors', 1);

function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key=>$value){
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value)
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    $r .= implode(', ', $values);
    return $r;
}

function getLatestTweet(){
	// url returns tweets from one user's timeline
	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

	// Authentication keys
	// Define $oauth_access_token, $oauth_access_token_secret, $consumer_key, $consumer_secret
	include 'twitter_auth.php';

	$oauth = array( 'screen_name' => 'verbbrands',
					'oauth_consumer_key' => $consumer_key,
	                'oauth_nonce' => time(),
	                'oauth_signature_method' => 'HMAC-SHA1',
	                'oauth_token' => $oauth_access_token,
	                'oauth_timestamp' => time(),
	                'oauth_version' => '1.0');

	$base_info = buildBaseString($url, 'GET', $oauth);
	$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
	$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
	$oauth['oauth_signature'] = $oauth_signature;

	// Make Requests
	$header = array(buildAuthorizationHeader($oauth), 'Expect:');
	$options = array( CURLOPT_HTTPHEADER => $header,
	                  //CURLOPT_POSTFIELDS => $postfields,
	                  CURLOPT_HEADER => false,
	                  CURLOPT_URL => $url.'?screen_name=verbbrands',
	                  CURLOPT_RETURNTRANSFER => true,
	                  CURLOPT_SSL_VERIFYPEER => false);

	$feed = curl_init();
	curl_setopt_array($feed, $options);
	$json = curl_exec($feed);
	curl_close($feed);

	$twitter_data = json_decode($json, true);
	return $twitter_data[0]['text'];
}