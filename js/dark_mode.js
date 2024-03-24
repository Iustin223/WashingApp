const dark = document.getElementById("dark");
const body = document.querySelector('body');
const home1=document.querySelector('home-hero-heading')

dark.addEventListener('click', function() {
     
    this.classList.toggle('bi-brightness-high-fill');
    
     if (this.classList.contains('bi-brightness-high-fill')) {
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    } else {
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }

    
});




 