var menus = document.querySelectorAll(".menus li a");

for (let index = 0, length = menus.length; index < length; index++) {
    menus[index].onclick = function() {
        var menu = document.querySelector(".menus li.active");
        if (menu) menu.classList.remove("active");
        this.parentNode.classList.add('active');
    }
}