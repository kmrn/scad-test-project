(function () {
    'use strict';

    window.onload = function() {
        var elevator = new Elevator({
            element: document.querySelector('.elevator'),
            mainAudio: 'js/music/elevator.mp3',
            endAudio: 'js/music/ding.mp3'
        });

        if ($(this).scrollTop() !== 0) {
            $('.elevator').show();
        }
    }

    $('#contactForm').submit(function (event) {
        var self = this; 
        event.preventDefault();
        if (self.checkValidity() === false) {
            event.stopPropagation();
            self.classList.add('was-validated');
        }
        else {
            var formData = {
                "name": $('#inputName').val(),
                "email": $('#inputEmail').val(),
                "message": $('#textareaMessage').val()
            };
            var xhr = new XMLHttpRequest();
    
            xhr.open('POST', 'contactForm.php', true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

            xhr.onloadend = function () {
                if (xhr.status === 200) {
                    self.classList.remove('was-validated');
                    self.reset();
                    $('#contactSubmitButton').popover({
                        content: "Your message was sent! Thank you for contacting us.",
                        trigger: "manual",
                        placement: "top"
                    }).popover('show');
                } else {
                    $('#contactSubmitButton').popover({
                        content: "There was an error sending your message. Contact us directly at web@scad.edu.",
                        trigger: "manual",
                        placement: "top"
                    }).popover('show');
                }

                setTimeout(function () { 
                    $('#contactSubmitButton').popover('hide');
                }, 4000);
            };

            xhr.send(JSON.stringify(formData));
        }
    });

    $('.portfolio-link-container').click(function (event) {
        event.preventDefault();

        $('#portfolioModal').on('show.bs.modal', function (showModalEvent) {
            var $button = $(event.currentTarget);
            var imageLink = $button.find('.portfolio-image').attr('src');
            var $portfolioImage = $(showModalEvent.currentTarget).find('.portfolio-modal-image');

            $portfolioImage.attr('src', imageLink);
        }).modal();
    });

    $('#isteCarousel').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2500,
        prevArrow: '',
        nextArrow: '',
        customPaging: function(slider, i) {
            return $('<div class="logo-carousel-dot"></div>');
        },
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 445,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })

    $('a[href*="#"]').not('[href="#"]').click(function (event) {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
            && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = (target.length) 
                    ? target 
                    : $('[name=' + this.hash.slice(1) + ']');
            
            if (target.length) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: (window.matchMedia('(min-width: 768px)').matches)
                                ? target.offset().top - 60
                                : target.offset().top
                }, 1000, function() {
                    var $target = $(target);
                    $target.focus();

                    if ($target.is(":focus")) {
                        return false;
                    } 
                    else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    }
                });
            }
        }
    });

    $('.nav-link').click(function (event) {
        $('.navbar-collapse').collapse('hide');
    });
    
    var $elevator = $('.elevator');
    $(document).scroll(function () {
        var scrollHeight = $(window).scrollTop();
        if (scrollHeight === 0 && $elevator.is(":visible")) {
            $elevator.fadeOut(400);
        }
        if (scrollHeight !== 0 && $elevator.is(':hidden')) {
            $elevator.fadeIn(400);
        }
    });
})();
