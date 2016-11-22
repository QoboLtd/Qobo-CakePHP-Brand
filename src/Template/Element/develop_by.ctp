<?php

$defaultText = 'DESIGNED &amp; DEVELOPED BY QOBO';
$defaultUrl = 'https://www.qobo.biz/';

?>

<a href="<?= isset($href) ? $href : $defaultUrl ?>" target="_blank" class="develop-by <?= $class ?>"> <?= isset($text) ? $text : $defaultText ?></a>