const menuItems = document.querySelectorAll('.menu a');

menuItems.forEach(item => {
    item.addEventListener('click', scrollToIdOnClick);
})

function scrollToIdOnClick(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop;

    window.scroll({
        top: to,
        behavior: 'smooth',
    });
}


function toggleMenu() {
    let menuMobile = document.getElementById('menu-mobile');

    if(menuMobile.style.display == 'block') {
        menuMobile.style.display = 'none';
    }else {
        menuMobile.style.display = 'block';
    }
}

function scrollToUp() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

function btnDinamico() {
    if(window.scrollY === 0) {
        document.querySelector('.btn-scroll').style.display = 'none';
    }else {
        document.querySelector('.btn-scroll').style.display = 'block';
    }
    
}

window.addEventListener('scroll', btnDinamico);