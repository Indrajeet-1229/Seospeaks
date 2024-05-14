<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $website = $_POST['website'];
    $zipcode = $_POST['zipcode'];
    $message = $_POST['message'];


    $to = "support@creativecrows.com";
        // $to = "indrajeet.bandgar@creativecrows.com";
    $subject = "New Enquiry From  " . $name;

    $recaptcha_secret = "6Le-ZGMpAAAAAOhzP1svFXt4XOBI3KpwyOkSXUHI"; // Replace with your Secret Key
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
    ];

    $recaptcha_options = [
        'http' => [
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data),
        ],
    ];

    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
    $recaptcha_data = json_decode($recaptcha_result);

    if (!$recaptcha_data->success) {

        echo json_encode(["status" => "error", "mobile" => "reCAPTCHA verification failed"]);
        exit;
    }

    $txt = "<html><head><style>
h2{
    background-color:#6f8291;
    padding:10px;
    color:white;
}
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
         
        }
        

        th {
            background-color: #f2f2f2;
        }
        </style></head><body>";
    $txt .= "<h2>New Inquiry Received!</h2>";
    $txt .= "<table border='1'>";
    $txt .= " <tr>
<td><b>Name</b></td>
<td>$name</td>
</tr>

<tr>
<td><b>Email </b></td>
<td>$email</td>
</tr>

<tr>
<td> <b>Mobile Number </b></td>
<td>$mobile</td>
</tr>
<tr>
<td> <b>Company Name </b></td>
<td>$company</td>
</tr>
<tr>
<td> <b>Website URL </b></td>
<td>$website</td>
</tr>
<tr>
<td> <b>Zipcode </b></td>
<td>$zipcode</td>
</tr>
<tr>
<td><b>Message </b></td>
<td>$message</td>
</tr>";

    $txt .= "</table>";
    $txt .= "</body></html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" . $email;

    mail($to, $subject, $txt, $headers);
    echo json_encode(["status" => "success", "mobile" => "Our team will respond to you shortly"]);


    // Continue with sending the email...
} else {
    // If the request method is not POST, return an error
    echo json_encode(["status" => "error", "mobile" => "Invalid request"]);
}
