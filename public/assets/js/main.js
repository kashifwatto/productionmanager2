const sidebarlink = document.getElementById('sidebarlink');
const sidebarpopup = document.getElementById('sidebarpopup');
const sidebar = document.getElementById('sidebar');
const maincontent = document.getElementById('main-content');
const sidebarcontent=document.getElementById('sidebar-content');
const cardcontainer =document.getElementById('card-container');
const indexmonth=document.getElementById('indexmonth');
const overlay=document.getElementById('overlay');

const metrailpagecontentcontainer=document.getElementById('metrailpagecontentcontainer');
const imgurl='http://127.0.0.1:8000/assets/images/dashboard/';
if(sidebarlink){
    sidebarlink.addEventListener('click', function () {

        sidebarpopup.classList.remove("display-none");
        sidebar.classList.add("display-none");

        if(cardcontainer){

            cardcontainer.style.opacity='0.3';
        }
        if(indexmonth){

            indexmonth.style.opacity='0.6';
        }
        if(metrailpagecontentcontainer){
            metrailpagecontentcontainer.style.zIndex='-99999999999999'
        }
        if(overlay){
            overlay.style.display='block';
        }


    });
}
if(maincontent){
    maincontent.addEventListener('click',function(){
        sidebarpopup.classList.add("display-none");
        sidebar.classList.remove("display-none");
        maincontent.classList.remove('overlay');
        if(cardcontainer){
            cardcontainer.style.opacity='1';

        }
        if(indexmonth){
            indexmonth.style.opacity='1';

        }
        if(overlay){
            overlay.style.display='none';
        }


    });
}

// icon hover style on sidebar
const clientAdd = document.getElementById('clientAddbtn');
if(clientAdd){
    const img1 = clientAdd.querySelector('img:nth-child(1)');
    const img2 = clientAdd.querySelector('img:nth-child(3)');
    const addclintbtn =document.getElementById('addclintbtn');
    clientAdd.addEventListener('mouseenter', () => {

        img1.src = `${imgurl}manwhite.svg`;
        img2.src = `${imgurl}plus-white.svg`;


});
clientAdd.addEventListener('mouseleave', () => {



    img1.src = `${imgurl}man-green.svg`;
    img2.src = `${imgurl}plus-gray.svg`;


});
addclintbtn.addEventListener('click',(e)=>{

    e.preventDefault();
    // alert();
//    addclintbtn.classList.add('clicked');
img1.src = `${imgurl}man-green.svg`;
        img2.src = `${imgurl}plus-gray.svg`;

})
$(document).ready(function () {
    $('#addnewclintModal').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });
    $('#addestimatemodal').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

});
}

















const createestimatebtn = document.getElementById('createestimatebtn');
if(createestimatebtn){
    const estimatebtnimg1 = createestimatebtn.querySelector('img:nth-child(1)');
    const estimatebtnimg2 = createestimatebtn.querySelector('img:nth-child(3)');

    createestimatebtn.addEventListener('mouseenter', () => {

        estimatebtnimg1.src =  `${imgurl}esitmate-white.svg`;
        estimatebtnimg2.src =`${imgurl}plus-white.svg`;
    });
    createestimatebtn.addEventListener('mouseleave', () => {

        estimatebtnimg1.src = `${imgurl}estimate-green.svg`;
        estimatebtnimg2.src = `${imgurl}plus-gray.svg`;
    });
}
const addnewprojectbtn = document.getElementById('addnewproject');

if(addnewprojectbtn){
    const addnewprojectbtnimg1 = addnewprojectbtn.querySelector('img:nth-child(1)');
    const addnewprojectbtnimg2 = addnewprojectbtn.querySelector('img:nth-child(3)');

    addnewprojectbtn.addEventListener('mouseenter', () => {

        addnewprojectbtnimg1.src = `${imgurl}cube-white.svg`;
        addnewprojectbtnimg2.src =`${imgurl}plus-white.svg`;
    });
    addnewprojectbtn.addEventListener('mouseleave', () => {

        addnewprojectbtnimg1.src =`${imgurl}cube-icon.svg`;
        addnewprojectbtnimg2.src = `${imgurl}plus-gray.svg`;
    });
}



// for responisve sidebar
function updateClass() {
    if(window.innerWidth >= 1201){
        if(maincontent){

            maincontent.classList.add('col-10');
        }
        if(sidebarcontent){

            sidebarcontent.classList.add('col-2');
        }
        if(maincontent){
            maincontent.classList.remove('col-9','col-8');

        }
        if(sidebarcontent){

            sidebarcontent.classList.remove('col-3','col-4');
        }
    }else if (window.innerWidth <= 1200 && window.innerWidth >= 840) {

        if (maincontent) {
            maincontent.classList.add('col-9');
            maincontent.classList.remove('col-10', 'col-8');
        }

        if (sidebarcontent) {
            sidebarcontent.classList.add('col-3');
            sidebarcontent.classList.remove('col-2', 'col-4');
        }
    }
    else if (window.innerWidth <= 839 && window.innerWidth >= 590) {

        if (maincontent) {
            maincontent.classList.add('col-8');
            maincontent.classList.remove('col-10', 'col-9');
        }

        if (sidebarcontent) {
            sidebarcontent.classList.add('col-4');
            sidebarcontent.classList.remove('col-2', 'col-3');
        }

    }
}

// Initial class update
updateClass();

// Add a listener to update the class when the window is resized
window.addEventListener('resize', updateClass);


