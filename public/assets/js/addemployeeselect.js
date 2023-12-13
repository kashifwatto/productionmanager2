// Set default color
const colorpicker=document.getElementById("colorPicker");
if(colorpicker){
  colorpicker.value = "#E89623"; // Set to red as an example

// Set height and width
colorpicker.style.height = "50px";
colorpicker.style.width = "50px";
}


// Function to change color
function changeColor(selectedColor) {
    document.getElementById("selectdivisionselecttemplatebtn").children[1].style.color = selectedColor;
}







const addemploymodaldivisionwrapper = document.querySelector(".addemploymodaldivisionwrapper");
if(addemploymodaldivisionwrapper){
  selectdivisionselecttemplatebtn = addemploymodaldivisionwrapper.querySelector(".select-division-select-template-btn"),
  selectdivisionselecttemplatesearch = addemploymodaldivisionwrapper.querySelector("input"),
  selectdivisionselecttemplateoptions = addemploymodaldivisionwrapper.querySelector(".select-division-select-template-options");

let alldivisions = ["River Rock","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

function adddivisions(selectedCountry) {
  if(selectdivisionselecttemplateoptions){
    
    selectdivisionselecttemplateoptions.innerHTML = "";
  }
  alldivisions.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updatedivisions(this)" class="${isSelected}">${country}</li>`;
    selectdivisionselecttemplateoptions.insertAdjacentHTML("beforeend", li);
 
  });
}

adddivisions();

function updatedivisions(selectedLi) {
  selectdivisionselecttemplatesearch.value = "";
  adddivisions(selectedLi.innerText);
  addemploymodaldivisionwrapper.classList.remove("active");
  selectdivisionselecttemplatebtn.firstElementChild.innerText = selectedLi.innerText;
  selectdivisionselecttemplatebtn.style.background = "#6AB716";
  selectdivisionselecttemplatebtn.style.color = "#ffffff";
  selectdivisionselecttemplatebtn.firstElementChild.style.color = "#ffffff";
  selectdivisionselecttemplatebtn.children[1].style.color = "#ffffff";;
  document.getElementById("colorPicker").value = "#23DCE8"; 
}

selectdivisionselecttemplatesearch.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = selectdivisionselecttemplatesearch.value.toLowerCase();
  arr = alldivisions.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == selectdivisionselecttemplatebtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="adddivisions(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  selectdivisionselecttemplateoptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectdivisionselecttemplatebtn.addEventListener("click", () => {
  
  addemploymodaldivisionwrapper.classList.toggle("active");

  
});
}

// addemployselecttruckwrapper js 
const addemployselecttruckwrapper = document.querySelector(".addemployselecttruckwrapper");
if(addemployselecttruckwrapper){
  

addemployselecttrucktemplatebtn = addemployselecttruckwrapper.querySelector(".addemployselecttrucktemplatebtn"),
addemployselecttrucktemplatesearch = addemployselecttruckwrapper.querySelector("input"),
addemployselecttrucktemplateoptions = addemployselecttruckwrapper.querySelector(".addemployselecttrucktemplateoptions");

let alltruck = ["River Rock","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

function addtruck(selectedCountry) {
    addemployselecttrucktemplateoptions.innerHTML = "";
  alltruck.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updatetruck(this)" class="${isSelected}">${country}</li>`;
    addemployselecttrucktemplateoptions.insertAdjacentHTML("beforeend", li);
 
  });
}

addtruck();

function updatetruck(selectedLi) {
    addemployselecttrucktemplatesearch.value = "";
  addtruck(selectedLi.innerText);
  addemployselecttruckwrapper.classList.remove("active");
  addemployselecttrucktemplatebtn.firstElementChild.innerText = selectedLi.innerText;
  addemployselecttrucktemplatebtn.style.background = "#6AB716";
  addemployselecttrucktemplatebtn.style.color = "#ffffff";
  addemployselecttrucktemplatebtn.firstElementChild.style.color = "#ffffff";
  addemployselecttrucktemplatebtn.children[1].style.color = "#ffffff";;
//   addclientoptionbtn.style.display = 'flex';
//   alert(selectdivisionselecttemplatebtn.firstElementChild.innerText);
}

