<?php

$records_text = file_get_contents('records.json');

$records = json_decode($records_text, true);

if (isset($_POST['title'])) {
  echo $_POST['title'];
}


?>