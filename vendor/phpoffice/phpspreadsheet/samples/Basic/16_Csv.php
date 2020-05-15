<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

require __DIR__ . '/../Header.php';
$spreadsheet = require __DIR__ . '/../templates/sampleSpreadsheet.php';

$helper->log('Write to CSV format');
<<<<<<< HEAD
=======
/** @var \PhpOffice\PhpSpreadsheet\Writer\Csv $writer */
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
$writer = IOFactory::createWriter($spreadsheet, 'Csv')->setDelimiter(',')
    ->setEnclosure('"')
    ->setSheetIndex(0);

$callStartTime = microtime(true);
$filename = $helper->getTemporaryFilename('csv');
$writer->save($filename);
$helper->logWrite($writer, $filename, $callStartTime);

$helper->log('Read from CSV format');

<<<<<<< HEAD
=======
/** @var \PhpOffice\PhpSpreadsheet\Reader\Csv $reader */
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
$reader = IOFactory::createReader('Csv')->setDelimiter(',')
    ->setEnclosure('"')
    ->setSheetIndex(0);

$callStartTime = microtime(true);
$spreadsheetFromCSV = $reader->load($filename);
$helper->logRead('Csv', $filename, $callStartTime);

// Write Xlsx
$helper->write($spreadsheetFromCSV, __FILE__, ['Xlsx']);

// Write CSV
$filenameCSV = $helper->getFilename(__FILE__, 'csv');
<<<<<<< HEAD
=======
/** @var \PhpOffice\PhpSpreadsheet\Writer\Csv $writerCSV */
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
$writerCSV = IOFactory::createWriter($spreadsheetFromCSV, 'Csv');
$writerCSV->setExcelCompatibility(true);

$callStartTime = microtime(true);
$writerCSV->save($filenameCSV);
$helper->logWrite($writerCSV, $filenameCSV, $callStartTime);
