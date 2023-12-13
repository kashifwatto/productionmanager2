
const maincontentouter=document.getElementById('main-content-outer');
const addnewclientbtn =document.getElementById('addclintbtn');
const addnewclientbtnli =document.getElementById('clientAddbtn');


const addclintbtnestimatemodal =document.getElementById('addclintbtnestimatemodal');


const addnewclientmodal=document.getElementById('addnewclientmodal');
const estimatetemplatelinkbtn=document.getElementById('estimatetemplatelinkbtn');
const estimatetemplate=document.getElementById('estimatetemplate');

const closbtnaddnewclientmodal=document.getElementsByClassName('closeaddclientmodal');
const closeestimatetemplatemodal=document.getElementsByClassName('closeestimatetemplatemodal')
const addnewprojectbtnlink=document.getElementById('addnewprojectbtnlink');
const addnewprojectmodal=document.getElementById('addnewprojectmodal');
const closebtnaddnewprojectmodal=document.getElementsByClassName('closebtnaddnewprojectmodal');
const templateselect=document.querySelectorAll('.templateselect');
const emptycleitndetailmodal=document.getElementById('emptycleitndetailmodal');
const openlinkemptyclientdetailsmodal=document.getElementById('openlinkemptyclientdetailsmodal');
const closemptyclientdetailsmodal=document.querySelectorAll('.closemptyclientdetailsmodal')
const priviousestimatemodal=document.getElementById('priviousestimatemodal');
const priviousestimatebtnlink=document.getElementById('priviousestimatebtnlink');
const closespriviousestimatemodal=document.querySelectorAll('.closespriviousestimatemodal');

addnewclientbtn.addEventListener('click',()=>{
    addnewclientmodal.style.top='50%';
    
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
    
    
    


});
addclintbtnestimatemodal.addEventListener('click',()=>{
    
    createestimatemodal.style.top = '-150%';
    addnewclientmodal.style.top='50%';
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
  
    // alert();
});
Array.from(closbtnaddnewclientmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        addnewclientmodal.style.top = '-150%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});
// create estimate modal 
const createestimatemodal=document.getElementById('createestimatemodal');
const addnewcreateestimatebtn=document.getElementById('addestimatemodalbtn');
const closbtncreateestimatemodal=document.getElementsByClassName('closecreateestimatemodal');
addnewcreateestimatebtn.addEventListener('click',()=>{
    createestimatemodal.style.top='50%';
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
});
Array.from(closbtncreateestimatemodal).forEach(button => {
    button.addEventListener('click', () => {
        
        createestimatemodal.style.top = '-150%';
        maincontentouter.style.opacity='0';
        maincontentouter.style.zIndex='-1';
    });
});
estimatetemplatelinkbtn.addEventListener('click',()=>{
    estimatetemplate.style.top='50%';
    
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
    
    // alert();
    
    


});
templateselect.forEach(templateselect => {
    templateselect.addEventListener('change', () => {
        templateselect.style.background = '#6AB716';
        templateselect.style.color = '#fff';
    });
});



Array.from(closeestimatetemplatemodal).forEach(button => {
    button.addEventListener('click', () => {
        
        estimatetemplate.style.top = '-150%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});
// add new project modals
addnewprojectbtnlink.addEventListener('click',()=>{
    addnewprojectmodal.style.top='50%';
    
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
})
Array.from(closebtnaddnewprojectmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        addnewprojectmodal.style.top = '-150%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});
openlinkemptyclientdetailsmodal.addEventListener('click',()=>{
    createestimatemodal.style.top = '-150%';
    emptycleitndetailmodal.style.top='50%';
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
});
Array.from(closemptyclientdetailsmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        emptycleitndetailmodal.style.top = '-150%';
        maincontentouter.style.opacity='0';
        maincontentouter.style.zIndex='-1';
    });
});
// document.addEventListener('DOMContentLoaded',()=>{
//     priviousestimatemodal.style.top='50%';  
// })
// show display-template-slect 
const displaytemplateselect=document.querySelectorAll('.display-template-select');
const hidepart=document.querySelector('.hide-part');
Array.from(displaytemplateselect).forEach(button => {
    button.addEventListener('click', () => {
        hidepart.style.transform = 'translateX(0%)';

        
        

    });
});
// load privios estimate modal
priviousestimatebtnlink.addEventListener('click',()=>{
    priviousestimatemodal.style.top='50%';
    emptycleitndetailmodal.style.top = '-150%';
    maincontentouter.style.opacity='1';
    maincontentouter.style.zIndex='100';
    
    
    


});
Array.from(closespriviousestimatemodal).forEach(button => {
    button.addEventListener('click', () => {
        priviousestimatemodal.style.top='-150%';

          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});


