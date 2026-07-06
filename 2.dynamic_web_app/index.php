 <?php  
           $books = [
             [
                "title"=>"IT",
                "author"=>"Stephen King",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' =>'1986'
             ],
             [
                 "title"=>"Dune",
                "author"=>"Frank Herbert",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' =>'1965'
             ],
              [
                 "title"=>"The Martian",
                "author"=>"Andy Weir",
                'purchaseUrl' => 'http://example.com',
                'releaseYear' =>'2011'
             ]
             
           ];

           $business = [
             'name'=>'Laracasts',
             'cost'=>15,
             'categories'=>['Testing','PHP','Javascript']
           ];

           $author = "Andy Weir";
           $releaseYear = 2011;

         //   function filter($items,$key,$value){
         //      $filterItems = [];

         //      forEach($items as $item){
                 
         //          if($item[$key] == $value){
         //             $filterItems[] = $item;
         //          }
         //       }
         //       return $filterItems;
         //   };

         //   $filterBooks = filter($books,'releaseYear',$releaseYear)

         function filter($items,$fn){
            $filterItems = [];
                forEach($items as $item){
                 
                  if($fn($item)){
                     $filterItems[] = $item;
                  }
               }
               return $filterItems;
           };

      
         $filterBooks = filter($books,function($book){
            return $book['author'] == 'Andy Weir';
         });

         require "index.view.php";
        ?>

