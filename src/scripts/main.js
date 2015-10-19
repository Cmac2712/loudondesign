var mainNavButton = document.querySelector('#mainNav-button');

// mainNavButton.addEventListener('click', function (e) {
//     var togglee = document.getElementById(this.dataset.toggle);
//     
//     this.classList.toggle('active'); 
//     togglee.classList.toggle('open'); 
//     e.preventDefault(); 
// });

mainNavButton.addEventListener('click', function (e) {
    var contactTray = $('.contact--outer');

    console.log(contactTray);
    e.preventDefault();
});

