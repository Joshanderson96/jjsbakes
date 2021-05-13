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
  let modal = document.getElementsByClassName('userForm-container');
  if (modal.classList.contains('hide')) {
    modal.classList.remove('show')
  } else {
    modal.classList.add('hide')
  }
}





