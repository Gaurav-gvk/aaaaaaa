<?php

// [ Update Your Values In Line No 19 and 20 Acces Token and Autorization ]
// URL also May Be Get Change 🥱😆 
// (c) @AviPatilPro GitHub

$curl = curl_init();
$channel =$_GET['c'];

$url="https://spapi.zee5.com/singlePlayback/getDetails/secure?channel_id=$channel&device_id=x4cv34IfxXPxRQuqF7tU000000000000&platform_name=desktop_web&translation=en&user_language=hi&country=IN&state=OR&app_version=2.50.79&user_type=premium&check_parental_control=false&uid=ae73fd09-13a3-42fc-b6c9-f3b5c4055f94&ppid=x4cv34IfxXPxRQuqF7tU000000000000&version=12";
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "x-access-token": "eyJ0eXAiOiJqd3QiLCJhbGciOiJIUzI1NiJ9.eyJwcm9kdWN0X2NvZGUiOiJ6ZWU1QDk3NSIsInBsYXRmb3JtX2NvZGUiOiJXZWJAJCF0Mzg3MTIiLCJpc3N1ZWRBdCI6IjIwMjItMDEtMDFUMDY6MzA6MDIrMDAwMCIsInR0bCI6ODY0MDB9.26wXSaqsrkzZmzyc-oDqO6yLcg0rBOLgJ-8xiqSlF4Q",    
  "Authorization": "bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE2NDEwMjQ5NzgsImV4cCI6MTY3MjU2MDk3OCwiaXNzIjoiaHR0cHM6Ly91c2VyYXBpLnplZTUuY29tIiwiYXVkIjpbImh0dHBzOi8vdXNlcmFwaS56ZWU1LmNvbS9yZXNvdXJjZXMiLCJzdWJzY3JpcHRpb25hcGkiLCJ1c2VyYXBpIl0sImNsaWVudF9pZCI6InJlZnJlc2hfdG9rZW5fY2xpZW50Iiwic3ViIjoiYWU3M2ZkMDktMTNhMy00MmZjLWI2YzktZjNiNWM0MDU1Zjk0IiwiYXV0aF90aW1lIjoxNjQxMDI0OTc4LCJpZHAiOiJsb2NhbCIsInVzZXJfaWQiOiJhZTczZmQwOS0xM2EzLTQyZmMtYjZjOS1mM2I1YzQwNTVmOTQiLCJzeXN0ZW0iOiJaNSIsImFjdGl2YXRpb25fZGF0ZSI6IjIwMjEtMDUtMjhUMTE6Mjg6NTEiLCJjcmVhdGVkX2RhdGUiOiIyMDIxLTA1LTI4VDExOjI4OjUxIiwicmVnaXN0cmF0aW9uX2NvdW50cnkiOiJJTiIsInVzZXJfZW1haWwiOiJsaW5zYS5uaW5hbkBnbWFpbC5jb20iLCJzdWJzY3JpcHRpb25zIjoiW3tcImlkXCI6XCI4OGVkY2Q5OC03M2QyLTRkZmMtOGNmYy02ZmI5N2E3MDVjNzBcIixcInVzZXJfaWRcIjpcImFlNzNmZDA5LTEzYTMtNDJmYy1iNmM5LWYzYjVjNDA1NWY5NFwiLFwiaWRlbnRpZmllclwiOlwiWkVFNV8xWV9TVk9EX0FSXzQ5OVwiLFwic3Vic2NyaXB0aW9uX3BsYW5cIjp7XCJpZFwiOlwiMC0xMS0xODQzXCIsXCJhc3NldF90eXBlXCI6MTEsXCJzdWJzY3JpcHRpb25fcGxhbl90eXBlXCI6XCJTVk9EXCIsXCJ0aXRsZVwiOlwiUHJlbWl1bVwiLFwib3JpZ2luYWxfdGl0bGVcIjpcIlByZW1pdW1cIixcInN5c3RlbVwiOlwiWjVcIixcImRlc2NyaXB0aW9uXCI6XCI1MCUgb2ZmIG9uIOKCuTk5OVwiLFwiYmlsbGluZ19jeWNsZV90eXBlXCI6XCJkYXlzXCIsXCJiaWxsaW5nX2ZyZXF1ZW5jeVwiOjM2NSxcInByaWNlXCI6NDk5LjAsXCJjdXJyZW5jeVwiOlwiSU5SXCIsXCJjb3VudHJ5XCI6XCJJTlwiLFwiY291bnRyaWVzXCI6W1wiSU5cIl0sXCJzdGFydFwiOlwiMjAyMS0wMi0xMlQwMDowMDowMFpcIixcImVuZFwiOlwiMjAyMi0wMy0zMVQyMzo1OTo1OVpcIixcIm9ubHlfYXZhaWxhYmxlX3dpdGhfcHJvbW90aW9uXCI6ZmFsc2UsXCJyZWN1cnJpbmdcIjp0cnVlLFwicGF5bWVudF9wcm92aWRlcnNcIjpbe1wibmFtZVwiOlwiQXBwbGVcIixcInByb2R1Y3RfcmVmZXJlbmNlXCI6XCJaRUU1XzFZX1NWT0RfQVJfNDk5XCJ9XSxcInByb21vdGlvbnNcIjpbXSxcImFzc2V0X3R5cGVzXCI6WzYsMCw5XSxcImFzc2V0X2lkc1wiOltdLFwiYnVzaW5lc3NfdHlwZVwiOlwiZnJlZVwiLFwiYmlsbGluZ190eXBlXCI6XCJwcmVtaXVtXCIsXCJudW1iZXJfb2Zfc3VwcG9ydGVkX2RldmljZXNcIjozLFwibW92aWVfYXVkaW9fbGFuZ3VhZ2VzXCI6W10sXCJ0dl9zaG93X2F1ZGlvX2xhbmd1YWdlc1wiOltdLFwiY2hhbm5lbF9hdWRpb19sYW5ndWFnZXNcIjpbXSxcImR1cmF0aW9uX3RleHRcIjpcIjk5OVwiLFwidmFsaWRfZm9yX2FsbF9jb3VudHJpZXNcIjp0cnVlLFwiYWxsb3dlZF9wbGF5YmFja19kdXJhdGlvblwiOjYsXCJvZmZlcl9pZFwiOjYxLFwiY2F0ZWdvcnlcIjpcImV2ZW50XCJ9LFwic3Vic2NyaXB0aW9uX3N0YXJ0XCI6XCIyMDIxLTA1LTI4VDExOjI5OjQxWlwiLFwic3Vic2NyaXB0aW9uX2VuZFwiOlwiMjAyMi0wNS0yOFQyMzo1OTo1OVpcIixcInN0YXRlXCI6XCJhY3RpdmF0ZWRcIixcInJlY3VycmluZ19lbmFibGVkXCI6dHJ1ZSxcInBheW1lbnRfcHJvdmlkZXJcIjpcIkFwcGxlXCIsXCJmcmVlX3RyaWFsXCI6bnVsbCxcImNyZWF0ZV9kYXRlXCI6XCIyMDIxLTA1LTI4VDExOjI5OjEwLjE2M1pcIixcImlwX2FkZHJlc3NcIjpcIjI0MDE6NDkwMDoyMzRiOmNhMzE6MTRlMTo4YzA6NjNmOmEzZDZcIixcImNvdW50cnlcIjpcIklOXCIsXCJyZWdpb25cIjpcIlROXCIsXCJhZGRpdGlvbmFsXCI6e1wib3JpZ2luYWxfdXNlcl9hZ2VudFwiOlwiWkVFNS80MzY5IENGTmV0d29yay8xMjM3IERhcndpbi8yMC40LjBcIixcIlgtRm9yd2FyZGVkLUZvclwiOlwiMjMuMjEwLjkzLjMwXCIsXCJUcnVlLUNsaWVudC1JUFwiOlwiMjQwMTo0OTAwOjIzNGI6Y2EzMToxNGUxOjhjMDo2M2Y6YTNkNlwifSxcImRpc2NvdW50X2Ftb3VudFwiOjAuMCxcInByb21vX2NvZGVcIjpcIlwiLFwiYWxsb3dlZF9iaWxsaW5nX2N5Y2xlc1wiOjAsXCJ1c2VkX2JpbGxpbmdfY3ljbGVzXCI6MX1dIiwic2NvcGUiOlsic3Vic2NyaXB0aW9uYXBpIiwidXNlcmFwaSIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJkZWxlZ2F0aW9uIl19.MOybD9_L9c4UeS5gkrhcmeeOati8325c8rRkwbzoRjkJZ7xg7FEIH6-gDTBpUrj4vcpLhmYLr6M0RbnDbHN5A0h2A-5tFlXPwKkosLYQPG6jDCDkI82nqQuP0TO04gH3x5V5bbEfT7AfIb_eJqzm0aLl-TwwJB-F8ckqlrvvHRlPgrfI7ARQc91rRGxl912J2gY6NIAEFWs79Cv5LNNBKFzUh1kqVJaF8KBeXN9oRL_9zDaiX1Q1KLdCU-WyznplXr1pq1LkMem-q4mbr-ePu_hiG6jiKBadsE8fWhye7-4KOtey7xlnLXSkwsf8X6hR9GHkJM1Xw3XiH3EYgmEDAA"   
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$zx = json_decode($response, true);

$image= $zx["assetDetails"]['image_url'];
$img = str_replace('270x152', '1170x658', $image);
$title= $zx["assetDetails"]['title'];
$playit= $zx["keyOsDetails"]['video_token'];

header("Content-Type: application/json");
$errr= array("error" => "Put Here Only ZEE5 Proper URL ,  Invalid Input " );
$err =json_encode($errr);


$apii = array("title" => $title, "image" => $img,  "url" => $playit, "created_by" => "Avishkar Patil");

$api =json_encode($apii, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

//header("Content-Type: application/json");
//echo $api;
header("Location: $playit"); //--> For Direct Play

  
?>