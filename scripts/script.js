
/* General
---------------- */ 

// Reveal effect
$('.reveal-up').css({
    'opacity': '0',
    'transform': 'translateY(30px)',
    'transition': 'all 0.8s ease-out'
});

setTimeout(function() {
    $('.reveal-up').css({
        'opacity': '1',
        'transform': 'translateY(0)'
    });
}, 200);


/* Home 
----------------- */

if ($('#home').length > 0 ) {
    new Typed('#typed', {
        strings: [
            'Engenheiro de software', 
            'Especialista em E-commerce', 
            'Especialista de Automação'
        ],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true
    });
}
