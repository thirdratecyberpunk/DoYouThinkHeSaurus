<?php>
/* adds to the document index in algolia */
$index = $client->initIndex('document');
$batch = json_decode(file_get_contents('document.json'), true);
$index->addObjects($batch);
?>
