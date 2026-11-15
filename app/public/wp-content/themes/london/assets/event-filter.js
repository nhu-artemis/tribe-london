document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.whatson-tabs__tab');
    const events = document.querySelectorAll('.event-row');

    function applyFilter(eventCategory) {
        tabs.forEach(t => t.classList.toggle('active', t.dataset.filter === eventCategory));

        events.forEach(event => {
            const categories = (event.dataset.category || '').split(' ');
            const show = eventCategory === 'all' || categories.includes(eventCategory);
            event.classList.toggle('hidden', !show);
        });
    }

    function updateUrl(eventCategory) {
        const url = new URL(window.location);
        if (eventCategory === 'all') {
            url.searchParams.delete('event-category');
        } else {
            url.searchParams.set('event-category', eventCategory);
        }
        history.pushState({ eventCategory: eventCategory }, '', url);
    }

    function getCategoryFromUrl() {
        const eventCategory = new URLSearchParams(window.location.search).get('event-category') || 'all';
        const valid = Array.from(tabs).some(t => t.dataset.filter === eventCategory);
        return valid ? eventCategory : 'all';
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            const eventCategory = this.dataset.filter;
            applyFilter(eventCategory);
            updateUrl(eventCategory);
        });
    });

    // Back/forward buttons
    window.addEventListener('popstate', function () {
        applyFilter(getCategoryFromUrl());
    });

    applyFilter(getCategoryFromUrl());
});