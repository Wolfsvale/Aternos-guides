<?php

require_once('../models/functions.php');

$dbCreds = databaseCredentials('../../.env');

$driver = new \Aternos\Model\Driver\Mysqli\Mysqli($dbCreds['host'], 3306, $dbCreds['user'], $dbCreds['password'], "", $dbCreds['database']);
\Aternos\Model\Driver\DriverRegistry::getInstance()->registerDriver($driver);

$article = selectArticle("id", $_POST['article_id']);
$article['data']->delete();

header('Location: ../../reviewing');