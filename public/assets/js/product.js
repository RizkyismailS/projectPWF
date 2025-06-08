// === Toggle Mobile Filter Sidebar ===
document.addEventListener("DOMContentLoaded", function () {
    // Tombol buka/tutup filter mobile
    const filterBtn = document.querySelector(
        'button[aria-label="Filters"], button[aria-label="Filter"]'
    );
    const filterDialog = document.querySelector(
        'div[role="dialog"].lg\\:hidden'
    );
    const closeBtn = filterDialog?.querySelector(
        'button[aria-label="Close menu"], button[aria-label="Close"]'
    );

    if (filterBtn && filterDialog) {
        filterBtn.addEventListener("click", () => {
            filterDialog.classList.remove("hidden");
        });
    }
    if (closeBtn && filterDialog) {
        closeBtn.addEventListener("click", () => {
            filterDialog.classList.add("hidden");
        });
    }

    // === Dropdown Sort ===
    const sortBtn = document.getElementById("menu-button");
    const sortMenu = document.querySelector('[role="menu"]');
    if (sortBtn && sortMenu) {
        sortBtn.addEventListener("click", () => {
            sortMenu.classList.toggle("hidden");
        });
        // Optional: klik di luar menu untuk menutup
        document.addEventListener("click", (e) => {
            if (!sortBtn.contains(e.target) && !sortMenu.contains(e.target)) {
                sortMenu.classList.add("hidden");
            }
        });
    }

    // === Expand/Collapse Filter Section (Mobile & Desktop) ===
    document
        .querySelectorAll('button[aria-controls^="filter-section"]')
        .forEach((btn) => {
            btn.addEventListener("click", function () {
                const sectionId = btn.getAttribute("aria-controls");
                const section = document.getElementById(sectionId);
                const expanded = btn.getAttribute("aria-expanded") === "true";
                btn.setAttribute("aria-expanded", !expanded);
                if (section) {
                    section.classList.toggle("hidden");
                }
            });
        });
});
