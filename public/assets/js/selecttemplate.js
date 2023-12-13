// const selectwrapper = document.querySelector(".select-template-wraper"),
//   selectbtn = selectwrapper.querySelector(".select-template-btn"),
//   selectsearchInp = selectwrapper.querySelector("input"),
//   selectoptions = selectwrapper.querySelector(".select-template-options");
 
  
// let allcountries = ["River Rock","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

// function adddata(selectedCountry) {
//   selectoptions.innerHTML = "";
//   allcountries.forEach(country => {
//     let isSelected = country == selectedCountry ? "selected" : "";
//     let li = `<li onclick="updatedata(this)" class="${isSelected}">${country}</li>`;
//     selectoptions.insertAdjacentHTML("beforeend", li);
//     emptycleitndetailmodal.style.top = '-150%';
//   });
// }

// adddata();

// function updatedata(selectedLi) {
//   selectsearchInp.value = "";
//   adddata(selectedLi.innerText);
//   selectwrapper.classList.remove("active");
//   selectbtn.firstElementChild.innerText = selectedLi.innerText;
//   selectbtn.style.background = "#6AB716";
//   selectbtn.style.color = "#ffffff";
//   selectbtn.firstElementChild.style.color = "#ffffff";
//   addclientoptionbtn.style.display = 'flex';
//   alert(selectbtn.firstElementChild.innerText);
// }

// selectsearchInp.addEventListener("keyup", () => {
//   let arr = [];
//   let searchWord = selectsearchInp.value.toLowerCase();
//   arr = allcountries.filter(data => {
//     return data.toLowerCase().startsWith(searchWord);
//   }).map(data => {
//     let isSelected = data == selectbtn.firstElementChild.innerText ? "selected" : "";
//     return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
//   }).join("");
//   selectoptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
// });

// selectbtn.addEventListener("click", () => {
//   selectwrapper.classList.toggle("active");
  
// });



// 
const newestimatetemplate_modal=document.getElementById('newestimatetemplatemodal');
const emptycleitndetail_modal=document.getElementById('emptycleitndetailmodal');
function enablecustomselectfortemplateselect(wrapperClass, data) {
  const wrappers = document.querySelectorAll(`.${wrapperClass}`);

  wrappers.forEach(wrapper => {
    const btn = wrapper.querySelector(".select-template-btn");
    const search = wrapper.querySelector(".select-template-search input");
    const options = wrapper.querySelector(".select-template-options");

    if (!btn || !search || !options) {
      console.error("Missing required elements");
      return;
    }

    function addtemplates(selectedData) {
      options.innerHTML = "";
      data.forEach(item => {
        let isSelected = item == selectedData ? "selected" : "";
        let li = `<li class="${isSelected}">${item}</li>`;
        options.insertAdjacentHTML("beforeend", li);
      });
    }

    function updatetemplates(selectedLi) {
      search.value = "";
      addtemplates(selectedLi.innerText);
      wrapper.classList.remove("active");
      btn.querySelector("span").innerText = selectedLi.innerText;
      btn.style.background = "#6AB716";
      btn.style.color = "#ffffff";
      btn.firstElementChild.style.color = "#ffffff";
              btn.children[1].style.color = "#ffffff";
              // alert(selectedLi.innerText);
              if(emptycleitndetail_modal){
                emptycleitndetail_modal.style.top='-450%';
              }
              if(newestimatetemplate_modal){
                newestimatetemplate_modal.style.top='50%';
                
              }
     
    }

    options.addEventListener("click", (event) => {
      const selectedLi = event.target;
      if (selectedLi.tagName === "LI") {
        updatetemplates(selectedLi);
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

    addtemplates();
  });
}


const alltemplatedata = ["River", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
enablecustomselectfortemplateselect("select-template-wraper", alltemplatedata);

