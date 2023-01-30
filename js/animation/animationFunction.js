/*

 - Execute click depend of current page

*/

    $("#light_room_battlePage").click(fromBattleToLight);
    $("#dark_room_battlePage").click(fromBattleToDark);
    $("#creative_room_battlePage").click(fromBattleToCreative);

    $("#light_room_creativePage").click(fromCreativeToLight);
    $("#dark_room_creativePage").click(fromCreativeToDark);
    $("#battle_room_creativePage").click(fromCreativeToBattle);

    $("#dark_room_lightPage").click(fromLightToDark);
    $("#battle_room_lightPage").click(fromLightToBattle);
    $("#creative_room_lightPage").click(fromLightToCreative);

    $("#battle_room_darkPage").click(fromDarkToBattle);
    $("#creative_room_darkPage").click(fromDarkToCreative);
    $("#light_room_darkPage").click(fromDarkToLight);


/*

 - Execute click depend of current page

*/



/*

 - FROM DARK TO OTHER ROOMS  

*/

    function fromDarkToBattle() {
        cancelClickEvent();
        $("#battle_room_darkPage").addClass("main_animation_setup fromDarkToBattle_battle_room_animation");
        $("#dark_room_darkPage").addClass("main_animation_setup fromDarkToBattle_dark_room_animation");
        $("#creative_room_darkPage").addClass("main_animation_setup fromDarkToBattle_creative_room_animation");
        $("#light_room_darkPage").addClass("main_animation_setup fromDarkToBattle_light_room_animation");
        setTimeout(battleRoom, 1050);
    }

    function fromDarkToCreative() {
        cancelClickEvent();
        $("#creative_room_darkPage").addClass("main_animation_setup fromDarkToCreative_creative_room_animation");
        $("#dark_room_darkPage").addClass("main_animation_setup fromDarkToCreative_dark_room_animation");
        $("#light_room_darkPage").addClass("main_animation_setup fromDarkToCreative_light_room_animation");
        $("#battle_room_darkPage").addClass("main_animation_setup fromDarkToCreative_battle_room_animation");
        setTimeout(creativeRoom, 1050);
    }

    function fromDarkToLight() {
        cancelClickEvent();
        $("#light_room_darkPage").addClass("main_animation_setup fromDarkToLight_light_room_animation");
        $("#dark_room_darkPage").addClass("main_animation_setup fromDarkToLight_dark_room_animation");
        $("#battle_room_darkPage").addClass("main_animation_setup fromDarkToLight_battle_room_animation");
        $("#creative_room_darkPage").addClass("main_animation_setup fromDarkToLight_creative_room_animation");
        setTimeout(lightRoom, 1050);
    }
/*

 - FROM DARK TO OTHER ROOMS  

*/


/*

 - FROM BATTLE TO OTHER ROOMS  

*/
    function fromBattleToLight() {
        cancelClickEvent();
        $("#light_room_battlePage").addClass("main_animation_setup fromBattleToLight_light_room_animation");
        $("#dark_room_battlePage").addClass("main_animation_setup fromBattleToLight_dark_room_animation");
        $("#battle_room_battlePage").addClass("main_animation_setup fromBattleToLight_battle_room_animation");
        setTimeout(lightRoom, 1050);
    }

    function fromBattleToDark() {
        cancelClickEvent();
        $("#dark_room_battlePage").addClass("main_animation_setup fromBattleToDark_dark_room_animation");
        $("#light_room_battlePage").addClass("main_animation_setup fromBattleToDark_light_room_animation");
        $("#creative_room_battlePage").addClass("main_animation_setup fromBattleToDark_creative_room_animation");
        $("#battle_room_battlePage").addClass("main_animation_setup fromBattleToDark_battle_room_animation");
        setTimeout(darkRoom, 1050);
    }

    function fromBattleToCreative() {
        cancelClickEvent();
        $("#creative_room_battlePage").addClass("main_animation_setup fromBattleToCreative_creative_room_animation");
        $("#battle_room_battlePage").addClass("main_animation_setup fromBattleToCreative_battle_room_animation");
        setTimeout(creativeRoom, 1050);
    }

/*

 - FROM BATTLE TO OTHER ROOMS  

*/


