<?php
/* Allows use of algolia search */
echo ("hello!");
require_once('algoliasearch-client-php-master/algoliasearch.php');

/* gets the document the user uploaded in index.html */
$document = $_POST["Doc"];
echo ($document);
/* calls the docToString.php function */
require_once('docToString.php');
$text = getTextLines($document);
echo ($text);
/* initialises the client using the search-only-API key and the application ID given on the algolia account */
$client = new \AlgoliaSearch\Client('A8IEYEC6J1', '86aaee8c4b526a5ece47db264400b1da');

/* sets the string to go to the document index */
$index = $client->initIndex('document');

$text = /* input your method from doc to string */
$index->saveObjects($text);
}
?>
