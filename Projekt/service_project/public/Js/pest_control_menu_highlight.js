function selectMenu() {
	var url = window.location.href;
	var menuId = "";
	switch(url) {
		case "http://localhost/service_project/index.php?S=pest_control":
		case "http://localhost/service_project/index.php?S=pest_control&A=home":
			menuId = "main_menu";
			break;
		case "http://localhost/service_project/index.php?S=pest_control&A=pest":
			menuId = "pest_menu";
			break;
		case "http://localhost/service_project/index.php?S=pest_control&A=order":
			menuId = "order_menu";
			break;
		case "http://localhost/service_project/index.php?S=pest_control&A=registration":
			menuId = "registration_menu";
			break;
		default:
			menuId = "main_menu";
	}
	highlightMenu(menuId);
}

function highlightMenu(menuId) {
	var menuItem = document.getElementById(menuId);
	menuItem.style.backgroundColor = "yellow";
	menuItem.style.color = "black";
	menuItem.style.borderRadius = "10px";
	menuItem.style.textShadow = "2px 2px 4px rgba(0, 0, 0, 1)";
	menuItem.style.boxShadow = "0px 0px 40px 0px rgba(255, 255, 0, 0.70)";
}