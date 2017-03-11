<?php
/* indexes the document index in algolia */
$index = $client->initIndex('document');
$batch = json_decode(file_get_contents('document.json'), true);
$index->addObjects($batch);

/*gets the text in the search bar, which has been typed in and searches the document for it*/
$search = $_POST[/*name of search text in form*/];
var_dump($index->search());
?>