addemployselecttrucktemplatesearch.addEventListener("keyup", () => {
  let arr = [];
  let searchWord = addemployselecttrucktemplatesearch.value.toLowerCase();
  arr = alltruck.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == addemployselecttrucktemplatebtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="addtruck(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  addemployselecttrucktemplateoptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

addemployselecttrucktemplatebtn.addEventListener("click", () => {
  
    addemployselecttruckwrapper.classList.toggle("active");

  
});

}
// add trailer select box
const addemployeeselecttrailerwrapper = document.querySelector("#addemployeeselecttrailerwrapper");
if(addemployeeselecttrailerwrapper){
addemployeeselecttrailerbtn = addemployeeselecttrailerwrapper.querySelector("#addemployeeselecttrailerbtn"),
addemployeeselecttrailersearch = addemployeeselecttrailerwrapper.querySelector("input"),
addemployeeselecttraileroptions = addemployeeselecttrailerwrapper.querySelector("#addemployeeselecttraileroptions");

let alltrailer = ["trailer","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

function addtrailer(selectedCountry) {
    addemployeeselecttraileroptions.innerHTML = "";
  alltrailer.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updatetrailer(this)" class="${isSelected}">${country}</li>`;
    addemployeeselecttraileroptions.insertAdjacentHTML("beforeend", li);
 
  });
}

addtrailer();

function updatetrailer(selectedLi) {
    addemployselecttrucktemplatesearch.value = "";
  addtrailer(selectedLi.innerText);
  addemployeeselecttrailerwrapper.classList.remove("active");
  addemployeeselecttrailerbtn.firstElementChild.innerText = selectedLi.innerText;
  addemployeeselecttrailerbtn.style.background = "#6AB716";
  addemployeeselecttrailerbtn.style.color = "#ffffff";
  addemployeeselecttrailerbtn.firstElementChild.style.color = "#ffffff";
  addemployeeselecttrailerbtn.children[1].style.color = "#ffffff";;

}

addemployeeselecttrailersearch.addEventListener("keyup", () => {
  
  let arr = [];
  let searchWord = addemployeeselecttrailersearch.value.toLowerCase();
  arr = alltrailer.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == addemployeeselecttrailerbtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="addtrailer(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  addemployeeselecttraileroptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

addemployeeselecttrailerbtn.addEventListener("click", () => {
  
    addemployeeselecttrailerwrapper.classList.toggle("active");

  
});
}
// code select template 
const addemployselecttemplatewrapper = document.querySelector("#addemployselecttemplatewrapper")
if(addemployselecttemplatewrapper){
  

addemployeeselecttemplatebtn = addemployselecttemplatewrapper.querySelector("#addemployeeselecttemplatebtn"),
addemployeeselecttemplatesearch = addemployselecttemplatewrapper.querySelector("input"),
addemployeeselecttemplateoptions = addemployselecttemplatewrapper.querySelector("#addemployeeselecttemplateoptions");

let allselecttemplate = ["teammate","Clear Crush Gravel","4x4 PT Ties (8' Piece)","River Rock","Abbotsford Standard","Garden Soil","7' Cedars" ];

function addselecttempalte(selectedCountry) {
    addemployeeselecttemplateoptions.innerHTML = "";
  allselecttemplate.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updateselecttemplate(this)" class="${isSelected}">${country}</li>`;
    addemployeeselecttemplateoptions.insertAdjacentHTML("beforeend", li);
 
  });
}

addselecttempalte();

function updateselecttemplate(selectedLi) {
  addemployeeselecttemplatesearch.value = "";
  addselecttempalte(selectedLi.innerText);
  addemployselecttemplatewrapper.classList.remove("active");
  addemployeeselecttemplatebtn.firstElementChild.innerText = selectedLi.innerText;
  addemployeeselecttemplatebtn.style.background = "#6AB716";
  addemployeeselecttemplatebtn.style.color = "#ffffff";
  addemployeeselecttemplatebtn.firstElementChild.style.color = "#ffffff";
  addemployeeselecttemplatebtn.children[1].style.color = "#ffffff";;

}

addemployeeselecttemplatesearch.addEventListener("keyup", () => {
  
  let arr = [];
  let searchWord = addemployeeselecttemplatesearch.value.toLowerCase();
  arr = allselecttemplate.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
  }).map(data => {
    let isSelected = data == addemployeeselecttemplatebtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="addselecttempalte(this)" class="${isSelected}">${data}</li>`;
  }).join("");
  addemployeeselecttemplateoptions.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

addemployeeselecttemplatebtn.addEventListener("click", () => {
  
    addemployselecttemplatewrapper.classList.toggle("active");

  
});

}

