<?php

function get_comic($id){
    if($id != null){
        $url = "https://xkcd.com/{$id}/info.0.json";
    }else{
        $url = "https://xkcd.com/info.0.json";
    }
    $response = file_get_contents($url);
    return json_decode($response);
}

$latest = get_comic(null);
$count = $latest->num;
$random = rand(1,$count);
$comic = get_comic($random);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $comic->title; ?></h1>
    <figure>
        <img src="<?php echo $comic->img; ?>" alt="<?php echo $comic->alt; ?>">
        <figcaption><?php echo $comic->alt; ?></figcaption>
    </figure>
</body>
</html>