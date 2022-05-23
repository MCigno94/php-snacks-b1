<!-- 
    ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur debitis autem enim. Ipsa beatae sequi tempora vel error? Magnam ab aspernatur nam numquam, molestiae exercitationem eaque minus perferendis consequatur nihil? Delectus velit quam consequuntur repellat recusandae voluptatum ullam beatae incidunt, at odit quaerat, reiciendis illo accusamus magni dolorum voluptatibus inventore, cumque error iste eos distinctio quae? Ex at exercitationem voluptatum a accusamus dolore vero illo in soluta. Nisi impedit numquam non accusamus reprehenderit sequi, explicabo rem quo repellendus maiores delectus itaque velit similique sit deleniti beatae tenetur molestiae laborum dolores fugiat, nemo possimus! Voluptates, architecto cupiditate. Minus dolor officiis ad. Totam repudiandae delectus aliquid voluptatem alias dignissimos voluptas, culpa sit saepe fugit eius molestiae soluta doloribus est ipsum quam porro perspiciatis asperiores tempore quia? Architecto iste eius, quo quia officiis eligendi voluptate eaque consectetur ipsum autem inventore. Possimus architecto similique exercitationem minus maxime cumque dolorem. Doloribus animi illo voluptate labore.";

    $text = explode(".", $paragraph);

    var_dump($text);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

<?php foreach ($text as $single_text) : ?>
    <p> <?php echo $single_text ?> </p>
<?php endforeach; ?>

 </body>
 </html>