<?php require "queries/news.php" ?>
<?php foreach($data_news as $news) { ?>
<div class="col s12 <?php echo ($news["big"]==1)?"m12 l12":"m6 l5 offset-l1" ?>">
    <div class="card margin border <?php echo ($news["big"]==1)?"center":"" ?>">
        <div class="card-image">
            <img class="border" src=<?php echo $news["img"] ?>>
        </div>
    </div>
    <div class="grey lighten-2  bordertext center  boxwidth">
        <h3 class="titlecard color_title amikoRegular tbMargin"><?php echo $news["title"] ?></h3>
        <p class="paragraph abel color_text"><?php echo $news["text"] ?></p>
    </div>
</div>
<?php } ?>