const { cloneDeep } = require('lodash');
const { doc } = require('prettier');

require('./bootstrap');

const tabs = document.querySelector(".userForm-container");
const tabButton = document.querySelectorAll(".userForm-tabs");
const contents = document.querySelectorAll(".userForm-content");

tabs.onclick = e => {
  const id = e.target.dataset.id;
  if (id) {
    tabButton.forEach(btn => {
      btn.classList.remove("userForm-tabs--active");
    });
    e.target.classList.add("userForm-tabs--active");

    contents.forEach(content => {
      content.classList.remove("userForm-content-active");
    });
    const element = document.getElementById(id);
    element.classList.add("userForm-content-active");
  }
}

window.showHide = function () {
  let modal = document.querySelector('.userForm-container');
  let modalBackground = document.querySelector('.userForm');
  if (modal.classList.contains('hide') && modalBackground.classList.contains('hide')) {
    modal.classList.remove('hide');
    modalBackground.classList.remove('hide');
  } else {
    modal.classList.add('hide');
    modalBackground.classList.add('hide');

  }
}

window.showHideProfileMenu = function () {
  let dropDown = document.querySelector('.dropDown');

  if (dropDown.classList.contains('hide')) {
    dropDown.classList.remove('hide');
  } else {
    dropDown.classList.add('hide');
  }
}

window.getIds = function (checkboxName) {
  let checkBoxes = document.getElementsByName(checkboxName);

  let ids = Array.prototype.slice.call(checkBoxes)
                                  .filter(ch => ch.checked==true)
                                  .map(ch => ch.value);
  return ids;
}

window.filterResults = function () {
  let categoryIds = getIds("category");

  let href = 'blogs?';

  if (categoryIds.length) {
    href += '&filter[category]=' + categoryIds;
  }

  document.location.href=href;
}

document.getElementById('filter').addEventListener("click", filterResults);





