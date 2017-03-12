<?php
// turns a .docx file passed by the user into an array of strings
function getTextLines($filename){
  $zip = new ZipArchive;
  $res = $zip->open($filename);
  if ($res === TRUE) {
    $zip->extractTo('extractedFiles');
    $zip->close();
    echo 'Extracted .docx file!' . "\n";
  }
  else {
    echo 'Cannot extract file!' . "\n";
    return null;
  }
  $fileName = "extractedFiles/word/document.xml";
  $myfile = fopen( $fileName, "r") or die("Unable to open file!" . "\n");
  $contents =  fread($myfile,filesize($fileName));
  fclose($myfile);

  preg_match_all('/<w:t>[^<>]+<\/w:t>/', $contents, $wordXML);
  $stringLines = '';
  foreach($wordXML as $containerArray){
    foreach($containerArray as $word){
        $word = str_replace('<w:t>', ' ', $word);
        $word = str_replace('</w:t>', '', $word);
        $stringLines = $stringLines . $word;
    }
  }
  return $stringLines;
}
 ?>
