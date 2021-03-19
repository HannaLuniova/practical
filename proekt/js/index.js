//анимация
const gearIcon = new Vivus(
    'gears',
    {
        type: 'sync',
        duration: 600,
    },
);
//анимация при клике
function playGears() {
    gearIcon.stop().reset().play();
}

//parallax
function parallax(event) {
    this.querySelectorAll('.layer').forEach(layer => {
        let speed = layer.getAttribute('data-speed');
        layer.style.transform = `translateX(${event.clientX * speed / 800}px)`
    });
}
document.addEventListener('mousemove', parallax);

