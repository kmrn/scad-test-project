
$('#contactForm').submit(function (event) {
    event.preventDefault();

    var formData = {
        "name": $('#inputName').val(),
        "email": $('#inputEmail').val(),
        "message": $('#textareaMessage').val()
    };
    var xhr = new XMLHttpRequest();
    xhr.onloadend = function () {
        if (xhr.status === 200) {
            console.log("success");
        } else {
            console.log("NOPE");
        }
    };

    xhr.open('POST', 'contactForm.php', true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
    xhr.send(JSON.stringify(formData));
});
