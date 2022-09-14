<?php
    include '_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
</head>

<body>
    <?php
        include '../nav/_nav.php'
    ?>
    <?php
        $response = file_get_contents("https://newsapi.org/v2/everything?q=pharma&from=2022-08-26&to=2022-08-26&sortBy=popularity&apiKey=2129952eb6834714b89e46431be0c2fb");
        // $response = file_get_contents("https://newsapi.org/v2/everything?q=pharma&from=2022-07-28&sortBy=publishedAt&apiKey=0bdc9b10c8414cfa934c8414e470f9f8");
        $NewsData = json_decode($response,true);
        // print_r($NewsData);
    ?>
    <div class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">News Feed</h6>

            <?php 
                foreach ($NewsData['articles'] as $News) 
                {
            ?>
            <div class="d-flex text-muted pt-3">
                <img src="<?= $News['urlToImage'] ?> width=" 32" height="32" alt="" class="mx-2">
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark"><?= $News['title'] ?></strong>
                    <?= $News['description'] ?>
                </p>
            </div>
            <?php 
                }
            ?>

            <small class="d-block text-end mt-3">
                <a href="#">All updates</a>
            </small>
        </div>
    </div>
</body>

</html>