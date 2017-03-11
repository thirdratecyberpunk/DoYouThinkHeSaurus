<?php
// turns a .docx file passed by the user into a series of JSON objects

// turns the file into a zip archive
$zip = new ZipArchive;
$res = $zip->open('test.docx');
if ($res === TRUE) {
  $zip->extractTo('extractedFiles');
  $zip->close();
  echo 'Extracted .docx file!' . "\n";
} else {
  echo 'Cannot extract file!' . "\n";
  exit();
}
 ?>
