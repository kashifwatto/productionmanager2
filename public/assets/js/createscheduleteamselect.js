

// for empolyee select
function enableCustomSelectforemployee(wrapperClass, data) {
    const wrappers = document.querySelectorAll(`.${wrapperClass}`);

    wrappers.forEach(wrapper => {
      const btn = wrapper.querySelector(".addteamselectemployeebtn");
      const search = wrapper.querySelector(".addteamselectemployeesearch input");
      const options = wrapper.querySelector(".addteamselectemployeeoption");

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

 
  const divisionsData = ["River Rock", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
  enableCustomSelectforemployee("addteamselectemploywrapper", divisionsData);



//   for truck select
function enableCustomSelectfortruck(wrapperClass, data) {
    const wrappers = document.querySelectorAll(`.${wrapperClass}`);

    wrappers.forEach(wrapper => {
      const btn = wrapper.querySelector(".addteamselecttrucktemplatebtn");
      const search = wrapper.querySelector(".addteamselecttrucktemplatesearch input");
      const options = wrapper.querySelector(".addteamselecttrucktemplateoptions");

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

 
  const addteamselecttruckdata = ["River Rock", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
  enableCustomSelectfortruck("addteamselecttruckwrapper", addteamselecttruckdata);

//   for trailer select
function enableCustomSelectfortrailer(wrapperClass, data) {
    const wrappers = document.querySelectorAll(`.${wrapperClass}`);

    wrappers.forEach(wrapper => {
      const btn = wrapper.querySelector(".addteamselecttrailertemplatebtn");
      const search = wrapper.querySelector(".addteamselecttrailertemplatesearch input");
      const options = wrapper.querySelector(".addteamselecttrailertemplateoptions");

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

 
  const addteamselecttrailerdata = ["River Rock", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
  enableCustomSelectfortrailer("addteamselecttrailerwrapper", addteamselecttrailerdata);


//   for project select

const addclientoptionrow=document.getElementById('add-client-option-row');
const selectedprojectshow=document.getElementById('selectedprojectshow');
const selectprojectmodal=document.getElementById('selectprojectmodal');
const createschedulesoverlay2=document.querySelector('.createschedulesoverlay');
function enableCustomSelectforproject(wrapperClass, data) {
    const wrappers = document.querySelectorAll(`.${wrapperClass}`);

    wrappers.forEach(wrapper => {
      const btn = wrapper.querySelector(".addteamselectprojectbtn");
      const search = wrapper.querySelector(".addteamselectprojectsearch input");
      const options = wrapper.querySelector(".addteamselectprojectoptions");

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
        selectedprojectshow.innerText=selectedLi.innerText;
        btn.style.background = "#6AB716";
        btn.style.color = "#ffffff";
        btn.firstElementChild.style.color = "#ffffff";
        btn.children[1].style.color = "#ffffff";
        addclientoptionrow.style.display='flex';
        selectprojectmodal.style.top='-150%';
        if(createschedulesoverlay2){
          createschedulesoverlay2.style.display='none';
        }


       
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
        addclientoptionrow.style.display='none';

      });

      addOptions();
    });
  }

 
  const addteamselectprojectrdata = ["River Rock", "Clear Crush Gravel", "4x4 PT Ties (8' Piece)", "Abbotsford Standard", "Garden Soil", "7' Cedars"];
  enableCustomSelectforproject("addteamselectprojectwrapper", addteamselectprojectrdata);


  