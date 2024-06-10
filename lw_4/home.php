<?php
$postFeatured = [
    [ 
        'id' => 1, 
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'img_modifier' => '<img src="images/aut1.png" alt="author">',
        'author' => 'Mat Vogels',
        'data' => 'September 25, 2015',
        'class' => 'featured-post__card featured-post__card_first-item',
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => '<img src="images/aut2.png" alt="author">',
        'author' => 'William Wong',
        'data' => 'September 25, 2015',
        'class' => 'featured-post__card featured-post__card_second-item',
    ]
];
$postRecent = [
    [
        'id' => 3,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone.',
        'img_modifier' => '<img src="images/aut2.png" alt="author">',
        'main_img' => '<img src="images/03.png" alt="balloons">',
        'author' => 'William Wong',
        'data' => '9/25/2015',
        'class' => 'most-recent__card first-card',
    ], 
    [
        'id' => 4,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
        'img_modifier' => '<img src="images/aut1.png" alt="author">',
        'main_img' => '<img src="images/04.png" alt="bridge">',
        'author' => 'Mat Vogels',
        'data' => '9/25/2015',
        'class' => 'most-recent__card second-card',
    ],
    [
        'id' => 5,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_modifier' => '<img src="images/aut1.png" alt="author">',
        'main_img' => '<img src="images/05.png" alt="bridge">',
        'author' => 'Mat Vogels',
        'data' => '9/25/2015',
        'class' => 'most-recent__card third-card',
    ],
    [
        'id' => 6,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_modifier' => '<img src="images/aut2.png" alt="author">',
        'main_img' => '<img src="images/06.png" alt="bridge">',
        'author' => 'Mat Vogels',
        'data' => '9/25/2015',
        'class' => 'most-recent__card fourth-card',
    ],
    [
        'id' => 7,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_modifier' => '<img src="images/aut1.png" alt="author">',
        'main_img' => '<img src="images/07.png" alt="bridge">',
        'author' => 'Mat Vogels',
        'data' => '9/25/2015',
        'class' => 'most-recent__card fith-card',
    ],
    [
        'id' => 8,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_modifier' => '<img src="images/aut1.png" alt="author">',
        'main_img' => '<img src="images/08.png" alt="bridge">',
        'author' => 'Mat Vogels',
        'data' => '9/25/2015',
        'class' => 'most-recent__card sixth-card',
    ],   
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/home.css">
    <title>Let's do it together</title>
</head>

<body>
    <header class="main-header">
        <div class="main-header__container">
            <div class="main-header__nav navigation">
                <a href="/home.php"><span class="navigation__logo">Escape.</span></a>
                <ul class="navigation__list">
                    <li><a class="navigation__item" href="/home.php">HOME</a></li>
                    <li><a class="navigation__item" href="#">CATEGORIES</a></li>
                    <li><a class="navigation__item" href="#">ABOUT</a></li>
                    <li><a class="navigation__item" href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <div class="heading">
            <h1 class="heading__main">Let's do it together.</h1>
            <h3 class="heading__small">We travel the world in search of stories. Come along for the ride.</h3>
            <button type="button" name="popup-button" class="heading__button">View Latest Posts</button>
        </div>
    </header>
    <main>
        <div class="main-line">
            <ul class="main-line__nav">
                <li><a class="main-line__items item-1" href="#">Nature</a></li>
                <li><a class="main-line__items item-2" href="#">Photography</a></li>
                <li><a class="main-line__items item-3" href="#">Relaxation</a></li>
                <li><a class="main-line__items item-4" href="#">Vacation</a></li>
                <li><a class="main-line__items item-5" href="#">Travel</a></li>
                <li><a class="main-line__items item-6" href="#">Adventure</a></li>
            </ul>
        </div>
        <div class="featured-post">
            <div class="featured-post__title post-title">Featured Post</div>
            <div class="featured-post__line post-line"></div>
            <div class="featured-post__cards">
            <?php 
                foreach ($postFeatured as $post) {
                include 'post-preview-first.php';
                 }
            ?>
            </div>
        </div>
        <div class="most-recent">
            <div class="most-recent__header">
                <div class="most-recent__title post-title">Most Recent</div>
                <div class="most-recent__line post-line"></div>
            </div>
            <div class="most-recent__content">
            <?php 
                foreach ($postRecent as $post) {
                include 'post-preview-second.php';
                }
            ?>
            </div>
        </div>
    </main>
    <footer class="main-footer">
        <div class="main-footer__nav navigation">
            <a href="#"><span class="navigation__logo">Escape.</span></a>
            <ul class="navigation__list">
                <li><a class="navigation__item" href="#">HOME</a></li>
                <li><a class="navigation__item" href="#">CATEGORIES</a></li>
                <li><a class="navigation__item" href="#">ABOUT</a></li>
                <li><a class="navigation__item" href="#">CONTACT</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>