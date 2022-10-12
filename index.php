<?php
require 'ids.php';
require 'list.php';

//id - list
$result = array_diff($ids, $list);

echo '<pre>';
print_r($result);
echo '</pre>';

?>