/*

 - FROM CREATIVE TO OTHER ROOMS  

*/

    function fromCreativeToLight() {
        cancelClickEvent();
        $("#light_room_creativePage").addClass("main_animation_setup fromCreativeToLight_light_room_animation");
        $("#dark_room_creativePage").addClass("main_animation_setup fromCreativeToLight_dark_room_animation");
        $("#battle_room_creativePage").addClass("main_animation_setup fromCreativeToLight_battle_room_animation");
        $("#creative_room_creativePage").addClass("main_animation_setup fromCreativeToLight_creative_room_animation");
        setTimeout(lightRoom, 1050);
    }

    function fromCreativeToDark() {
        cancelClickEvent();
        $("#dark_room_creativePage").addClass("main_animation_setup fromCreativeToDark_dark_room_animation");
        $("#creative_room_creativePage").addClass("main_animation_setup fromCreativeToDark_creative_room_animation");
        $("#light_room_creativePage").addClass("main_animation_setup fromCreativeToDark_light_room_animation");
        $("#battle_room_creativePage").addClass("main_animation_setup fromCreativeToDark_battle_room_animation");
        setTimeout(darkRoom, 1050);
    }

    function fromCreativeToBattle() {
        cancelClickEvent();
        $("#battle_room_creativePage").addClass("main_animation_setup fromCreativeToBattle_battle_room_animation");
        $("#creative_room_creativePage").addClass("main_animation_setup fromCreativeToBattle_creative_room_animation");
        setTimeout(battleRoom, 1050);
    }

/*

 - FROM CREATIVE TO OTHER ROOMS  

*/



/*

 - FROM LIGHT TO OTHER ROOMS  

*/

    function fromLightToDark() {
        cancelClickEvent();
        $("#dark_room_lightPage").addClass("main_animation_setup fromLightToDark_dark_room_animation");
        $("#battle_room_lightPage").addClass("main_animation_setup fromLightToDark_battle_room_animation");
        $("#creative_room_lightPage").addClass("main_animation_setup fromLightToDark_creative_room_animation");
        $("#light_room_lightPage").addClass("main_animation_setup fromLightToDark_light_room_animation");
        setTimeout(darkRoom, 1050);
    }

    function fromLightToBattle() {
        cancelClickEvent();
        $("#battle_room_lightPage").addClass("main_animation_setup fromLightToBattle_battle_room_animation");
        $("#light_room_lightPage").addClass("main_animation_setup fromLightToBattle_light_room_animation");
        $("#dark_room_lightPage").addClass("main_animation_setup fromLightToBattle_dark_room_animation");
        setTimeout(battleRoom, 1050);
    }

    function fromLightToCreative() {
        cancelClickEvent();
        $("#creative_room_lightPage").addClass("main_animation_setup fromLightToCreative_creative_room_animation");
        $("#light_room_lightPage").addClass("main_animation_setup fromLightToCreative_light_room_animation");
        $("#dark_room_lightPage").addClass("main_animation_setup fromLightToCreative_dark_room_animation");
        $("#battle_room_lightPage").addClass("main_animation_setup fromLightToCreative_battle_room_animation");
        setTimeout(creativeRoom, 1050);
    }


/*

 - FROM LIGHT TO OTHER ROOMS  

*/


function battleRoom() {
    window.location.href = "battle_room.php";
}

function creativeRoom() {
    window.location.href = "creative_room.php";
}

function lightRoom() {
    window.location.href = "test.php"
}

function darkRoom() {
    window.location.href = "dark_room.php";
}

/*

 - CancelClickEvent  

*/

function cancelClickEvent() {
    $("#light_room_battlePage").off('click');
    $("#dark_room_battlePage").off('click');
    $("#creative_room_battlePage").off('click');
    $("#light_room_creativePage").off('click');
    $("#dark_room_creativePage").off('click');
    $("#battle_room_creativePage").off('click');
    $("#dark_room_lightPage").off('click');
    $("#battle_room_lightPage").off('click');
    $("#creative_room_lightPage").off('click');
    $("#battle_room_darkPage").off('click');
    $("#creative_room_darkPage").off('click');
    $("#light_room_darkPage").off('click');
}

/*

 - CancelClickEvent  

*/