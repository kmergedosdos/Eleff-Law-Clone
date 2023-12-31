// MOBILE HEADER MENU BUTTON EVENT LISTENER
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

// MOBILE HEADER MENU WITH CHILDREN EVENT LISTENER
const mobileHeaderMenuItemsWithChildren = document.querySelectorAll(
  ".mobile-header nav .menu > .menu-item-has-children"
);

mobileHeaderMenuItemsWithChildren.forEach((item) => {
  const itemPlusIcon = '<i class="fa-solid fa-plus"></i>';
  const itemMinusIcon = '<i class="fa-solid fa-minus"></i>';
  item.innerHTML += itemPlusIcon;
  item.innerHTML += itemMinusIcon;

  const itemSubMenu = item.querySelector(".sub-menu");
  itemSubMenu.style.marginTop = `-${itemSubMenu.clientHeight}px`;
  itemSubMenu.classList.add("hidden");
});

mobileHeaderMenuItemsWithChildren.forEach((item, index) => {
  const itemPlusIcon = item.querySelector(".fa-plus");
  const itemMinusIcon = item.querySelector(".fa-minus");
  const itemSubMenu = item.querySelector(".sub-menu");

  item.addEventListener("click", () => {
    const style = getComputedStyle(itemSubMenu);
    if (parseInt(style.marginTop)) {
      itemSubMenu.style.marginTop = `0`;
      itemSubMenu.classList.remove("hidden");
      itemMinusIcon.style.visibility = "visible";
      itemPlusIcon.style.visibility = "hidden";
    } else {
      itemSubMenu.style.marginTop = `-${itemSubMenu.clientHeight}px`;
      itemSubMenu.classList.add("hidden");
      itemPlusIcon.style.visibility = "visible";
      itemMinusIcon.style.visibility = "hidden";
    }
  });
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

// EVENT LISTENER FOR CONTACT PAGE DISCLAIMER LINK
var closeButton = document.getElementById("disclaimer__close");

var showDisclaimerLink = document.getElementById("showDisclaimer");
var disclaimer = document.querySelector(".disclaimer");

if (closeButton && showDisclaimerLink) {
  closeButton.addEventListener("click", function () {
    disclaimer.style.display = "none";
  });

  showDisclaimerLink.addEventListener("click", function (e) {
    e.preventDefault();
    if (
      disclaimer.style.display === "none" ||
      disclaimer.style.display === ""
    ) {
      disclaimer.style.display = "block";
    } else {
      disclaimer.style.display = "none";
    }
  });
}

// FRONT PAGE SECTION ONE SLIDER ANIMATION
const frontPageSliderTrack = document.querySelector(
  ".front-page-section-one .slider__track"
);
if (frontPageSliderTrack) {
  frontPageSliderTrack.innerHTML += frontPageSliderTrack.innerHTML;
}

// WINDOW RESIZE EVENT LISTENER
window.onresize = () => {
  mobileHeaderMenuItemsWithChildren.forEach((item) => {
    const itemSubMenu = item.querySelector(".sub-menu");
    itemSubMenu.style.marginTop = `-${itemSubMenu.clientHeight}px`;
    itemSubMenu.classList.add("hidden");
  });
};

// SCROLL TO TOP BUTTON LISTENER
// Get the button:
let scrollToTopButton = document.getElementById("scroll-to-top");

if (scrollToTopButton) {
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 300 ||
      document.documentElement.scrollTop > 300
    ) {
      // scrollToTopButton.style.display = "block";
      scrollToTopButton.classList.remove("hidden");
    } else {
      // scrollToTopButton.style.display = "none";
      scrollToTopButton.classList.add("hidden");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }

  scrollToTopButton.addEventListener("click", () => {
    topFunction();
  });
}

// OBSERVER TO ADD ANIMATION
function animateEntries(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // handle on entry visible on screen
      entry.target.classList.add("animate");
    } else {
      // handle on entry not visible on screen
    }
  });
}

let options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.3,
};

let observer = new IntersectionObserver(animateEntries, options);

const frontSectionOneSubheading = document.querySelector(
  ".front-page-section-one .subheading-container"
);
if (frontSectionOneSubheading) observer.observe(frontSectionOneSubheading);

const frontBannerTexts = document.querySelector(
  ".front-page-banner__content__text"
);
if (frontBannerTexts) observer.observe(frontBannerTexts);

const frontSection3Items = document.querySelectorAll(
  ".front-page-section-three__content .stages-of-life .stage .image"
);
frontSection3Items.forEach((item) => {
  observer.observe(item);
});

const frontSectionFiveHeading = document.querySelector(
  ".front-page-section-five__content .heading"
);
if (frontSectionFiveHeading) observer.observe(frontSectionFiveHeading);

const frontSectionSixSubheading = document.querySelector(
  ".front-page-section-six__content .law-services-content .description-video .subheading-container"
);
if (frontSectionSixSubheading) observer.observe(frontSectionSixSubheading);

const footerContactHeading = document.querySelector(
  ".footer-contact-form > .heading"
);
if (footerContactHeading) observer.observe(footerContactHeading);

const genericPageBannerTextSpan = document.querySelector(
  ".page-banner__content__text span"
);
if (genericPageBannerTextSpan) observer.observe(genericPageBannerTextSpan);

// CHANGE FORM SUBMIT BUTTON TEXT WHEN CLICKED
const footerContactForm = document.querySelector(".footer-contact-form form");
if (footerContactForm) {
  footerContactForm.addEventListener("submit", () => {
    const submitBtn = document.getElementById("submitButton");
    submitBtn.textContent = "PROCESSING";
    submitBtn.style.backgroundColor = "rgba(0,0,0,0.5)";
  });

  const emailInput = document.getElementById("email");
  const emailValidationIcon = document.getElementById("email-icon");

  emailInput.addEventListener("input", function () {
    const email = emailInput.value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const isEmailValid = emailRegex.test(email);

    if (isEmailValid) {
      emailValidationIcon.style.opacity = 1;
      emailValidationIcon.style.transform = "scale(1)";
    } else {
      emailValidationIcon.style.opacity = 0;
      emailValidationIcon.style.transform = "scale(0)";
    }
  });
}
