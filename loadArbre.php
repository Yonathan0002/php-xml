<?php
$xml = new DOMDocument();
$xml->load("arbre_dom.xml");
$xml->schemaValidate("arbre_DOM.xsd");