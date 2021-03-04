

function test_responsive(){
    var Lscreen=screen.width;

    if(Lscreen<1200) {
        document.getElementById('responsive-js').className = "col-md-6 col-lg-5 pt-4 pb-4 float-left"
    }
}