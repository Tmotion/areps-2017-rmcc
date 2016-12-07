jQuery(document).ready(function ($) {

    var $toggle = $('#nav-toggle');
    var $menu = $('#nav-menu');

    $toggle.click(function() {
        $(this).toggleClass('is-active');
        $menu.toggleClass('is-active');
    });

    $('.modal-button').click(function() {
        var target = $(this).data('target');
        $('html').addClass('is-clipped');
        $(target).addClass('is-active');
    });

    $('.modal-background, .modal-close').click(function() {
        $('html').removeClass('is-clipped');
        $(this).parent().removeClass('is-active');
    });

    $('.modal-card-head .delete, .modal-card-foot .button').click(function() {
        $('html').removeClass('is-clipped');
        $('#modal-ter').removeClass('is-active');
    });

    var $highlights = $('.highlight');

    $highlights.each(function() {
        var $el = $(this);
        var copy = '<button class="copy">Copy</button>';
        var expand = '<button class="expand">Expand</button>';
        $el.append(copy);

        if ($el.find('pre code').innerHeight() > 600) {
            $el.append(expand);
        }
    });

    var $highlightButtons = $('.highlight .copy, .highlight .expand');

    $highlightButtons.hover(function() {
        $(this).parent().css('box-shadow', '0 0 0 1px #ed6c63');
    }, function() {
        $(this).parent().css('box-shadow', 'none');
    });

    $('.highlight .expand').click(function() {
        $(this).parent().children('pre').css('max-height', 'none');
    });

    $('.smooth-scroll').smoothScroll();

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

});

bauten(
    { 'className': 'ruby-dot-green', 'style': 'dot', 'color': '#00985b' },
    { 'className': 'ruby-dot-white', 'style': 'dot', 'color': '#fff' }
);

var contact = new Vue({
    el: '#contact',
    data: {
        name: '',
        email: '',
        message: '',
        errors: {}
    },
    methods: {
        submit: function(e) {
            e.preventDefault();
            this.errors = {};
            var $button = $('.button-submit');
            $button.addClass('is-loading');

            var _this = this;
            $.ajax({
                type: "POST",
                url: "/api/contactus",
                dataType: "json",
                data: {
                    name: _this.name,
                    email: _this.email,
                    message: _this.message
                }
            })
            .done(function(response) {
                _this.name = '';
                _this.email = '';
                _this.message = '';

                var bar = new $.peekABar({
                    backgroundColor: '#F39800',
                    delay: 5000,
                    html: '<b>'+response.title+'</b><br />'+response.message,
                    padding: '2em',
                    autohide: true
                });
                bar.show();
            })
            .fail(function(data) {
                var response = $.parseJSON(data.responseText);

                _this.errors = _.reduce(response.error.validation, function(result, value, key) {
                    result[key] = value[0];
                    return result;
                }, {});
            })
            .always(function() {
                $button.removeClass('is-loading');
            });
        }
    }
});