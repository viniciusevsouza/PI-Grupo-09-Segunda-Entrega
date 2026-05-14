(function () {
    'use strict';

    function initDropdowns() {
        document.querySelectorAll('.dropdown-btn').forEach(function (btn) {
            var panel = btn.nextElementSibling;
            if (!panel || !panel.classList.contains('dropdown-container')) {
                return;
            }

            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var willOpen = !panel.classList.contains('is-open');

                document.querySelectorAll('.dropdown-container.is-open').forEach(function (openPanel) {
                    if (openPanel !== panel) {
                        openPanel.classList.remove('is-open');
                        var prev = openPanel.previousElementSibling;
                        if (prev && prev.classList.contains('dropdown-btn')) {
                            prev.classList.remove('is-open');
                        }
                    }
                });

                panel.classList.toggle('is-open', willOpen);
                btn.classList.toggle('is-open', willOpen);
            });
        });
    }

    function initHeaderScroll() {
        var header = document.querySelector('header');
        if (!header || document.body.classList.contains('login-page')) {
            return;
        }

        var onScroll = function () {
            if (window.scrollY > 8) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        };

        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    function run() {
        initDropdowns();
        initHeaderScroll();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', run);
    } else {
        run();
    }
})();
