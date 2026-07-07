<?php require("partials/head.php"); ?>


    
<?php require("partials/banner.php"); ?>
<h1>Recommended Books</h1>
       <ul>
          <?php foreach($filterBooks  as $book) :?>  
             
      
             <li>
                <a href="<?=$book['purchaseUrl']  ?> ?>">
                    <?= $book['title'] ;?> <?=  $book['releaseYear']   ?>
                </a>
             </li>
            
           
          <?php    endforeach ?>

          <ul>
            <?php foreach($business['categories'] as $category) :?>
                <li><?= $category ?></li>
            <?php endforeach; ?>
          </ul>
          

       </ul>
    
      

<?php require("partials/footer.php"); ?>