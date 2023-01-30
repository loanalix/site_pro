<?php require "queries/activity.php" ?>
<?php foreach($data_activity as $activity) {?>
<!-- Gestion des cards -->
<div class="card borderCard margin">
    <!-- l'image de la card -->
    <div class="card-image ">
        <img src=<?php echo $activity["img"] ?> class="borderCard responsive-img">
        <?php if($activity["id_room"]!=0){ ?>
            <div class="row rowCard">
                <div class="card-title cardLike col s2 offset-s10 offset-l10 center">
                    <i class="material-icons icon red-text like">favorite</i>
                    <p class="Margin center infoCard"><?php echo $activity["nb_like"] ?></p>
                </div>
            </div>
            <div class="row rowCard">
                <div class="card-title col l3 s3 offset-l8 offset-s7 center">
                    <i class="medium icon material-icons">groups</i>
                    <p class="Margin infoCard"><?php echo $activity["nb_player"] ?></p>
                </div>
                <div class="card-title col l2 s5 offset-l10 offset-s8 center">
                    <i class="medium material-icons icon">timer</i>
                    <p class="Margin infoCard"><?php echo $activity["time"] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- le texte de la card -->
<div class="row">
    <div class="grey lighten-2 col s10 offset-s1 bordertext">
        <h3 class="titlecard resp_titleCard color_title amikoRegular"><?php echo $activity["title"] ?> | <span class="roomFont uppercase resp_roomFont poppinsThin"><?php echo $activity["title_room"] ?></span></h3>
        <p class="paragraph resp_paraCard abel color_text test center"><?php echo $activity["description"] ?></p>
        <div class="row valign-wrapper">
            <div class="col s10 m4 l3 offset-s1 offset-m4 offset-l4">
                <a ><img class=" responsive-img" src="img/reserve.png" alt="réservation de VR"></a>
            </div>
            <?php if(empty($_GET["id"])){ ?>
                <div class="col l4 offset-l1">
                    <a href="" class="poppinsExtra color_text transform hide-on-med-and-down">Découvrez la <?php echo $activity["id_room"]==0?"Creative":$activity["title_room"] ?><i
                        class="material-icons">arrow_forward</i></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php } ?>