<?php
//1

$name = "Danil";
echo "Hello! My name is \"$name\". <br>";

//2

$age = 21;
echo "<br>I'm $age. <br>";

//3

$a = 15;
$b = 9;
$rez = $a + $b;
echo "<br>'$a' + '$b' = '$rez'<br>";

//4

$x = 42;
$y = 74;
echo "<br>Before: x = $x, y = $y<br>";
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
echo "After: x = $x, y = $y<br>";

//5

$questions = [
[
    'text' => 'Сколько океанов в мире?',
    'type' => 'radio',
    'options' => ['2', '4', '6', '8']
],
[
    'text' => 'Что ложут в бутерброд ?',
    'type' => 'checkbox',
    'options' => ['Хлеб', 'Колбаса', 'Сыр', 'Йогурт']
],
[
    'text' => 'Когда началсь 2 мировая война?',
    'type' => 'textarea'
]
];
foreach ($questions as $index => $question) {
echo "<br>" . ($index + 1) . ". " . $question['text'] . "<br>". PHP_EOL;

if ($question['type'] === 'radio' || $question['type'] === 'checkbox') {
foreach ($question['options'] as $key => $option) {
echo " <br>  " . ($key + 1) . ") " . $option . PHP_EOL;
}
echo "<br>";
} elseif ($question['type'] === 'textarea') {
echo "<br>   Ответ: _______________" . PHP_EOL;
}

echo PHP_EOL;
}

//6

$tag = 'div';
$background_color = 'Red';
$color = 'Green';
$width = '100px';
$height = '100px';

$styles = "<br><br> background-color: $background_color <br> color: $color <br> width: $width <br> height: $height <br>";
$output = "<br>Тег: < $tag > <br> зі стилями: [$styles]<br>";

echo $styles . PHP_EOL . "<$tag style ='  width: $width; height: $height; color: $color; background-color: $background_color'>Hello</$tag>";
