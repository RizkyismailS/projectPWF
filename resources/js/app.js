import "./bootstrap";

window.openModal = function (id) {
    const modal = document.getElementById("modal-" + id);
    if (modal) modal.classList.remove("hidden");
};

window.closeModal = function (id) {
    const modal = document.getElementById("modal-" + id);
    if (modal) modal.classList.add("hidden");
};
