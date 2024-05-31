let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

widht.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }
}

function togglePopup() {
    var popup = document.getElementById('popupMenu');
    popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
}

// Close the popup if clicked outside
window.onclick = function(event) {
    var popup = document.getElementById('popupMenu');
    if (!event.target.matches('.user-logo') && !event.target.matches('.user-logo img')) {
        if (popup.style.display === 'block') {
            popup.style.display = 'none';
        }
    }
}
