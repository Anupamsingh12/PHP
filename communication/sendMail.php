<?php

$message = $_GET["message"];
$to = $_GET["to"];

$params = [
    'personalizations' => [
        [
            "to" => [
                ["email" => $to, "name" => "John Doe"],
                // other emails
            ],
            "subject" => "Hello, world!"
        ]
    ],
    'from' => [
        "email" => "ashutosh.empli5@gmail.com", "name" => "John Doe"
    ],
    'reply_to' => [
        "email" => "ashutosh.empli5@gmail.com", "name" => "John Doe"
    ],
    "content" => [
        [
            "type" => "text/plain",
            "value" => $message
        ]
    ]

];

$query = http_build_query($params);


$headers = array(
    "Authorization: Bearer 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",
    "Content-Type: application/json"
);

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
        "authorization: Bearer <<SENDGRID_API_KEY>>",
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
