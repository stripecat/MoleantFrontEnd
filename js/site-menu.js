// The site menu. On small screens it slides in from the left and this script opens and closes it; on wide screens it
// is always visible and can be collapsed to a column of icons. Nothing else on the site needs JavaScript.

// Opens and closes the menu on small screens.
(function () {
    var trigger = document.querySelector(".menu-trigger");
    var menu = document.getElementById("main-navigation");
    var overlay = document.querySelector(".site-overlay");
    if (!trigger || !menu || !overlay) {
        return;
    }

    function setOpen(open) {
        menu.classList.toggle("open", open);
        overlay.hidden = !open;
        trigger.setAttribute("aria-expanded", open ? "true" : "false");
    }

    trigger.addEventListener("click", function () {
        setOpen(!menu.classList.contains("open"));
    });

    overlay.addEventListener("click", function () {
        setOpen(false);
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && menu.classList.contains("open")) {
            setOpen(false);
            trigger.focus();
        }
    });
})();

// Collapses the menu to a column of icons on wide screens, which gives the content more room. The choice is
// remembered in this browser; inc/header.php restores it before the first paint.
(function () {
    var storageKey = "site-menu-collapsed";
    var root = document.documentElement;
    var menu = document.getElementById("main-navigation");
    var button = document.querySelector(".site-collapse");
    if (!menu || !button) {
        return;
    }

    function setCollapsed(collapsed, remember) {
        var label = collapsed ? "Expand menu" : "Collapse menu";
        root.classList.toggle("site-collapsed", collapsed);
        button.setAttribute("aria-label", label);
        button.title = label;

        // The titles are hidden while collapsed, so give each icon a tooltip.
        menu.querySelectorAll(".site-level-0 > li > a, .site-account-signin").forEach(function (item) {
            var title = item.querySelector(".site-menu-label");
            if (collapsed && title) {
                item.title = title.textContent;
            } else if (item.classList.contains("site-account-signin")) {
                item.title = "Sign in";
            } else {
                item.removeAttribute("title");
            }
        });

        if (remember) {
            try {
                localStorage.setItem(storageKey, collapsed ? "1" : "0");
            } catch (e) {}
        }
    }

    button.addEventListener("click", function () {
        setCollapsed(!root.classList.contains("site-collapsed"), true);
    });

    setCollapsed(root.classList.contains("site-collapsed"), false);
})();
