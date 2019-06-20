var xhr = new XMLHttpRequest();
xhr.onloadend = function () {
    if (xhr.status !== 200) {
        console.error("error getting signups - " + xhr.status);
    }
};

xhr.open('GET', 'getSignups.php', true);
xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
xhr.onload = function() {
    if (xhr.status === 200) {
        var signups = JSON.parse(xhr.responseText).body;
        var tableBody = "";
        for (var i = 0; i < signups.length; i++) {
            tableBody += "<tr>" +
                        "   <td>" + signups[i].SID + "</td>" +
                        "   <td>" + signups[i].name + "</td>" +
                        "   <td>" + signups[i].email + "</td>" +
                        "   <td>" + signups[i].created + "</td>" +
                        "</tr>";
        }

        $('#signupsTableBody').html(tableBody);
    }
};
xhr.send();