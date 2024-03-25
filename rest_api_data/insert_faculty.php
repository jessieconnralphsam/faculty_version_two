<?php
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'faculty');
define('DB_USER', 'postgres');
define('DB_PASSWORD', 'postgres');

$jsonData = file_get_contents('http://34.124.227.183/app/display/?format=json');
$data = json_decode($jsonData, true);

$departments = [
    "ELEMENTARY EDUCATION" => 1,
    "SECONDARY EDUCATION" => 2,
    "PHYSICAL EDUCATION" => 3,
    "FILIPINO DEPT" => 4,
    "SOCIOLOGY DEPT" => 5,
    "PRE-UNIVERSITY/COLLEGE BOUND PROGRAM" => 6,
    "ENGLISH DEPT" => 7,
    "POLITICAL SCIENCE" => 8,
    "ISLAMIC STUDIES" => 9,
    "HISTORY DEPT" => 10,
    "MATHEMATICS" => 11,
    "INFO. TECH. & PHYSICS" => 12,
    "SCIENCE DEPT" => 13,
    "DOCTOR OF MEDICINE" => 14,
    "BASIC SCIENCES" => 15,
    "CLINICAL SCIENCES" => 16,
    "MASTER IN BUSINESS MANAGEMENT" => 17,
    "MASTER IN PUBLIC ADMINISTRATION" => 18,
    "GRADUATE PROGRAM IN EDUCATION" => 19,
    "MASTER IN SUSTAINABLE DEVELOPMENT" => 20,
    "ACCOUNTANCY DEPT" => 21,
    "ECONOMICS, MANAGEMENT & MARKETING" => 22,
    "AGRICULTURAL ENGINEERING" => 23,
    "ANIMAL SCIENCE AND AGRI BUSINESS" => 24,
    "AGRONOMY" => 25,
    "CIVIL ENGINEERING" => 26,
    "ELECTRONICS AND COMM. ENGINEERING/ELECTRICAL ENGINEERING" => 27,
    "MECHANICAL ENGINEERING" => 28,
    "ENGINEERING TECHNOLOGY" => 29,
    "AQUACULTURE DEPARTMENT" => 30,
    "FISH PROCESSING & MARINE BIOLOGY" => 31
];

$colleges = [
    "COLLEGE OF ENGINEERING" => 1,
    "COLLEGE OF AGRICULTURE" => 2,
    "COLLEGE OF SOCIAL SCIENCES & HUMANITIES" => 3,
    "COLLEGE OF MEDICINE" => 4,
    "COLLEGE OF BUSINESS ADMINISTRATION" => 5,
    "COLLEGE OF FISHERIES" => 6,
    "COLLEGE OF NATURAL SCIENCES AND MATH" => 7,
    "SCHOOL OF GRADUATE STUDIES" => 8,
    "COLLEGE OF EDUCATION" => 9
];

try {
    $pdo = new PDO("pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO Faculty (name, collegeID, departmentID, rank, dean) VALUES (?, ?, ?, ?, ?)");

    foreach ($data as $item) {
        $item[1] = strtoupper($item[1]);
        if (isset($departments[$item[2]])) {
            $item[2] = $departments[$item[2]];
        }
        if (isset($colleges[$item[1]])) {
            $item[1] = $colleges[$item[1]];
        }
        $stmt->execute([$item[0], $item[1], $item[2], $item[3], $item[4]]);
    }

    echo "Records inserted successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
