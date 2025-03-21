<?php
function search_page($search){
    $content = strtolower(strip_tags(file_get_contents('content.html')));
    $found = strpos($content, strtolower($search));
    if($found !== false){
        return substr($content, $found - 50, strlen($search) + 100);
    }else{
       return "No results found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['submit'])){
            $search = $_GET['search'];
           echo search_page(strtolower($search));
        }
    ?>
    <form action="">
        <h2>Search</h2>
        <label for="search">Search:</label>
        <input type="text" id="search" name="search"><br><br>
        <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>