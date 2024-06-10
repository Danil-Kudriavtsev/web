<div class="<?= $post['class'] ?>">
    <a class="featured-post__card_link" href='/post?id=<?=$post['id'] ?>'></a>
    <div class="featured-post__content">
        <div class="featured-post__content_title"><?= $post['title'] ?></div>
        <div class="featured-post__content_subtitle"><?= $post['subtitle'] ?></div>
        <div class="featured-post__content_footer">
            <span class="featured-post__footer_img"><?= $post['img_modifier'] ?></span>
            <span class="featured-post__footer_author"><?= $post['author'] ?></span>
            <span class="featured-post__footer_data"><?= $post['data'] ?></span>
        </div>
    </div>
</div>