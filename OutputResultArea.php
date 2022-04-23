<?php

function getTriangleArea($first, $second)
{
    return $first * $second / 2;
}

function getRectangleArea($first, $second)
{
    return $first * $second;
}

$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';

$firstValue = $_POST['nilai1'];
$secondValue = $_POST['nilai2'];
$chooseShape = $_POST['shape'];

$result;

if (isset($firstValue) && isset($secondValue)) {
    $result = $chooseShape == "Segitiga"
        ? getTriangleArea($firstValue, $secondValue)
        : getRectangleArea($firstValue, $secondValue);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="output-shape-value.css" rel="stylesheet" type="text/css">
	<title>Output Hasil Perhitungan</title>
</head>
<body>
<div class="container">
	<h1 id="title">HASIL HITUNG RUMUS</h1>
	<hr id="line-under-title">

	<table>
		<tr>
			<td>
				<pre class="teks">Nilai 1 adalah <?php echo $firstValue ?></pre>
			</td>
		</tr>
		<tr>
			<td>
				<pre class="teks">Nilai 2 adalah <?php echo $secondValue ?></pre>
			</td>
		</tr>
		<tr>
			<td>
				<pre class="teks">Rumus yang dipilih adalah <?php echo $chooseShape ?></pre>
			</td>
		</tr>
		<tr>
			<td>
				<pre class="teks">Hasil perhitungan rumus = <?php echo $result ?></pre>
			</td>
		</tr>
	</table>

	<button id="submit"><a href="<?= $url ?>">Kembali</a></button>
</div>
</body>
</html>