function selectMenu() {
	var url = window.location.href;
	var menuId = "";
	switch(url) {
		case "http://localhost/service_project/index.php?S=home":
		case "http://localhost/service_project/index.php":
		case "http://localhost/service_project/":
			menuId = "main_menu";
			break;
		case "http://localhost/service_project/index.php?S=information":
			menuId = "information_menu";
			break;
		case "http://localhost/service_project/index.php?S=services":
			menuId = "services_menu";
			break;
		case "http://localhost/service_project/index.php?S=activities":
			menuId = "freetime_menu";
			break;
		default:
			menuId = "main_menu";
	}
	highlightMenu(menuId);
}

function highlightMenu(menuId) {
	var menuItem = document.getElementById(menuId);
	menuItem.style.backgroundColor = "#e1ecf0";
	menuItem.style.color = "#1e5b9a";
}