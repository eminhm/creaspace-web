// Mouse Parallax
$.fn.parallax = function(resistance, mouse) {
    $el = $(this);
    TweenLite.to($el, 0.2, {
        x: -((mouse.clientX - window.innerWidth / 2) / resistance),
        y: -((mouse.clientY - window.innerHeight / 2) / resistance)
    });
};

$(document).mousemove(function(e) {
    $(".cloud-A").parallax(60, e);
    $(".cloud-B").parallax(75, e);
    $(".cloud-C").parallax(90, e);
});


// Horizontal Scroll - Allow Mouse Wheel
$(function() {
    $(".horizontal-scroll").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 3);
        event.preventDefault();
    });
});


// Animation Pure JS
var Animation = function ({ offset } = { offset: 10 }) {
    var _elements;

    // Define a dobra superior, inferior e laterais da tela
    var windowTop = offset * window.innerHeight / 100;
    var windowBottom = window.innerHeight - windowTop;
    var windowLeft = 0;
    var windowRight = window.innerWidth;

    function start(element) {
        // Seta os atributos customizados
        element.style.animationDelay = element.dataset.animationDelay;
        element.style.animationDuration = element.dataset.animationDuration;
        // Inicia a animacao setando a classe da animacao
        element.classList.add(element.dataset.animation);
        // Seta o elemento como animado
        element.dataset.animated = "true";
    }

    function isElementOnScreen(element) {
        // Obtem o boundingbox do elemento
        var elementRect = element.getBoundingClientRect();
        var elementTop =
            elementRect.top + parseInt(element.dataset.animationOffset) ||
            elementRect.top;
        var elementBottom =
            elementRect.bottom - parseInt(element.dataset.animationOffset) ||
            elementRect.bottom;
        var elementLeft = elementRect.left;
        var elementRight = elementRect.right;

        // Verifica se o elemento esta na tela
        return (
            elementTop <= windowBottom &&
            elementBottom >= windowTop &&
            elementLeft <= windowRight &&
            elementRight >= windowLeft);

    }

    // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
    function checkElementsOnScreen(els = _elements) {
        for (var i = 0, len = els.length; i < len; i++) {
            // Passa para o proximo laço se o elemento ja estiver animado
            if (els[i].dataset.animated) continue;

            isElementOnScreen(els[i]) && start(els[i]);
        }
    }

    // Atualiza a lista de elementos a serem animados
    function update() {
        _elements = document.querySelectorAll(
            "[data-animation]:not([data-animated])");

        checkElementsOnScreen(_elements);
    }

    // Inicia os eventos
    window.addEventListener("load", update, false);
    window.addEventListener("scroll", () => checkElementsOnScreen(_elements), { passive: true });
    window.addEventListener("resize", () => checkElementsOnScreen(_elements), false);

    // Retorna funcoes publicas
    return {
        start,
        isElementOnScreen,
        update };

};

// Initialize
var options = {
    offset: 20 //percentage of window
};
var animation = new Animation(options);








// Audio
var music = document.getElementById('music'); // id for audio element
var duration = music.duration; // Duration of audio clip, calculated here for embedding purposes
var pButton = document.getElementById('pButton'); // play button
var playhead = document.getElementById('playhead'); // playhead
var timeline = document.getElementById('timeline'); // timeline

// timeline width adjusted for playhead
var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

// play button event listenter
pButton.addEventListener("click", play);

// timeupdate event listener
music.addEventListener("timeupdate", timeUpdate, false);

// makes timeline clickable
timeline.addEventListener("click", function(event) {
    moveplayhead(event);
    music.currentTime = duration * clickPercent(event);
}, false);

// returns click as decimal (.77) of the total timelineWidth
function clickPercent(event) {
    return (event.clientX - getPosition(timeline)) / timelineWidth;
}

// makes playhead draggable
playhead.addEventListener('mousedown', mouseDown, false);
window.addEventListener('mouseup', mouseUp, false);

// Boolean value so that audio position is updated only when the playhead is released
var onplayhead = false;

// mouseDown EventListener
function mouseDown() {
    onplayhead = true;
    window.addEventListener('mousemove', moveplayhead, true);
    music.removeEventListener('timeupdate', timeUpdate, false);
}

// mouseUp EventListener
// getting input from all mouse clicks
function mouseUp(event) {
    if (onplayhead == true) {
        moveplayhead(event);
        window.removeEventListener('mousemove', moveplayhead, true);
        // change current time
        music.currentTime = duration * clickPercent(event);
        music.addEventListener('timeupdate', timeUpdate, false);
    }
    onplayhead = false;
}
// mousemove EventListener
// Moves playhead as user drags
function moveplayhead(event) {
    var newMargLeft = event.clientX - getPosition(timeline);

    if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
        playhead.style.marginLeft = newMargLeft + "px";
    }
    if (newMargLeft < 0) {
        playhead.style.marginLeft = "0px";
    }
    if (newMargLeft > timelineWidth) {
        playhead.style.marginLeft = timelineWidth + "px";
    }
}

// timeUpdate
// Synchronizes playhead position with current point in audio
function timeUpdate() {
    var playPercent = timelineWidth * (music.currentTime / duration);
    playhead.style.marginLeft = playPercent + "px";
    if (music.currentTime == duration) {
        pButton.className = "";
        pButton.className = "play";
    }
}

//Play and Pause
function play() {
    // start music
    if (music.paused) {
        music.play();
        // remove play, add pause
        pButton.className = "";
        pButton.className = "pause";
    } else { // pause music
        music.pause();
        // remove pause, add play
        pButton.className = "";
        pButton.className = "play";
    }
}

// Gets audio file duration
music.addEventListener("canplaythrough", function() {
    duration = music.duration;
}, false);

// getPosition
// Returns elements left position relative to top-left of viewport
function getPosition(el) {
    return el.getBoundingClientRect().left;
}


// Mute/Ummute Toggle
$(".audio-off").hide();
$("video").prop('muted', true);
$("#mute-video").click( function (){
    if( $("video").prop('muted') ) {
        $("video").prop('muted', false);
        $(".audio-on").hide();
        $(".audio-off").show();
    } else {
        $("video").prop('muted', true);
        $(".audio-on").show();
        $(".audio-off").hide();
    }
});

lightGallery(document.getElementById('lightgallery'));
lightGallery(document.getElementById('lightgallery-1'));