// HEADER MENU BUTTON EVENT LISTENER
const mobileHeaderMenuOpenButton = document.querySelector(
  ".mobile-header .logo-menu__menu > button.open"
);
const mobileHeaderMenuCloseButton = document.querySelector(
  ".mobile-header .logo-menu__menu > button.close"
);
const mobileHeaderNavigation = document.querySelector(".mobile-header nav");

mobileHeaderMenuOpenButton.addEventListener("click", () => {
  mobileHeaderMenuOpenButton.style.display = "none";
  mobileHeaderMenuCloseButton.style.display = "block";

  mobileHeaderNavigation.classList.remove("hidden");
  mobileHeaderNavigation.classList.add("shown");
});

mobileHeaderMenuCloseButton.addEventListener("click", () => {
  mobileHeaderMenuCloseButton.style.display = "none";
  mobileHeaderMenuOpenButton.style.display = "block";

  mobileHeaderNavigation.classList.remove("shown");
  mobileHeaderNavigation.classList.add("hidden");
});

// add plus or minus icons in sidebar menu items with children
const minusIcon =
  '<span class="action action--hide"><i class="fa-solid fa-minus"></i></span>';
const plusIcon =
  '<span class="action action--show"><i class="fa-solid fa-plus"></i></span>';
const menuItemsWithChildren = document.querySelectorAll(
  "#menu-sidebar-menu > .menu-item-has-children"
);
const subMenuHeights = [];
menuItemsWithChildren.forEach((menuItem) => {
  const subMenu = menuItem.querySelector(".sub-menu");
  subMenuHeights.push(subMenu.clientHeight);
});

menuItemsWithChildren.forEach((menuItem, index) => {
  menuItem.innerHTML += plusIcon;
  menuItem.innerHTML += minusIcon;

  const subMenu = menuItem.querySelector(".sub-menu");
  const showIcon = menuItem.querySelector(".action--show");
  const hideIcon = menuItem.querySelector(".action--hide");

  showIcon.addEventListener("click", showSubMenu);
  hideIcon.addEventListener("click", hideSubMenu);

  function showSubMenu() {
    hideAllSubMenus();
    console.log(subMenuHeights[index]);
    subMenu.style.height = `${subMenuHeights[index]}px`;
    showIcon.classList.add("hidden");
    hideIcon.classList.remove("hidden");
  }

  function hideSubMenu() {
    subMenu.style.height = 0;
    showIcon.classList.remove("hidden");
    hideIcon.classList.add("hidden");
  }

  function hideAllSubMenus() {
    const subMenus = document.querySelectorAll(
      "#menu-sidebar-menu > .menu-item-has-children > .sub-menu"
    );
    const plusIcons = document.querySelectorAll(
      "#menu-sidebar-menu > .menu-item-has-children > .action--show"
    );
    const minusIcons = document.querySelectorAll(
      "#menu-sidebar-menu > .menu-item-has-children > .action--hide"
    );
    subMenus.forEach((item) => (item.style.height = 0));
    plusIcons.forEach((item) => item.classList.remove("hidden"));
    minusIcons.forEach((item) => item.classList.add("hidden"));
  }

  if (
    menuItem.querySelector(".sub-menu li.current-menu-item") ||
    menuItem.classList.contains("current-menu-item")
  ) {
    showSubMenu();
  } else {
    hideSubMenu();
  }
});

// EVENT LISTENER FOR ARCHIVES DROPDOWN IN THE blog-sidebar.php
const archivesSelect = document.getElementById("archives__dropdown");
if (archivesSelect) {
  archivesSelect.onchange = (event) => {
    const selectedArchiveUrl = event.target.value;
    if (selectedArchiveUrl) {
      window.location.assign(selectedArchiveUrl);
    }
  };
}
