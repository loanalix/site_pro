<?php require "queries/banner.php" ?>
<div class="color_band">
    <div class="container">
        <div class="row bMargin paddingBanner" id="WhatTheSense">
            <div class="col s12 m5 l3 valign-wrapper widthBanner">
                <img src=<?php echo $data_banner[0]["img"] ?> alt="The Sense VR" class="responsive-img">
            </div>
            <div class="col s12 l6 offset-l1">
                <div class="row valign-wrapper abel color_text">
                    <h1 class="widthst col s12"><?php echo $data_banner[0]["title"] ?></h1>
                    <img class="col s4 responsive-img" src=<?php if (empty($_GET["id"])){ 
                                                                    echo "img/logo/theSense2.png";
                                                                }else if(2 <= $_GET["id"] && $_GET["id"] <= 4) {
                                                                    echo $data_banner[0]["title_room"];
                                                                }?> alt="The Sense VR">
                </div>
            <p><?php echo $data_banner[0]["description"] ?></p>
            <?php if (empty($_GET["id"])){
                     ?>
                <a href="./admin_panel.php" class="poppinsExtra color_text uppercase valign-wrapper">Découvrez THE SENSE<i
                    class="material-icons valign-wrapper">arrow_forward</i></a>
            <?php } ?>
            </div>
        </div>
    </div>
</div>