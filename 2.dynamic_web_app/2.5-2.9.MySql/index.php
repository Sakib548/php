 <?php  
define('basic_url', '/websites/demo/2.dynamic_web_app/2.5.MySql/');
require __DIR__ . "/utils.php";
// require "router.php";
require "Database.php";
      

//  $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

//  $pdo = new PDO($dsn,'root');

//  $statement = $pdo->prepare("select * from posts");

//  $statement->execute();

// //  $posts=$statement->fetchAll();
// $posts=$statement->fetchAll(PDO::FETCH_ASSOC);

// foreach($posts as $post){
//     echo "<li>". $post['title'] ."</li>";
// }
 //dd($posts);



//  $dsn  = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

//  $pdo = new PDO($dsn,'root');

//  $statement = $pdo->prepare("select * from posts");

//   $statement->execute();

//   $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

  foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
  }

  //dd($posts);
?>

