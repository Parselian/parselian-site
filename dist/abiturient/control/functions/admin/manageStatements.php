<?
  $dsn = 'mysql:host=localhost;dbname=vyach392_abiturient';
  $pdo = new PDO($dsn, 'vyach392_admin', 'XmZcuLqdKUKmjf6804iC', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  $queryStatements = $pdo->query('SELECT * from statements st JOIN specialties sp ON st.edu_specialty=sp.specialty_id ');

  $statements_id = [];
  $checked = [];
  $anket_status = [];
  $abi_names = [];
  $specialty_names = [];

  while($result = $queryStatements->fetch() ) {
    array_push($statements_id, $result['statement_id']);
    array_push($checked, $result['checked']);
    array_push($anket_status, $result['anket_status']);
    array_push($abi_names, $result['surname'] . ' ' . $result['abiname'] . ' ' . $result['patronymic']);
    array_push($specialty_names, $result['specialty_name']);
  }

  $res = (object) array(
    'statementsId' => $statements_id,
    'checked' => $checked,
    'anketStatus' => $anket_status,
    'abiNames' => $abi_names,
    'specialtyNames' => $specialty_names
  );

  print_r(json_encode($res));

  // print_r( json_encode($result = $queryStatements->fetch()) );

