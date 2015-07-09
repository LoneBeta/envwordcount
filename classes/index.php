<?php

namespace ENVWordCount;

include '/home/ENVWordCount/functions.php';

$document = new PDFDocument();
$document->file = "DOCUMENT_LOCATION";

echo $document->outputWordCount;