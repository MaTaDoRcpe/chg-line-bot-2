<?php


$API_URL = 'https://api.line.me/v2/bot/message';
$ACCESS_TOKEN = 'seEOqoPlldE7pc3gYkTEMc/0MrfQIbWHvPjwRAA+dmSpybbLmc/cmsg24o+mvP9E68T5lBNMySUmW8Qxn/McyDUeQ1NgKHOom81NB51vgZr99wwSoVRiu9IBx46TJv6hihGU1m+ay5f5wMl4Os04uQdB04t89/1O/w1cDnyilFU=';


$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer '.$ACCESS_TOKEN);

$jsonFlex = [
    "type" => "flex",
    "altText" => "CHG-3 Message",
    "contents" => [
      "type"=> "bubble",
  "direction"=> "ltr",
  "header"=> [
    "type"=> "box",
    "layout"=> "vertical",
    "contents"=> [
      [
        "type"=> "text",
        "text"=> "โรงพยาบาลจุฬารัตน์ 3 อินเตอร์",
        "weight"=> "bold",
        "align"=> "center",
        "contents"=> []
      ],
      [
        "type"=> "box",
        "layout"=> "vertical",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "แจ้งเตือนคิวของคุณ",
            "weight"=> "bold",
            "size"=> "lg",
            "color"=> "#009813FF",
            "align"=> "center",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "hello, world",
            "color"=> "#FFFFFFFF",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "A0013",
            "weight"=> "bold",
            "size"=> "3xl",
            "color"=> "#000000FF",
            "align"=> "center",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "เวลาเรียกคิว (โดยประมาณ)",
            "weight"=> "bold",
            "size"=> "xs",
            "color"=> "#C2BABAFF",
            "align"=> "center",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "09.45 AM",
            "size"=> "3xl",
            "align"=> "center",
            "contents"=> []
          ]
        ]
      ]
    ]
  ],
  "body"=> [
    "type"=> "box",
    "layout"=> "vertical",
    "contents"=> [
      [
        "type"=> "box",
        "layout"=> "horizontal",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "จำนวนที่รอ",
            "size"=> "lg",
            "align"=> "start",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "39",
            "size"=> "lg",
            "align"=> "end",
            "contents"=> []
          ]
        ]
      ],
      [
        "type"=> "box",
        "layout"=> "horizontal",
        "contents"=> [
          [
            "type"=> "text",
            "text"=> "13:01:35",
            "align"=> "start",
            "contents"=> []
          ],
          [
            "type"=> "text",
            "text"=> "09/04/64",
            "align"=> "end",
            "contents"=> []
          ]
        ]
      ]
    ]
  ]
]
  ];

$data = [
            'to' => $_GET['uId'],
            'messages' => [$jsonFlex]
        ];

        //print_r($data);

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/push', $POST_HEADER, $post_body);

        //echo "Result: ".$send_result."\r\n";

echo $_POST['inlineFormInputGroup'];




function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Success Confirmation Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
</head>
<body>
<!-- Modal HTML -->
<div id="myModal" style="text-align: center;">
	<div class="modal-dialog modal-confirm" style="text-align: center;">
		<div class="modal-content" style="text-align: center;">
			<div class="modal-header" style="text-align: center;">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Awesome!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal" onclick="window.open('', '_self', ''); window.close();">OK</button>
			</div>
		</div>
	</div>
</div>     
</body>
</html>