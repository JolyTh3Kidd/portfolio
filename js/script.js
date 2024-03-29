// Check what Mobile platform user uses

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows());
    }
};


// Check if user uses Mobile platform or PC

if (isMobile.any()) {
    document.body.classList.add('_touch');

    let menuArrows = document.querySelectorAll('.menu__arrow');
    if (menuArrows.length > 0) {
        for (let index = 0; index < menuArrows.length; index++) {
            const menuArrow = menuArrows[index];
            menuArrow.addEventListener("click", function (e) {
                menuArrow.parentElement.classList.toggle('_active');  
            });
        }
    }

} else {
    document.body.classList.add('_pc');
}


// Menu burger

const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
if (iconMenu) {
    iconMenu.addEventListener("click", function(e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}


// Scroll down by the click

const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
if (menuLinks.length > 0) {
    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick);
    });

    function onMenuLinkClick(e) {
        const menuLink = e.target;
        if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
            const gotoBlock = document.querySelector(menuLink.dataset.goto);
            const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;

            if (iconMenu.classList.contains('_active')) {
                document.body.classList.remove('_lock');
                iconMenu.classList.remove('_active');
                menuBody.classList.remove('_active');
            }

            window.scrollTo({
                top: gotoBlockValue,
                behavior: "smooth"
            });
            e.preventDefault();
        }
    }
}



document.getElementById('About').onclick = function() {
    var i = 'Kurmet Rakhatov - About';
    document.title = i;
}
document.getElementById('Works').onclick = function() {
    var i = 'Kurmet Rakhatov - Works';
    document.title = i;
}
document.getElementById('Contacts').onclick = function() {
    var i = 'Kurmet Rakhatov - Contacts';
    document.title = i;
}
document.getElementById('Portfolio').onclick = function() {
    var i = 'Kurmet Rakhatov - Portfolio';
    document.title = i;
}

function Telegram() {
    alert("@mp3waves");
}

document.getElementById('AboutRU').onclick = function() {
    var i = 'Курмет Рахатов - Обо мне';
    document.title = i;
}
document.getElementById('WorksRU').onclick = function() {
    var i = 'Курмет Рахатов - Работы';
    document.title = i;
}
document.getElementById('ContactsRU').onclick = function() {
    var i = 'Курмет Рахатов - Контакты';
    document.title = i;
}
document.getElementById('portfolioRU').onclick = function() {
    var i = 'Курмет Рахатов - Портфолио';
    document.title = i;
}