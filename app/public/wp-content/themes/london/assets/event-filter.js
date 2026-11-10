
document.addEventListener('DOMContentLoaded', function () {
const tabs = document.querySelectorAll('.menu-tab');
const events = document.querySelectorAll('.event-item');

tabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
        e.preventDefault();

        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;

        events.forEach(event => {
            const categories = (event.dataset.category || '').split(' ');
            const show = filter === 'all' || categories.includes(filter);
            event.classList.toggle('hidden', !show);
            });
        });
    });
});