<?php
function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}


$data = json_decode(curl_get_contents('https://graph.facebook.com/287174141361489/posts?limit=5&access_token=584194604998562|vUNZO4kcwK2Q1rUyLe9EPIUFuH8'));
print $data;

?>