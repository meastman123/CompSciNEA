// Select the dropdown button
const dropdownButton = document.querySelector(".dropdown-button");
// Find the content of the menu
const dropdownContent = document.querySelector(".dropwdown-content");

// Listen for a click on the button
// When clicked, show the menu
dropdownButton.addEventListener("click", () => {
	dropdownContent.classList.toggle("show");
});