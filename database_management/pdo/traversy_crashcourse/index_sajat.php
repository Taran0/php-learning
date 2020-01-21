<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdoposts';

// set DSN
$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;

// NOTE create a pdo instance
$connection = new PDO($dsn, $user, $password);
// NOTE default lekérdezés visszatérési típus beállít
// $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PDO QUERY

// NOTE 2 option 
// query method: egyszerű gyors, a lekérdezés egy string
// prepared statement: ha van user input

$stmt = $connection->query('SELECT * FROM posts');

// NOTE fetch param: milyen formában adja vissza a lekérdezés eredményét (ez tömb)
// goo pdo fetch options
// fetch_assoc - tömb
// while($row = $stmt->fetch()){
//     echo $row['title'] . '<br>';
// }
// fetch option: object (objektumként kéred vissza lekérdezést)
// itt most nem kéne fetch obj mert fent be van állítva a default
// while($row = $stmt->fetch()){
//     echo $row->title . '<br>';
// }


#PREPARED STATEMENT (prepare & execute)
// //unsafe way:
// //össze van kever az adat meg lekérdezés egy stringbe
// // $sql =  "SELECT * FROM posts WHERE author = '$author'";




// user input
$author = 'pista';
$is_published = true;
$id = 5;
// # FETCH MULTIPLE POSTS (position vs name paramters)



// //positional params -> ?
// // $sql = 'SELECT * FROM posts WHERE author = ?';
// // $stmt = $connection->prepare($sql);
// // //tömbben kapja meg a kérdőjelek helyére hiányzó változókat, DE SORREND FONTOS
// // $stmt->execute([$author]);
// // $posts = $stmt->fetchAll();


// // named params
// $sql = 'SELECT * FROM posts WHERE author = :szerzo && is_published = :publikalva';
// $stmt = $connection->prepare($sql);
// //tömbben kapja meg a kérdőjelek helyére hiányzó változókat, DE SORREND FONTOS
// $stmt->execute(['szerzo' => $author, 'publikalva' => $is_published]);
// $posts = $stmt->fetchAll();

// //var_dump($posts);

// foreach($posts as $post){
//     echo $post->title . "<br>";
// }

#FETCH SINGLE POSTS
// $sql = 'SELECT * FROM posts WHERE id = :ajdi';
// $stmt = $connection->prepare($sql);
// //tömbben kapja meg a kérdőjelek helyére hiányzó változókat, DE SORREND FONTOS
// $stmt->execute(['ajdi' => $id]);
// $post = $stmt->fetch();

// echo $post->body;



#GET ROW COUNT
$stmt = $connection->prepare('SELECT * FROM POSTS WHERE author = ?');
$stmt->execute([$author]);
$postCount=  
?>
