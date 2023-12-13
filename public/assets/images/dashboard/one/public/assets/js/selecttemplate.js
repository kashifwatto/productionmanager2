const selectwrapper = document.querySelector(".select-template-wraper"),
  selectbtn = selectwrapper.querySelector(".select-template-btn"),
  selectsearchInp = selectwrapper.querySelector("input"),
  selectoptions = selectwrapper.querySelector(".select-template-options");
 

let allcountries = ["River Rock","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

function adddata(selectedCountry) {
  selectoptions.innerHTML = "";
  allcountries.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updatedata(this)" class="${isSelected}">${country}</li>`;
    selectoptions.insertAdjacentHTML("beforeend", li);
    emptycleitndetailmodal.style.top = '-150%';
  });
}

adddata();

function updatedata(selectedLi) {
  selectsearchInp.value = "";
  adddata(selectedLi.innerText);
  selectwrapper.classList.remove("active");
  selectbtn.firstElementChild.innerText = selectedLi.innerText;
  selectbtn.style.background = "#6AB716";
  selectbtn.style.color = "#ffffff";
  selectbtn.firstElementChild.style.color = "#ffffff";
  addclientoptionbtn.style.display = 'flex';
  alert(selectbtn.firstElementChild.innerText);
}

selectsearchInp.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = selectsearchInp.value.toLowerCase();
  arr = allcountries.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == selectbtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  selectoptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectbtn.addEventListener("click", () => {
  selectwrapper.classList.toggle("active");
  
});
