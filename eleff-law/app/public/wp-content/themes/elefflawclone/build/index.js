// add chevron down icon to parent nav menu items
const chevronDownElement = '<i class="fa-solid fa-chevron-down"></i>';
const menuItems = document.querySelectorAll(".menu-item-has-children > a");
menuItems.forEach((item) => {
  item.innerHTML += chevronDownElement;
});
