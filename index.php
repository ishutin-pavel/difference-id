<?php
require 'ids.php';
require 'list.php';

//id - list
$result_ids_list = array_diff($ids, $list);


echo "### В вашем списке не хватает (ids - list)<br>";
foreach ($result_ids_list as $key => $value) {
  echo $value . "<br>";
}
// echo '<pre>';
// print_r($result_ids_list);
// echo '</pre>';

$result_list_ids = array_diff($list, $ids);
echo "### В вашем списке лишние (list - ids)<br>";
foreach ($result_list_ids as $key => $value) {
  echo $value . "<br>";
}
// echo '<pre>';
// print_r($result_list_ids);
// echo '</pre>';
?>