<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro-RO', array (
));

$catalogueRo = new MessageCatalogue('ro', array (
));
$catalogue->addFallbackCatalogue($catalogueRo);

return $catalogue;