// custom date

// document.addEventListener("DOMContentLoaded", function () {
//     // Get the ul element
//     var dateList = document.getElementById("dateList");
//   console
//     // Check if the dateList element is available
//     if (dateList) {
//       // Get the current date
//       var currentDate = new Date();

//       // Generate and populate the list items for two days before and two days after the current date
//       for (var i = -2; i <= 2; i++) {
//         var date = new Date(currentDate);
//         date.setDate(currentDate.getDate() + i);

//         // Format the date as "DD" (day without month and year)
//         var formattedDate = date.getDate();

//         // Create a new list item
//         var listItem = document.createElement("li");

//         // Set the date as the inner text of the list item
//         listItem.innerText = formattedDate;

//         // Add the 'active' class to the current date
//         if (i === 0) {
//           listItem.classList.add("active");
//         }

//         // Add a click event listener to highlight the clicked date
//         listItem.addEventListener("click", function () {
//           // Remove the 'active' class from all list items
//           var allListItems = dateList.getElementsByTagName("li");
//           for (var j = 0; j < allListItems.length; j++) {
//             allListItems[j].classList.remove("active");
//           }

//           // Add the 'active' class to the clicked list item
//           this.classList.add("active");
//         });

//         // Append the list item to the ul element
//         dateList.appendChild(listItem);
//       }
//     }
//   });

document.addEventListener("DOMContentLoaded", function () {
    // Get the ul element
    var dateList = document.getElementById("dateList");

    // Check if the dateList element is available
    if (dateList) {
      // Get the current date
      var currentDate = new Date();

      // Generate and populate the list items for two days before and two days after the current date
      for (var i = -2; i <= 2; i++) {
        var date = new Date(currentDate);
        date.setDate(currentDate.getDate() + i);

        // Format the day as the first three characters in uppercase (e.g., "MON")
        var optionsDay = { weekday: 'short' };
        var formattedDay = date.toLocaleDateString('en-US', optionsDay).toUpperCase();

        // Format the date as "DD" (e.g., "01")
        var optionsDate = { day: '2-digit' };
        var formattedDate = date.toLocaleDateString('en-US', optionsDate);

        // Create a new list item
        var listItem = document.createElement("div");

        // Set the day and date as the inner text of the list item
        listItem.innerHTML = "<li class='day'>" + formattedDay + "</li><li class='date ms- mt-1'>" + formattedDate + "</li>";

        // Add the 'active' class to the current date
        if (i === 0) {
          listItem.classList.add("active");
        }

        // Add a click event listener to highlight the clicked date
        listItem.addEventListener("click", function () {
          // Remove the 'active' class from all list items
          var allListItems = dateList.getElementsByTagName("li");
          for (var j = 0; j < allListItems.length; j++) {
            allListItems[j].classList.remove("active");
          }

          // Add the 'active' class to the clicked list item
          this.classList.add("active");
        });

        // Append the list item to the ul element
        dateList.appendChild(listItem);
        dateList.appendChild(listItem);
      }
    }
  });

//   addnew tr to table
const addnewrowbtn=document.getElementById('addnewrowbtn');
if(addnewrowbtn){
    addnewrowbtn.addEventListener('click', function() {
        // Get the table body
        var tableBody = document.getElementById('estimattioninputtable').getElementsByTagName('tbody')[0];

        // Create a new row
        var newRow = tableBody.insertRow(tableBody.rows.length);
        var cell1 = newRow.insertCell(0);
        cell1.innerHTML = `
        <div class="tdformselectouter">


        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select </option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>

          </select>
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none">
            <path d="M5.24631 4.15468L8.8718 0.529238L10.5667 2.28301L5.33496 7.5L0 2.16512L1.65052 0.5L5.24631 4.15468Z" fill="#585858"/>
          </svg>
        </div>
        `;
        // Insert cells in the new row
        for (var i = 1; i < 7; i++) {
          var cell = newRow.insertCell(i);
          cell.innerHTML = '<input type="text" >';
        }

        // You can customize the new row creation as needed
      });

}


function setupCustomSelect(containerClass) {
    const customSelects = document.querySelectorAll(`.${containerClass}`);

    customSelects.forEach((customSelect) => {
      const selectedOption = customSelect.querySelector('.selected-option');
      const optionsList = customSelect.querySelector('.options');
      const dropdownIcon = customSelect.querySelector('.dropdown-icon');


      // Toggle options visibility on click
      customSelect.addEventListener('click', () => {
        optionsList.style.display = optionsList.style.display === 'block' ? 'none' : 'block';
        // dropdownIcon.classList.toggle('opendropdownicon');

      });

      // Set the selected option
      optionsList.addEventListener('click', (event) => {
        if (event.target.tagName === 'LI') {
          selectedOption.textContent = event.target.textContent;

          selectedOption.classList.add('selected');
          dropdownIcon.classList.add('selecteddropdown');

        }
      });
    });
  }

  // Setup custom selects
  setupCustomSelect('custom-select');


  const  project1=document.querySelector('.project-1');
  const  projectdetailspopup=document.querySelector('.projectdetailspopup');
  if(project1){
    project1.addEventListener('click',()=>{
        if(projectdetailspopup){
            if (projectdetailspopup.style.display === 'block') {
                // If yes, hide the element
                projectdetailspopup.style.display = 'none';
            } else {
                // If no or if the display is not explicitly set, show the element
                projectdetailspopup.style.display = 'block';
            }
        }
    })
  }
