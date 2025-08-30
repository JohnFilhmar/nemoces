function toggleDropdown() {
    document.getElementById("dropdown").classList.toggle("hidden");
}

function toggleMobileMenu() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
}

// Close dropdown when clicking outside
document.addEventListener("click", function (event) {
    const dropdown = document.getElementById("dropdown");
    const button = event.target.closest("button");
    if (!button || !button.onclick.toString().includes("toggleDropdown")) {
        dropdown.classList.add("hidden");
    }
});
