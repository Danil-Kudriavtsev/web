<div class="<?= $post['class'] ?>">
    <a class="most-recent__card_link" href='/post?id=<?=$post['id'] ?>'></a>
    <div class="most-recent__card_picture"><?= $post['main_img'] ?></div>
    <div class="most-recent__card_text">
        <div class="most-recent__card_title"><?= $post['title'] ?></div>
        <div class="most-recent__card_subtitle"><?= $post['subtitle'] ?></div>
    </div>
    <div class="most-recent__card_border"></div>
    <div class="most-recent__card_footer">
        <span class="most-recent__footer_img"><?= $post['img_modifier'] ?></span>
        <span class="most-recent__footer_author"><?= $post['author'] ?></span>
        <span class="most-recent__footer_data"><?= $post['data'] ?></span>
    </div>
</div>
