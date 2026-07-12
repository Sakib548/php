 <?php  
define('basic_url', '/websites/demo/2.dynamic_web_app/2.5-2.7.MySql/');
require __DIR__ . "/utils.php";
// require "router.php";
require "Database.php";
      

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

  foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
  }

  //dd($posts);
?>

