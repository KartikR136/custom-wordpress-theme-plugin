document.addEventListener("DOMContentLoaded", () => {
	const navToggle = document.querySelector(".nav-toggle");
	const navMenu = document.querySelector(".main-navigation");

	if (!navToggle || !navMenu) return;

	navToggle.addEventListener("click", () => {
		navMenu.classList.toggle("is-open");
	});
});