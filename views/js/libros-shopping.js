const currentLocation = location.href
const menuItem = document.getElementsByClassName("categoriaslibros")
const menuLength = menuItem.length
for (let i = 0; i < menuItem.length; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "active"
    }
}