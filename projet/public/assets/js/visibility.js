function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.visibility === 'collapse')
        e.style.visibility = 'visible';
    else
        e.style.visibility = 'collapse';
}

function btn_icone(x){
    x.classList.toggle("fa-arrow-down");
}


function check() {
    var val = document.getElementById("check").checked;
    if (document.getElementById("ckeck").checked === true) {
        document.write(val);
    }
}


let hiders = document.querySelectorAll('[data-js="hide"]');

Array.prototype.forEach.call(hiders, function (hider) {
    let hiderID = hider.getAttribute('href');
    let hiderTarget = document.querySelector(hiderID);

    hider.addEventListener('click', function (event) {
        event.preventDefault();

        hiderTarget.classList.toggle('-visible');
    });
});