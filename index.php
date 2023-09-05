

<?php

function file_checking($file){
    $new_array = explode(".",$file);
    $file_types = ["csv", "zip"];
    $ext = end($new_array);

    if($ext != "zip"){
        echo "You can't upload your file <br>";
    } else {
        echo "Your file uploaded<br>";
    }

}


// explode
echo "<h2> Class 5 HW</h2>";
echo "<h2>Validate user file using explode method</h2>";
$fileType = ["csv" , "zip"];
$file = "index.zip";
$newArray = explode ('.', $file);
$ext = end($newArray);

if ($ext != "zip"){
    echo " you isn't upload <br>";
} else{
    echo "Uploaded<br><br>";
}

// Thumbnail genarate
echo "<h2>Create a youtube Thumbnail generator </h2>";
$youtubeAPI = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
$videoURL = "https://youtu.be/bM9yWtx1re0?si=CTc0XKFD0FgwAx2p";
$mailURL = explode("?si",$videoURL)[0];
$finalURL = explode('/',$mailURL);
$videoID = end($finalURL);
$imgURL = str_replace("<insert-youtube-video-id-here>",$videoID,$youtubeAPI);
echo '<img src=" '.$imgURL .' " width = "400px"<br>>';

// Using Function
function getYutubeThumbnai ($youtubeURL){
    $youtubeAPI = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
    $mailURL = explode("?si",$youtubeURL)[0];
    $finalURL = explode('/',$mailURL);
    $videoID = end($finalURL);
    $imgURL = str_replace("<insert-youtube-video-id-here>",$videoID,$youtubeAPI);
    echo '<img src=" '.$imgURL .' " width = "400px" <br>>';
}
getYutubeThumbnai ("https://youtu.be/L5e6kbEhkbw?si=W2wQrY-P-Sm9jeHi");

// Matching & Count

$Jatir_Apu = [ 
    'name'=> "Opu",
    'Age' => "23",
   'hobby' => "Vondami kora",
   'relationship status' => "Married"

];
$Kutta_mizan = [ 
    'name'=> "Mizan",
    'Age' => "23",
   'hobby' => "Meye potano",
   'relationship status' => "Married"
];
$matching = count(array_intersect($Jatir_Apu,$Kutta_mizan));
echo $matching > 2 ? "Suggested" : "Not Suggested";


// Array Pop, Push, Shift & Unshift

$veges = [
    'Tomato',
    'Alu',
    'Mula',
    'Kochu',
    'Vendi'
];

array_pop($veges);
array_pop($veges);
array_push ($veges,'lau');
array_shift($veges);
array_unshift($veges,'korola');

echo "<pre>";
print_r($veges);
echo "</pre>";
