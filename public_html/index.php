<h1>Michal Kozak</h1>
<h4>Test polaczenia php i mysql</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'roottest';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Polaczenie nie udane: " . $conn->connect_error);
} else {
    echo "Polaczenie udane";
}

?>
