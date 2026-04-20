(function () {
    var input = document.getElementById('tsbt-search-input');
    var list = document.getElementById('tsbt-list');
    var count = document.getElementById('tsbt-count');
    var empty = document.getElementById('tsbt-empty');

    if (!input || !list) return;

    var cards = Array.prototype.slice.call(list.querySelectorAll('.tsbt-card'));

    function normalize(s) {
        return (s || '').toLowerCase().trim();
    }

    function filter() {
        var q = normalize(input.value);
        var visible = 0;

        cards.forEach(function (card) {
            if (!q) {
                card.hidden = false;
                visible++;
                return;
            }
            var code = card.dataset.code || '';
            var name = card.dataset.name || '';
            var tests = card.dataset.tests || '';
            var match = code.indexOf(q) !== -1 || name.indexOf(q) !== -1 || tests.indexOf(q) !== -1;
            card.hidden = !match;
            if (match) visible++;
        });

        if (count) count.textContent = visible;
        if (empty) empty.hidden = visible !== 0;
    }

    var timer;
    input.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(filter, 100);
    });
})();
