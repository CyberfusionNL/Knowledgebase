(function($, window, document) {

    "use strict";

    $(function() {

        var grid = $(".grid");

        var paralax = function() {
            var st = $(window).scrollTop();
            grid.css("background-position", "center " + (st / -2) + "px");
        };

        // events
        $(".hamburger").click(function() {
            $(".nav").addClass("open");
            $(".close").addClass("open");
        });
        $("header .close, section").click(function() {
            $(".nav").removeClass("open");
            $(".close").removeClass("open");
        });

        $(window).scroll(function() {
            paralax();
        });

        $("select").change(function () {
            $(this).addClass("changed");

            console.log($(this).find("option:selected").text().toLowerCase().indexOf("anders"));

           if ($(this).find("option:selected").text().toLowerCase().indexOf("anders") !== -1) {
               console.log("test");
               $("input[name=anders]").removeClass("hidden").prop("disabled", false);
           } else {
               $("input[name=anders]").addClass("hidden").prop("disabled", true);
           }
        });

        $(".features .btn-link").click(function() {
            if ($(this).hasClass("open")) {
                $(this).removeClass("open");
            } else {
                $(this).addClass("open");
            }
        });

        $(".sidebar-link").click(function() {
            if ($(this).hasClass("open")) {
                $(this).removeClass("open");
            } else {
                $(this).addClass("open");
            }
        });

        $(".nav-link").click(function() {
            if ($(this).hasClass("collapsed")) {
                $(this).removeClass("collapsed");
            } else {
                $(".nav-link.collapsed").each(function() {
                    $(this).removeClass("collapsed");
                    $(this).removeClass("active");
                });
                $(this).addClass("collapsed");
            }



        });
        $(".nav-link.collapsed .container, section").click(function() {
            $(".nav-link").each(function() {
                $(this).removeClass("collapsed");
            });
        });

        // init
        paralax();

    });


}(window.jQuery, window, document));
