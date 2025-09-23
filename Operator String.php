<?php
// Cara pertama menggunakan operator titik (.)
$a = "Hello ";
$b = "World!";
$a .= $b;
echo $a; // Hello World!
echo "<br/>";

$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang ".$a.$b.$c;
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>

<?php
// Cara alternatif menggunakan kurung kurawal {}
$a = "Hello ";
$hasil = "{$a}World!";
echo $hasil; // Hello World!
echo "<br />";

$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang Belajar di Program Studi Bisnis Digital";
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember
?>