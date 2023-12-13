const menu = document.querySelectorAll('.accordienheadermenu');
const menuhide = document.querySelectorAll('.menu-hide');

Array.from(menu).forEach((button, index) => {
  button.addEventListener('click', () => {
    // Access a specific element within the NodeList and toggle its opacity
    menuhide[index].style.display = (menuhide[index].style.display === 'none') ? 'block' : 'none';
  });
});
Array.from(menuhide).forEach((menu) => {
  document.addEventListener('DOMContentLoaded',()=>{
menu.style.display='none';
  })
});




// for edit supplier select box
function enableCustomSelectforsupplier(wrapperClass, data) {
  const wrappers = document.querySelectorAll(`.${wrapperClass}`);

  wrappers.forEach(wrapper => {
    const btn = wrapper.querySelector(".selectsupplierbtn");
    const search = wrapper.querySelector(".selectsuppliersearch input");
    const options = wrapper.querySelector(".selectsupplieroptions");

    if (!btn || !search || !options) {
      console.error("Missing required elements");
      return;
    }

    function addOptions(selectedData) {
      options.innerHTML = "";
      data.forEach(item => {
        let isSelected = item == selectedData ? "selected" : "";
        let li = `<li class="${isSelected}">${item}</li>`;
        options.insertAdjacentHTML("beforeend", li);
      });
    }

    function updateOptions(selectedLi) {
      search.value = "";
      addOptions(selectedLi.innerText);
      wrapper.classList.remove("active");
      btn.querySelector("span").innerText = selectedLi.innerText;
      btn.style.background = "#6AB716";
      btn.style.color = "#ffffff";
      btn.firstElementChild.style.color = "#ffffff";
              btn.children[1].style.color = "#ffffff";
     
    }

    options.addEventListener("click", (event) => {
      const selectedLi = event.target;
      if (selectedLi.tagName === "LI") {
        updateOptions(selectedLi);
      }
    });

    search.addEventListener("input", () => {
      let arr = [];
      let searchWord = search.value.toLowerCase();
      arr = data.filter(item => {
        return item.toLowerCase().includes(searchWord);
      }).map(item => {
        let isSelected = item == btn.querySelector("span").innerText ? "selected" : "";
        return `<li class="${isSelected}">${item}</li>`;
      }).join("");
      options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Item not found</p>`;
    });

    btn.addEventListener("click", () => {
      wrapper.classList.toggle("active");
    });

    addOptions();
  });
}
  

const supplierdata = ["River Rock", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
enableCustomSelectforsupplier("selectsupplierwrapper", supplierdata);

// select box for set remainder page
function enableCustomSelectforemployee(wrapperClass, data) {
  const wrappers = document.querySelectorAll(`.${wrapperClass}`);

  wrappers.forEach(wrapper => {
    const btn = wrapper.querySelector(".setremainderselectbtn");
    const search = wrapper.querySelector(".setremainderselectsearch input");
    const options = wrapper.querySelector(".setremainderselectoptions");

    if (!btn || !search || !options) {
      console.error("Missing required elements");
      return;
    }

    function addprojectsforremainder(selectedData) {
      options.innerHTML = "";
      data.forEach(item => {
        let isSelected = item == selectedData ? "selected" : "";
        let li = `<li class="${isSelected}">${item}</li>`;
        options.insertAdjacentHTML("beforeend", li);
      });
    }

    function updateprojectforremainder(selectedLi) {
      search.value = "";
      addprojectsforremainder(selectedLi.innerText);
      wrapper.classList.remove("active");
      btn.querySelector("span").innerText = selectedLi.innerText;
      btn.style.background = "#6AB716";
      btn.style.color = "#ffffff";
      btn.firstElementChild.style.color = "#ffffff";
              btn.children[1].style.color = "#ffffff";
     
    }

    options.addEventListener("click", (event) => {
      const selectedLi = event.target;
      if (selectedLi.tagName === "LI") {
        updateprojectforremainder(selectedLi);
      }
    });

    search.addEventListener("input", () => {
      let arr = [];
      let searchWord = search.value.toLowerCase();
      arr = data.filter(item => {
        return item.toLowerCase().includes(searchWord);
      }).map(item => {
        let isSelected = item == btn.querySelector("span").innerText ? "selected" : "";
        return `<li class="${isSelected}">${item}</li>`;
      }).join("");
      options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Item not found</p>`;
    });

    btn.addEventListener("click", () => {
      wrapper.classList.toggle("active");
    });

    addprojectsforremainder();
  });
}


const setremainderdata = ["River Rock", "Clear Crush Gravel"];
enableCustomSelectforemployee("setremainderselectwrapper", setremainderdata);



document.addEventListener('DOMContentLoaded', function() {
  var accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(function(item) {
    var header = item.querySelector('.accordion-header');

    header.addEventListener('click', function() {
      if (!item.classList.contains('show')) {
        closeAllAccordionItems();
        item.classList.add('show');
      } else {
        item.classList.remove('show');
      }
    });
  });

  function closeAllAccordionItems() {
    accordionItems.forEach(function(item) {
      item.classList.remove('show');
    });
  }
});

    