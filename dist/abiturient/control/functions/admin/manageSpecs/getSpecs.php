<?
$dsn = 'mysql:host=localhost;dbname=vyach392_abiturient';
$pdo = new PDO($dsn, 'vyach392_admin', 'XmZcuLqdKUKmjf6804iC', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$queryShowFacs = $pdo->query('SELECT * from specialties');

$spec_id = [];
$spec_name = [];

while ($result = $queryShowFacs->fetch()) {
  array_push($spec_id, $result['specialty_id']);
  array_push($spec_name, $result['specialty_name']);
}

$result = (object) array(
  'id' => $spec_id,
  'name' => $spec_name
);

print_r(json_encode($result));
