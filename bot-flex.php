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
            'to' => 'Udcd7bf6072dc5461c142765a62f8bc95',
            'messages' => [$jsonFlex]
        ];

        //print_r($data);

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

        $send_result = send_reply_message($API_URL.'/push', $POST_HEADER, $post_body);

        //echo "Result: ".$send_result."\r\n";

echo "OKey";




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