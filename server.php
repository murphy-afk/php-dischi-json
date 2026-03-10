<?php

$records_text = file_get_contents('records.json');

$records = json_decode($records_text, true);

if (isset($_POST['title']) && isset($_POST['artist']) && isset($_POST['genre']) && isset($_POST['year'])) {
  $randomImage = "https://picsum.photos/300?random=" . rand(1000, 9999);
  $newRecord = [
    "title" => $_POST['title'],
    "artist" => $_POST['artist'],
    "genre" => $_POST['genre'],
    "year" => $_POST['year'],
    "cover_url" => $randomImage
  ];
  $records[] = $newRecord;
  file_put_contents('records.json', json_encode($records, JSON_PRETTY_PRINT));
}
?>