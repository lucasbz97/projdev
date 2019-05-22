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
    var pass = pass2.substring(0, 8);
    var btn_submit = document.getElementById('submit');
    btn_submit.disabled = true;
    btn_submit.style.opacity = "0.5";
    if (document.getElementById(pass).value == document.getElementById(pass2).value) {
        btn_submit.disabled = false;
        btn_submit.style.opacity = "1";
    }
}