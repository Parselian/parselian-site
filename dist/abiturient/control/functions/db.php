<?
  require __DIR__.'/../libs/rb-mysql.php';

  R::setup(
    'mysql:host=localhost;dbname=vyach392_abiturient',
    'vyach392_admin',
    'XmZcuLqdKUKmjf6804iC'
  );

  $dsn = 'mysql:host=localhost;dbname=vyach392_abiturient';
  $pdo = new PDO($dsn, 'vyach392_admin', 'XmZcuLqdKUKmjf6804iC', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  session_start();
?>