<?php
function wordCount($file) {
    $content = file_get_contents($file);
    $text = strtolower($content);
    $text = preg_replace('/[^\w\s]/', '', $text);
    $stopWords = [
        'a', 'an', 'the', 'and', 'or', 'but', 'if', 'is', 
        'on', 'in', 'with', 'of', 'at', 'by', 'for', 'to', 
        'um', 'umm'
    ];
    $words = explode(' ', $text);
    $filteredWords = array_filter($words, function($word) use ($stopWords) {
        return !in_array($word, $stopWords);
    });

    for($i = 0; $i < count($filteredWords); $i++){
        $key = $filteredWords[$i];
        if($i == 0 ){
            $adjacent[$key] = $filteredWords[$i + 1];
        }else if($i == count($filteredWords) - 1){
            $adjacent[$key] = $filteredWords[$i - 1];
        }else{
            $adjacent[$key] = $filteredWords[$i - 1] . ' ' . $filteredWords[$i + 1];
        }
    }
    return $adjacent;

    // $wordCount = array_count_values($filteredWords);
    // arsort($wordCount);
    // return $wordCount;
}

$file = 'sample.txt';
$result = wordCount($file);

var_dump($result);

echo "Word Count (Excluding Stop Words):\n";
foreach ($result as $word => $count) {
    echo "$word: $count<br>";
}

?>