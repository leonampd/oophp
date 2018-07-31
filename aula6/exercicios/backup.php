$pdo = new PDO('mysql:host=mysql;dbname=digitalhouse', 'root', 'root');
$statement = $pdo->query('SELECT * FROM clientes');

$clientes = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($clientes);