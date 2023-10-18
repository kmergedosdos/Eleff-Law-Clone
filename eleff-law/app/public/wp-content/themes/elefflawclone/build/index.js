// add chevron down icon to parent nav menu items
const chevronDownElement = '<i class="fa-solid fa-chevron-down"></i>';
const menuItems = document.querySelectorAll(".menu-item-has-children > a");
menuItems.forEach((item) => {
  item.innerHTML += chevronDownElement;
});

// add chevrons (right) icon to breadcrumb
const chevronsRightElement =
  '<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>';
const chevronItems = document.querySelectorAll(".breadcrumb > p > span");
chevronItems.forEach((item, index, items) => {
  if (items.item(index + 1)) {
    item.innerHTML += chevronsRightElement;
  }
});
