const sidebarlink = document.getElementById('sidebarlink');
const sidebarpopup = document.getElementById('sidebarpopup');
const sidebar = document.getElementById('sidebar');
const maincontent = document.getElementById('main-content');
const sidebarcontent=document.getElementById('sidebar-content');
const cardcontainer =document.getElementById('card-container');
const indexmonth=document.getElementById('indexmonth');
const imgurl='http://127.0.0.1:8000/assets/images/dashboard/';
sidebarlink.addEventListener('click', function () {
    
    sidebarpopup.classList.remove("display-none");
    sidebar.classList.add("display-none");
    maincontent.classList.add('overlay');
    cardcontainer.style.opacity='0.3';
    indexmonth.style.opacity='0.6';
 

});
maincontent.addEventListener('click',function(){
    sidebarpopup.classList.add("display-none");
    sidebar.classList.remove("display-none");
    maincontent.classList.remove('overlay');
    cardcontainer.style.opacity='1';
    indexmonth.style.opacity='1';
 
   
});
// icon hover style on sidebar
const clientAdd = document.getElementById('clientAddbtn');
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





const createestimatebtn = document.getElementById('createestimatebtn');
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
const addnewprojectbtn = document.getElementById('addnewproject');
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


// for responisve sidebar
function updateClass() {
    if(window.innerWidth >= 1201){
        maincontent.classList.add('col-10');
        sidebarcontent.classList.add('col-2');
        maincontent.classList.remove('col-9','col-8');
        sidebarcontent.classList.remove('col-3','col-4');
    }else if (window.innerWidth <= 1200 && window.innerWidth >= 840) {
        
        maincontent.classList.add('col-9');
        sidebarcontent.classList.add('col-3');
        maincontent.classList.remove('col-10','col-8');
        sidebarcontent.classList.remove('col-2','col-4');
    } 
    else if (window.innerWidth <= 839 && window.innerWidth >= 590) {
        
        maincontent.classList.add('col-8');
        sidebarcontent.classList.add('col-4');
        maincontent.classList.remove('col-10','col-9');
        sidebarcontent.classList.remove('col-2','col-3');
    } 
}

// Initial class update
updateClass();

// Add a listener to update the class when the window is resized
window.addEventListener('resize', updateClass);


