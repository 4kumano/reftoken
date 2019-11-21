function refBB($refresh_token)
{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://securetoken.googleapis.com/v1/token?alt=proto&key=AIzaSyCbnj6yOAYLoy5XJCSXf4r8h8_v11oLXYA");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    $headers = "Content-Type: application/x-www-form-urlencoded";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"grant_type=refresh_token&refresh_token=".$refresh_token);

    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        return "Error";
    }
    curl_close($ch);
    return $result;
}
