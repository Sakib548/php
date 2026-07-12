 <?php  
define('basic_url', '/websites/demo/2.dynamic_web_app/2.8-2.9.environments_SQL_Injection/');
require __DIR__ . "/utils.php";
// require "router.php";
require "Database.php";
$config = require("config.php");      

$db = new Database($config['database']);
$id = $_GET['id'];
// $query = "select * from posts where id= ?";
$query = "select * from posts where id= :id";

//$posts = $db->query($query,[$id])->fetch();
$posts = $db->query($query,[':id'=>$id])->fetch();
  // foreach($posts as $post){
  //   echo "<li>".$post['title']."</li>";
  // }

  dd($posts);
?>

