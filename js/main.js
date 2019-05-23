//mostrar os elementos do dropdown
function dropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function numericUpDown() {
    var i = 0;
    var o = 0;
    for (i; i < 5; i++) {
        o += parseInt($("#frase-id" + i).val());
        if (o > 5) {
            event.target.value -= 1;
            o = 0;
        }
    }
}

function passwordValidate() {
    var pass2 = event.target.id;
    var pass = pass2.substring(0, 13);
    var btn_submit = document.getElementById('submit');
    btn_submit.disabled = true;
    btn_submit.style.opacity = "0.5";
    if (document.getElementById(pass).value == document.getElementById(pass2).value) {
        btn_submit.disabled = false;
        btn_submit.style.opacity = "1";
    }
}

function AlertMessage(AlertJson) {
    if (AlertJson != undefined) {
        if (AlertJson['alert'] == 0) {
            var objAlert = document.getElementById('alerterror');
            objAlert.innerHTML = AlertJson['mensagem'];
            ShowAlert(objAlert);
        } else if (AlertJson['alert'] == 1) {
            var objAlert = document.getElementById('alertsuccess');
            objAlert.innerHTML = AlertJson['mensagem'];
            ShowAlert(objAlert);
        }
    }
}

function ShowAlert(objAlert) {
    objAlert.style.display = 'block';
    $('#' + objAlert.id).animate({
        opacity: '1'
    }, 2500, function() {
        $('#' + objAlert.id).animate({
            opacity: '0'
        }, 1000)
    });
}