<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Code</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0;
        }

        .code {
            display: block;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow-x: auto;
            color: #333; /* Kod rengi */
        }

        .comment {
            color: green; /* Yorum rengi */
        }

        .keyword {
            color: blue; /* Anahtar kelime rengi */
        }

        .string {
            color: brown; /* String rengi */
        }
    </style>
</head>
<body>

<?php
// index.php dosyasındaki kodları paylaşmak için
$indexCode = highlight_file('s-index.php', true);

// sonuc.php dosyasındaki kodları paylaşmak için
$testCode = highlight_file('s-sonuc.php', true);

// renk özelleştirme
$indexCode = str_replace('<span style="color: #0000BB">', '<span class="keyword">', $indexCode); // Anahtar kelimeler için
$indexCode = str_replace('<span style="color: #007700">', '<span class="comment">', $indexCode); // Yorumlar için
$indexCode = str_replace('<span style="color: #DD0000">', '<span class="string">', $indexCode); // Stringler için

$testCode = str_replace('<span style="color: #0000BB">', '<span class="keyword">', $testCode); // Anahtar kelimeler için
$testCode = str_replace('<span style="color: #007700">', '<span class="comment">', $testCode); // Yorumlar için
$testCode = str_replace('<span style="color: #DD0000">', '<span class="string">', $testCode); // Stringler için

echo '<div class="code">' . $indexCode . '</div>';
echo '<div class="code">' . $testCode . '</div>';
?>

</body>
</html>
