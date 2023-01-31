jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 200) {
            var paged = $('.current').next().data('paged');
            if (paged) {
                $.ajax({
                    url: wp_ajax_load_more_posts.ajax_url,
                    type: 'post',
                    data: {
                        action: 'load_more_posts',
                        paged: paged
                    },
                    success: function(res
