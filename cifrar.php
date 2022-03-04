<?php
$text = strtoupper($_POST['text']);
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$lettersArray = chunk_split($text);
$newText = '';
$type = $_POST['select'];

function cifrar($text, $newText, $letters, $type)
{
    for ($i = 0; $i < strlen($text); $i++) {
        $currentLetter = $text[$i];
        if ($currentLetter == ' ') {
            $newText = $newText . ' ';
        } else if ($currentLetter == ($type == 1 ? 'X' : 'A')) {
            $newText = $newText . $letters[$type == 1 ? 0 : 23];
        } else if ($currentLetter == ($type == 1 ? 'Y' : 'B')) {
            $newText = $newText . $letters[$type == 1 ? 1 : 24];
        } else if ($currentLetter == ($type == 1 ? 'Z' : 'C')) {
            $newText = $newText . $letters[$type == 1 ? 2 : 25];
        } else {
            for ($j = 0; $j < count($letters); $j++) {
                if ($currentLetter == $letters[$j]) {
                    $newText = $newText . $letters[$type == 1 ? $j + 3 : $j - 3];
                }
            }
        }
    }
    return $newText;
}

$newText = cifrar($text, $newText, $letters, $type);

?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Codificador de Texto</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
     <script src='main.js'></script>
 </head>

 <body>
     <div class="container">
         <h1>Cifrador de Textos</h1>
         <div class="content">
             <div class="result">
                    <h2>Resultado</h2>
                    <p><?php
                        echo $newText;
                    ?></p>
             </div>       
         </div>
     </div>
 </body>

 </html>