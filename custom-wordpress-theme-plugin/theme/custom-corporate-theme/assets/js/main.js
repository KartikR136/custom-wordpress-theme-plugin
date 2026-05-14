document.addEventListener("DOMContentLoaded", () => {
	console.log("Custom Corporate Theme initialized");

	const animatedCards = document.querySelectorAll(".service-card");

	animatedCards.forEach((card) => {
		card.addEventListener("mouseenter", () => {
			card.style.transition = "transform 0.25s ease";
		});
	});
});