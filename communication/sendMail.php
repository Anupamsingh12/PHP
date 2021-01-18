<?php
  

function sendEmail($to,$message){



$params = [
    'personalizations' => [
        [
            "to" => [
                ["email" => $to, "name" => "John Doe"],
                // other emails
            ],
            "subject" => "Account verification"
        ]
    ],
    'from' => [
        "email" => "anupmsingh12@gmail.com", "name" => "tripzilaa"
    ],
    'reply_to' => [
        "email" => "supprt@tripzilaa.com", "name" => "tripzilaa"
    ],
    "content" => [
        [
            "type" => "text/plain",
            "value" => $message
        ]
    ]

];

$query = http_build_query($params);




$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($params),
    CURLOPT_HTTPHEADER => array(
        "authorization: Bearer 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",
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    var_dump($response);
    echo "Message sent to $to: " . $message;
}

}

?>