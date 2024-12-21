document.getElementById("menu-btn").addEventListener("click", () => {
	const menu = document.getElementById("sidebar-menu");
	menu.classList.toggle("hidden");
});
document.getElementById("close-sidebar").addEventListener("click", () => {
	const menusidebar = document.getElementById("sidebar-menu");
	menusidebar.classList.toggle("hidden");
});
document.getElementById("button-open-modals").addEventListener("click", () => {
	const modalsdesc = document.getElementById("show-modals");
	modalsdesc.classList.toggle("hidden");
});
document.getElementById("button-close-modals").addEventListener("click", () => {
	const modalsdesc = document.getElementById("show-modals");
	modalsdesc.classList.toggle("hidden");
});
document.getElementById("show-modals").addEventListener("click", function (e) {
	const notificationBox = e.target.closest(".bg-white");
	if (!notificationBox) {
		document.getElementById("show-modals").classList.add("hidden");
	}
});
