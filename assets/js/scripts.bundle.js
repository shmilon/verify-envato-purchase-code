"use strict";

var ScriptsBundle = ScriptsBundle || {};

$(function() {
    ScriptsBundle = {
        init: function() {
            ScriptsBundle.pageLoader();
            ScriptsBundle.initTooltip();
            ScriptsBundle.headerEvent();
            ScriptsBundle.themeDark();
        },

        pageLoader: function () {
            var $loader = $('#pb_loader');
            $loader.addClass('pb-loaded').delay(500).fadeOut();
        },

        /*!
         * Initialize data function
         *---------------------------------------------------*/
        initTooltip() {
            var $dataTooltip = $('[data-bs-toggle="tooltip"]');
            
            if ($dataTooltip.length) {
                $dataTooltip.tooltip();
            }
        },

        headerEvent: function () {
            var $hamburger = $('#pb_hamburger');
            var $icon = $('#pb_search_icon');
            var $body = $('body');
            var show = 'show';
            var hideSidebar = 'pb-hide-sidebar';

            $hamburger.on('click', function () {
                $body.toggleClass(hideSidebar);
            });
            
            $icon.on('click', function () {
                $(this).parent().toggleClass(show);
            });
        },

        themeDark: function() {
            var $dark = $('#pb_dark_mode');
            var dark = 'pb-theme-dark';

            if (localStorage.getItem('dark') === 'true') {
                $body.addClass(dark);
                $dark.attr('checked', true);
            }

            $dark.on('change', function(event) {
                if (event.target.checked) {
                    $body.addClass(dark);
                    localStorage.setItem('dark', true);
                } else {
                    $body.removeClass(dark);
                    localStorage.setItem('dark', false);
                }
            });
        }
    };

    var $body = $('body');
    
    $(document).ready(ScriptsBundle.init);
});