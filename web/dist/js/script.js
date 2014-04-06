var s = Snap("#svg");
function hoverIn() {
    this.attr({
        fill: "#e5e5e5",
        stroke: "0px"
    });
}

function hoverOut() {
    this.attr({
        fill: "none",
        stroke: "url(#path1142_1_)"
    });
}

function press() {
    this.attr({
        fill: "url(#school_a_1_)",
        stroke: "url(#school_a_2_)"
    });
}

function s_s_hoverIn() {
    school.attr({
        fill: "#e5e5e5",
        stroke: "0px"
    });
}

function s_s_press() {
    school.attr({
        fill: "url(#school_a_1_)",
        stroke: "url(#school_a_2_)"
    });
}

function s_t_hoverIn() {
    tourism.attr({
        fill: "#e5e5e5",
        stroke: "0px"
    });
}

function s_t_press() {
    tourism.attr({
        fill: "url(#school_a_1_)",
        stroke: "url(#school_a_2_)"
    });
}

function s_i_hoverIn() {
    info.attr({
        fill: "#e5e5e5",
        stroke: "0px"
    });
}

function s_i_press() {
    info.attr({
        fill: "url(#school_a_1_)",
        stroke: "url(#school_a_2_)"
    });
}

function s_m_hoverIn() {
    maps.attr({
        fill: "#e5e5e5",
        stroke: "0px"
    });
}

function s_m_press() {
    maps.attr({
        fill: "url(#school_a_1_)",
        stroke: "url(#school_a_2_)"
    });
}

school = s.select("#school");
tourism = s.select("#tourism");
maps = s.select("#maps");
info = s.select("#info");
s_school = s.select("#school_s");
s_tourism = s.select("#tourism_s");
s_maps = s.select("#maps_s");
s_info = s.select("#info_s");
school.hover(hoverIn, hoverOut);
school.click(press);
tourism.click(press);
tourism.hover(hoverIn, hoverOut);
maps.click(press);
maps.hover(hoverIn, hoverOut);
info.click(press);
info.hover(hoverIn, hoverOut);
s_school.hover(s_s_hoverIn);
s_school.click(s_s_press);
s_info.hover(s_i_hoverIn);
s_info.click(s_i_press);
s_tourism.hover(s_t_hoverIn);
s_tourism.click(s_t_press);
s_maps.hover(s_m_hoverIn);
s_maps.click(s_m_press);

