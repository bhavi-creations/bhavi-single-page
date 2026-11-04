(function () {
    "use strict";

    function activateTab(tabName, updateHash) {
        var panel = document.getElementById(tabName);
        var button = document.querySelector('.media-tab-btn[onclick*="\'' + tabName + '\'"]');
        if (!panel || !button) return false;

        document.querySelectorAll('.media-tab-content').forEach(function (item) {
            item.classList.toggle('active', item === panel);
        });
        document.querySelectorAll('.media-tab-btn').forEach(function (item) {
            var active = item === button;
            item.classList.toggle('active', active);
            item.setAttribute('aria-pressed', active ? 'true' : 'false');
        });

        if (updateHash && window.location.hash !== '#' + tabName) {
            window.history.replaceState(null, '', window.location.pathname + window.location.search + '#' + tabName);
        }
        return true;
    }

    window.showMediaTab = function (event, tabName) {
        if (event && typeof event.preventDefault === 'function') event.preventDefault();
        activateTab(tabName, true);
    };

    function syncTabFromHash() {
        var tabName = window.location.hash.slice(1);
        if (!activateTab(tabName, false)) activateTab('all', false);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', syncTabFromHash, { once: true });
    } else {
        syncTabFromHash();
    }
    window.addEventListener('hashchange', syncTabFromHash);
})();