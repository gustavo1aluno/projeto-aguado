document.querySelectorAll('a[href^="#"]').forEach(ancora => {
    ancora.addEventListener('click', function(evento) {
        evento.preventDefault();
        const elementoAlvo = document.querySelector(this.getAttribute('href'));
        elementoAlvo.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

const botaoVoltarAoTopo = document.getElementById('voltarAoTopo');

window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        botaoVoltarAoTopo.style.display = "block";
    } else {
        botaoVoltarAoTopo.style.display = "none";
    }
};

botaoVoltarAoTopo.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});