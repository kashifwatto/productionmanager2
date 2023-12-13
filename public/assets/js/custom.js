
function enablecustomselectforexsistingcleintselect(wrapperClass, data) {
    const wrappers = document.querySelectorAll(`.${wrapperClass}`);

    wrappers.forEach(wrapper => {
      const btn = wrapper.querySelector(".selectcleintwrapperbtn");
      const search = wrapper.querySelector(".selectcleintwrappersearch input");
      const options = wrapper.querySelector(".selectcleintwrapperoptions");

      if (!btn || !search || !options) {
        console.error("Missing required elements");
        return;
      }

      function addcleints(selectedData) {
        options.innerHTML = "";
        data.forEach(item => {
          let isSelected = item == selectedData ? "selected" : "";
          let li = `<li class="${isSelected}">${item}</li>`;
          options.insertAdjacentHTML("beforeend", li);
        });
      }

      function updateclients(selectedLi) {
        search.value = "";
        addcleints(selectedLi.innerText);
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
          updateclients(selectedLi);
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

      addcleints();
    });
  }


  const allcleintdata = ["River", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars", "River", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars" ,"River", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
  enablecustomselectforexsistingcleintselect("selectcleintwrapper", allcleintdata);

// for header menu active class change
// document.addEventListener("DOMContentLoaded", function() {
//   var headerMenuLinks = document.querySelectorAll(".header-menu a");
// if(headerMenuLinks){

//   headerMenuLinks.forEach(function(link) {
//     link.addEventListener("mouseenter", function() {
//       this.classList.add("navbaractive-btn");
//     });

//     link.addEventListener("mouseleave", function() {
//       this.classList.remove("navbaractive-btn");
//     });
//   });
// }
// var headerlogoLinks = document.querySelectorAll(".header-logo a");
// if(headerlogoLinks){

//   headerlogoLinks.forEach(function(link) {
//     link.addEventListener("mouseenter", function() {
//       this.classList.add("navbaractive-btn");
//     });

//     link.addEventListener("mouseleave", function() {
//       this.classList.remove("navbaractive-btn");
//     });
//   });
// }

// });
