<?php
// turns a .docx file passed by the user into an array of strings
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
// loads the contents of document.xml
$fileName = "extractedFiles/word/document.xml";
$myfile = fopen( $fileName, "r") or die("Unable to open file!" . "\n");
$contents =  fread($myfile,filesize($fileName));
fclose($myfile);

preg_match_all('/<w:t>[^<>]+<\/w:t>/', $contents, $wordXML);
print_r ($wordXML);
 ?>