function clickedS() {
    // Scroll down to 'Position'
    jQuery('html, body').animate({scrollTop: jQuery('#target_school').offset().top}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
}
function clickedT() {
    // Scroll down to 'Position'
    jQuery('html, body').animate({scrollTop: jQuery('#target_tourism').offset().top}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
}
function clickedI() {
    // Scroll down to 'Position'
    jQuery('html, body').animate({scrollTop: jQuery('#target_info').offset().top}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
}
function clickedM() {
    // Scroll down to 'Position'
    jQuery('html, body').animate({scrollTop: jQuery('#target_maps').offset().top}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
}

function clickedTop() {
    // Scroll to 'Position'
    jQuery('html, body').animate({scrollTop: jQuery('#target_top').offset().top}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
}

function footerTop() {

    var offset = jQuery('#g5').offset().top;
    var big = jQuery('#target_top').height();
    var h_foot = big - offset + 1;
    jQuery('#top_footer').height(h_foot);
    jQuery('#grad').height(h_foot);
    jQuery('#svg_foot').height(h_foot);
    jQuery('#top_footer_text').height(h_foot);


    $(".socialButton").css("margin-top", (jQuery('#top_footer_text').height() - 80) / 2);
    $("#logoGenny").css("margin-top", (jQuery('#top_footer_text').height() - 33) / 2);
}

function footerGradient() {

    var height = jQuery('#rect18').attr("height");
    jQuery('#miograd').attr("y1", height + 1 + "px");
}

function blurCoverResize() {
    diffWidth = $("#bg").width() - $("#blurredImg").width();
    diffHeight = $("#bg").height() - $("#blurredImg").height();
    if (diffWidth > diffHeight) {
        $("#blurredImg").css("width", "100%");
        $("#blurredImg").css("height", "initial");
    } else {
        $("#blurredImg").css("height", "100%");
        $("#blurredImg").css("width", "initial");
    }
}

function hlinea() {

    var lineaHeight = jQuery("#linea").height();
    var markerTop = jQuery("#access").offset().top;
    var indexTop = jQuery("#index_color").offset().top;
    var OldIndexTop = indexTop;
    var flag = false;
    var percent = 0;
    var percentOver = false;

    setInterval(function() {

        lineaHeight = jQuery("#linea").height();
        markerTop = jQuery("#access").offset().top;
        indexTop = jQuery("#index_color").offset().top;

        if (indexTop !== OldIndexTop) {
            jQuery("#marker").css("margin-top", (indexTop - markerTop) - (lineaHeight / 2) - 110);
            jQuery("#accessText").css("margin-top", (indexTop - markerTop) - (lineaHeight / 2) - 110);

            if (flag === false) {
                jQuery("#marker").fadeIn(2000);
                jQuery("#accessibile").fadeIn(2000, function() {
                    percentOver = true;
                });

                flag = true;
            }

            if (percent < 100) {
                percent = percent + 1.5;
                jQuery("#percent").text(Math.floor(percent) + "%");
            }

        }


        if (percentOver === true) {
            jQuery("#percent").text("100%");
            jQuery("#closePopup").css("display", "block");
        }


        OldIndexTop = indexTop;
    }, 20);
}

function fbs_click(u, t) {
    window.open('http://www.facebook.com/sharer.php?u=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    return false;
}

function twt_click() {
    window.open("http://twitter.com/home?status=5cm Il portale dell'accessibilità+http://5cm.webwolf.co/", 'sharer', 'toolbar=0,status=0,width=626,height=436');
    return false;
}

function ggl_click(u) {
    window.open("https://plus.google.com/share?url=" + encodeURIComponent(u), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    return false;
}

function pin_click() {
    window.open("http://pinterest.com/pin/create/bookmarklet/?media=http://5cm.webwolf.co/img/info.jpg&url=http://5cm.ebwolf.co&is_video=false&description=Il portale dell'accesibilità", 'sharer', 'toolbar=0,status=0,width=626,height=436');
    return false;
}

$(document).ready(function() {
    $("img").bind("contextmenu", function() {
        return false;
    });
});

$(document).ready(function() {
    $("#closePopup").on("click", function() {
        $("#access").css("display", "none");
    });
});

jQuery(document).ready(function() {

    s.select("#index_color").animate({height: 152}, 2000);

    jQuery("#blurredImg").fadeIn(2000);
    jQuery('svg').find("#school_g").find("path").click(clickedS);
    jQuery('svg').find("#school_s").find("path").click(clickedS);
    jQuery('svg').find("#tourism_g").find("path").click(clickedT);
    jQuery('svg').find("#tourism_s").find("path").click(clickedT);
    jQuery('svg').find("#info_g").find("path").click(clickedI);
    jQuery('svg').find("#info_s").find("path").click(clickedI);
    jQuery('svg').find("#maps_g").find("path").click(clickedM);
    jQuery('svg').find("#maps_s").find("path").click(clickedM);
    jQuery('svg').find("#index_color").click(function() {
        $("#access").css("display", "block");
    });
    jQuery(".top").click(clickedTop);
});

jQuery(window).resize(footerGradient);
jQuery(document).ready(footerGradient);
jQuery(window).resize(footerTop);
jQuery(document).ready(footerTop);
jQuery(window).resize(blurCoverResize);
jQuery(document).ready(blurCoverResize);
jQuery(document).ready(hlinea);


function topMenuBarFollowMouse(evt) {
    jQuery("#top_menu").find("#barra").attr("transform", "translate(" + (evt.clientX - $("#top_menu").offset().left) + ", 0)");
}


$(function() {

    $('li', '#navigation').each(function() {

        var $li = $(this);
        var $a = $('a', $li);
        var width = 30;
        var left = $li.position().left + 15;

        $a.mouseover(function() {


            $('#cursor', '#navigation').animate({
                width: width,
                left: left
            }, 'fast');



        });




    });

});

function Begin() {
    //contenuto da mostrare al primo caricamento
    $("#display").load("info.html");
}

$(document).ready(function() {

    //contenuto che verrà mostrato al click sul tasto mappe
    $("#maps_g").click(function() {
        $("#display").load("maps.html");
    });
    $("#maps_s").click(function() {
        $("#display").load("maps.html");
    });

    //contenuto che verrà mostrato al click sul tasto school
    $("#school_g").click(function() {
        $("#display").load("school.html");
    });
    $("#school_s").click(function() {
        $("#display").load("school.html");
    });


    //contenuto che verrà mostrato al click sul tasto info
    $("#info_g").click(function() {
        $("#display").load("info.html");
    });
    $("#info_s").click(function() {
        $("#display").load("info.html");
    });

    //contenuto che verrà mostrato al click sul tasto tourism
    $("#tourism_g").click(function() {
        $("#display").load("tourism.html");
    });
    $("#tourism_s").click(function() {
        $("#display").load("tourism.html");
    });


    //contenuto che verrà mostrato al click sul tasto indice
    $("#indice").click(function() {
        $("#display").load("accessibilita.html");
    });
    $("#indice_s").click(function() {
        $("#display").load("accessibilita.html");
    });
});