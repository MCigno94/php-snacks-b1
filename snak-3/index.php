<!-- 
    ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

 -->

 <?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $key => $value) {
    //var_dump($key);
    foreach ($value as $key => $post) {
        //var_dump($post);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNAK-3</title>
    
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <?php foreach ($posts as $key => $value) : ?>
        <h2> <?= $key; ?> </h2>
        <div class="row row-cols-3 g-3">
            <?php foreach ($value as $post) : ?>
                <div class="cols">
                <div class="card">
                    <img src="https://picsum.photos/200/300" alt="">
                    <div class="card-body">
                            <h4> <?= $post['title']; ?></h4>
                            <p> <?= $post['author']; ?></p>
                            <p> <?= $post['text']; ?></p>
                        </div>
                    </div>
                </div>
                <!-- /.cols -->
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
            <?php endforeach; ?>
        </div>
                

</body>
</html>