/***************GENERAL***********************/

//map les bouttons pour changer de pages
function mapScrolls(btn, target) {
    document.getElementById(btn).addEventListener("click", function() {
        document.getElementById(target).scrollIntoView({ behavior: "smooth" });
    });
}
mapScrolls("scroll-down-1", "target-down-1");
mapScrolls("scroll-up-1", "target-up-1");

function togglePopUp(infoIcon, popUp, crossIcon) {
    let info = document.querySelector(infoIcon);
    let card = document.querySelector(popUp);
    let cross = document.querySelector(crossIcon);
    info.addEventListener('click', function() {
        card.classList.remove('none');
    })
    cross.addEventListener('click', function() {
        card.classList.add('none');
    })
}



/***************LANDING***********************/

togglePopUp('.alternance', '.alter-pop', '#cross-alter');
togglePopUp('.stage', '.stage-pop', '#cross-stage');
togglePopUp('.stage', '.stage-pop', '.alternance');
togglePopUp('.alternance', '.alter-pop', '.stage');

/***************PROJECTS**********************/


togglePopUp('#info-dnt', '#card-dnt', '#cross-dnt');
togglePopUp('#info-dnt', '#card-dnt', '#info-cc');
togglePopUp('#info-dnt', '#card-dnt', '#info-ml');
togglePopUp('#info-dnt', '#card-dnt', '#info-bl');


togglePopUp('#info-cc', '#card-cc', '#cross-cc');
togglePopUp('#info-cc', '#card-cc', '#info-dnt');
togglePopUp('#info-cc', '#card-cc', '#info-ml');
togglePopUp('#info-cc', '#card-cc', '#info-bl');


togglePopUp('#info-ml', '#card-ml', '#cross-ml');
togglePopUp('#info-ml', '#card-ml', '#info-dnt');
togglePopUp('#info-ml', '#card-ml', '#info-cc');
togglePopUp('#info-ml', '#card-ml', '#info-bl');


togglePopUp('#info-bl', '#card-bl', '#cross-bl');
togglePopUp('#info-bl', '#card-bl', '#info-dnt');
togglePopUp('#info-bl', '#card-bl', '#info-cc');
togglePopUp('#info-bl', '#card-bl', '#info-ml');
