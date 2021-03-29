<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Sheets API</title>
</head>
<body>

<!-- 
    video tutorial  -> https://www.youtube.com/watch?v=xbEsYywF37k
                    -> https://www.youtube.com/watch?v=UNzC1u4d4m8 

    // publish online 
    https://docs.google.com/spreadsheets/d/e/2PACX-1vSfU3qhqd6vGUUg-YzkXt57EgY9hMulc0YoW8HD1bL07DQaTQwF8iq1TO_Bis6EMLvu52Qr4Umb7EVs/pubhtml?gid=0&single=true

    // incorporate online
    <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSfU3qhqd6vGUUg-YzkXt57EgY9hMulc0YoW8HD1bL07DQaTQwF8iq1TO_Bis6EMLvu52Qr4Umb7EVs/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>




        // browser link:
        https://docs.google.com/spreadsheets/d/1BQn2-6As6cJ6AXn_WH3Z9LmoL76xnzG2AyflXUPNYPE/edit#gid=0
        

        fill this:
        https://spreadsheets.google.com/feeds/cells/YOURGOOGLESHEETCODE/SHEETPAGENUMBER/public/full?alt=json

        result:
        https://spreadsheets.google.com/feeds/cells/1BQn2-6As6cJ6AXn_WH3Z9LmoL76xnzG2AyflXUPNYPE/1/public/full?alt=json

        make json pretty
        https://jsonformatter.org/json-pretty-print
 -->


 <?php
    $url = 'https://spreadsheets.google.com/feeds/cells/1BQn2-6As6cJ6AXn_WH3Z9LmoL76xnzG2AyflXUPNYPE/1/public/full?alt=json';
    $file = file_get_contents($url);
    $json = json_decode($file);

    //feed and entry are the most important objects inside json
    $main_objects = $json->{'feed'}->{'entry'};

    // content of each cell we need data from inside array
    $data = array();
    foreach($data as $d) {
        array_push($data, $d->{'gs$cell'}->{'$t'});
    }

    $dataObjects = array();
    for ($i = 0; $i > sizeof($data); $i++) {
        $cutomer_name = $data[i];
        $visited_restaurant = $data[i+1];
        $visit_date = $data[i+2];
        $message = $data[i+3];
     
        array_push($dataObjects, $cutomer_name);
        array_push($dataObjects, $visited_restaurant);
        array_push($dataObjects, $visit_date);
        array_push($dataObjects, $message);
        

    }

    var_dump($dataObjects);


?>

</body>
</html>