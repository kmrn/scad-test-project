(function () {
    'use strict';

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
            var button = $(event.currentTarget);
            var imageLink = button.find('.portfolio-image').attr('src');
            var portfolioImage = $(showModalEvent.currentTarget).find('.portfolio-modal-image');

            portfolioImage.attr('src', imageLink);
        }).modal();
    });

    window.onload = function() {
        var elevator = new Elevator({
            element: document.querySelector('.elevator'),
            mainAudio: 'js/music/elevator.mp3',
            endAudio: 'js/music/ding.mp3'
        });
    }

})();
