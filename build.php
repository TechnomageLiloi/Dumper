<?php

$fnDumper = 'dumper.phar';

try
{
    if(file_exists($fnDumper)) {
        unlink($fnDumper);
    }

    $oPhar = new Phar($fnDumper);
    $oPhar->startBuffering();

    $oPhar->setStub(Phar::createDefaultStub('Dumper/Main.php'));
    $oPhar->buildFromDirectory(__DIR__ . '/Source');

    $oPhar->stopBuffering();

    chmod(__DIR__ . '/' . $fnDumper, 0777);

} catch (Exception $e) {
    echo $e->getMessage();
}