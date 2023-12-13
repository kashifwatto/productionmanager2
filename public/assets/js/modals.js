// headersetting menu open 
const headersettingmenulink = document.getElementById('headersettingmenulink');
const settingsheadermenu = document.getElementById('settings-headermenu');

if (headersettingmenulink) {
    headersettingmenulink.addEventListener('click', () => {
        settingsheadermenu.style.display = (settingsheadermenu.style.display === 'flex') ? 'none' : 'flex';
    });
}




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

const emptycleitndetailmodal=document.getElementById('emptycleitndetailmodal');
const openlinkemptyclientdetailsmodal=document.getElementById('openlinkemptyclientdetailsmodal');
const closemptyclientdetailsmodal=document.querySelectorAll('.closemptyclientdetailsmodal')
const priviousestimatemodal=document.getElementById('priviousestimatemodal');
const priviousestimatebtnlink=document.getElementById('priviousestimatebtnlink');
const closespriviousestimatemodal=document.querySelectorAll('.closespriviousestimatemodal');
const bodyoverlay=document.querySelector('.bodyoverlay');
// add new client modal
if(addnewclientbtn){
    addnewclientbtn.addEventListener('click',()=>{
        addnewclientmodal.style.top='50%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
        // bodyoverlay.style.display='block';
        });
}
// add new cliint
if(addclintbtnestimatemodal){
    addclintbtnestimatemodal.addEventListener('click',()=>{
    
        createestimatemodal.style.top = '-450%';
        addnewclientmodal.style.top='50%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
      
       
    });
}

Array.from(closbtnaddnewclientmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        addnewclientmodal.style.top = '-450%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';
    // bodyoverlay.style.display='none';

    });
});
// create estimate modal 
const createestimatemodal=document.getElementById('createestimatemodal');
const addnewcreateestimatebtn=document.getElementById('addestimatemodalbtn');
const closbtncreateestimatemodal=document.getElementsByClassName('closecreateestimatemodal');
// create estamte modal
if(addnewcreateestimatebtn){
    addnewcreateestimatebtn.addEventListener('click',()=>{
        createestimatemodal.style.top='50%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
    });
}

Array.from(closbtncreateestimatemodal).forEach(button => {
    button.addEventListener('click', () => {
        
        createestimatemodal.style.top = '-450%';
        maincontentouter.style.opacity='0';
        maincontentouter.style.zIndex='-1';
    });
});
if(estimatetemplatelinkbtn){
    estimatetemplatelinkbtn.addEventListener('click',()=>{
        estimatetemplate.style.top='50%';
        
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
        
        // alert();
        
        
    });
}
const templateselect=document.querySelectorAll('.templateselect option');
templateselect.forEach(templateselect => {
    templateselect.addEventListener('mouseenter', () => {
        templateselect.style.background = '#6AB716';
        templateselect.style.color = '#fff';
    });
});



Array.from(closeestimatetemplatemodal).forEach(button => {
    button.addEventListener('click', () => {
        
        estimatetemplate.style.top = '-450%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});
// add new project modals
if(addnewprojectbtnlink){
    addnewprojectbtnlink.addEventListener('click',()=>{
        addnewprojectmodal.style.top='50%';
        
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
    })
}

Array.from(closebtnaddnewprojectmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        addnewprojectmodal.style.top = '-450%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});
// empty cleint modal
if(openlinkemptyclientdetailsmodal){
    openlinkemptyclientdetailsmodal.addEventListener('click',()=>{
        createestimatemodal.style.top = '-450%';
        emptycleitndetailmodal.style.top='50%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
    });
}

Array.from(closemptyclientdetailsmodal).forEach(button => {
    button.addEventListener('click', () => {
        
        emptycleitndetailmodal.style.top = '-450%';
        maincontentouter.style.opacity='0';
        maincontentouter.style.zIndex='-1';
    });
});
// document.addEventListener('DOMContentLoaded',()=>{
//     priviousestimatemodal.style.top='50%';  
// })
// show display-template-slect 
const displaytemplateselect = document.querySelectorAll('.display-template-select');
const hideparts = document.querySelectorAll('.hide-part');

Array.from(displaytemplateselect).forEach(button => {
    button.addEventListener('click', () => {
        // Loop through each hidepart element and toggle its display style
        Array.from(hideparts).forEach(hidepart => {
            // Check the current display style and toggle accordingly
            hidepart.style.display = (hidepart.style.display === 'none' || hidepart.style.display === '') ? 'flex' : 'none';
        });
    });
});

// load privios estimate modal

if(priviousestimatebtnlink){
    priviousestimatebtnlink.addEventListener('click',()=>{
        priviousestimatemodal.style.top='50%';
        emptycleitndetailmodal.style.top = '-450%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';
        });
}

Array.from(closespriviousestimatemodal).forEach(button => {
    button.addEventListener('click', () => {
        priviousestimatemodal.style.top='-450%';

          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});

// select project modal

const selectedprojectshowbtn=document.querySelectorAll('.selectedprojectshowbtn');
  const selectprojectmodalshow=document.getElementById('selectprojectmodal');
  const closeselectprojectmodal=document.querySelectorAll('.closeselectprojectmodal');
  const createschedulesoverlay=document.querySelector('.createschedulesoverlay');

//   if(selectedprojectshowbtn){
    
//     selectedprojectshowbtn.addEventListener('click',()=>{
//         selectprojectmodalshow.style.top='50%';
      
//     });
//   }
  
  Array.from(selectedprojectshowbtn).forEach(button => {
    button.addEventListener('click', () => {
      selectprojectmodalshow.style.top='50%';
      if(createschedulesoverlay){
          createschedulesoverlay.style.display='block';
        
      }
          

    });
});
  Array.from(closeselectprojectmodal).forEach(button => {
    button.addEventListener('click', () => {
      selectprojectmodalshow.style.top='-450%';
if(createschedulesoverlay){
    
    createschedulesoverlay.style.display='none';
}

    });
});
const addnewprojectmodalshowbtn=document.getElementById('addnewprojectmodalshowbtn')
  
if(addnewprojectmodalshowbtn){
    addnewprojectmodalshowbtn.addEventListener('click',()=>{
        selectprojectmodalshow.style.top='-450%';

        addnewprojectmodal.style.top='50%';
        
    })
}

// add new vander modal

const addnewvandermodal=document.getElementById('addnewvandermodal');
const addnewvandermodalbtnlink=document.getElementById('addnewvandermodalbtnlink');
const closeaddnewvandermodal=document.querySelectorAll('.closeaddnewvandermodal');
if(addnewvandermodalbtnlink){
    addnewvandermodalbtnlink.addEventListener('click',()=>{
        addnewvandermodal.style.top='50%';
        maincontentouter.style.opacity='1';
        maincontentouter.style.zIndex='100';

    });
}

Array.from(closeaddnewvandermodal).forEach(button => {
    button.addEventListener('click', () => {
        addnewvandermodal.style.top='-450%';

        maincontentouter.style.opacity='0';
        maincontentouter.style.zIndex='-7658743656300';

    });
});

// edit supplier modal load

const editsupplierbtnlink=document.querySelectorAll('.editsupplierbtnlink');
const editsuppliermodal=document.getElementById('editsuppliermodal');
const closeeditsuppliermodal=document.querySelectorAll('.closeeditsuppliermodal');
if(editsupplierbtnlink){
    Array.from(editsupplierbtnlink).forEach(button => {
        button.addEventListener('click', () => {
            editsuppliermodal.style.top='50%';
            maincontentouter.style.opacity='1';
            maincontentouter.style.zIndex='100';
    
        });
    });
}
if(closeeditsuppliermodal){
    Array.from(closeeditsuppliermodal).forEach(button => {
        button.addEventListener('click', () => {
            editsuppliermodal.style.top='-450%';

            maincontentouter.style.opacity='0';
            maincontentouter.style.zIndex='-7658743656300';
    
        });
    });
}



// setreamindermodal
const setremindermodalbtnlink=document.querySelectorAll('.setremindermodalbtnlink');
const closesetremaindermodal=document.querySelectorAll('.closesetremaindermodal');
const setremaindermodal=document.getElementById('setremaindermodal');
if(setremindermodalbtnlink){
    Array.from(setremindermodalbtnlink).forEach(button => {
        button.addEventListener('click', () => {
            setremaindermodal.style.top='50%';
            maincontentouter.style.opacity='1';
            maincontentouter.style.zIndex='100';
    
        });
    });
}
if(closesetremaindermodal){
    Array.from(closesetremaindermodal).forEach(button => {
        button.addEventListener('click', () => {
            setremaindermodal.style.top='-450%';

            maincontentouter.style.opacity='0';
            maincontentouter.style.zIndex='-7658743656300';
    
        });
    });
}
// loadup page modals
const addnewloadupbtnlink =document.getElementById('addnewloadupbtnlink');
const addnewloadupmodal =document.getElementById('addnewloadupmodal');
const closeaddnewloadupmodal =document.querySelectorAll('.closeaddnewloadupmodal');
const loaduppageoverlay=document.querySelector('.loaduppageoverlay');
// loadup page overlay

// const loaduppageoverlay=document.getElementById('loaduppageoverlay');
if(addnewloadupbtnlink){
    addnewloadupbtnlink.addEventListener('click',()=>{
        addnewloadupmodal.style.top='50%';
        loaduppageoverlay.style.display='block';
    })
}
if(closeaddnewloadupmodal){
    Array.from(closeaddnewloadupmodal).forEach(button => {
        button.addEventListener('click', () => {
            addnewloadupmodal.style.top='-450%';
            loaduppageoverlay.style.display='none';

            
        });
    });
}

// for fleetand trailer page
const addnewtruckbtn=document.getElementById('addnewtruckbtn');
const addnewtruckmodal=document.getElementById('addnewtruckmodal');
const closeaddnewtruckmodalmodal=document.querySelectorAll('.closeaddnewtruckmodalmodal');
const fleetandtraileroverlay=document.getElementById('overlay');
if(addnewtruckbtn){
    addnewtruckbtn.addEventListener('click',()=>{
        addnewtruckmodal.style.top='50%';
        fleetandtraileroverlay.style.display="block";
        
    })
}
if(closeaddnewtruckmodalmodal){
    Array.from(closeaddnewtruckmodalmodal).forEach(button => {
        button.addEventListener('click', () => {

            addnewtruckmodal.style.top='-450%';
            fleetandtraileroverlay.style.display="none";
            
        });
    });
}

const addnewtrailerbtn=document.getElementById('addnewtrailerbtn');
const addnewtrailermodal=document.getElementById('addnewtrailermodal');
const closeaddnewtrailermodalmodal=document.querySelectorAll('.closeaddnewtrailermodalmodal');
if(addnewtrailerbtn){
    addnewtrailerbtn.addEventListener('click',()=>{
        addnewtrailermodal.style.top='50%';
        fleetandtraileroverlay.style.display="block";
    })
}

if(closeaddnewtrailermodalmodal){
    Array.from(closeaddnewtrailermodalmodal).forEach(button => {
        button.addEventListener('click', () => {

            addnewtrailermodal.style.top='-450%';
            fleetandtraileroverlay.style.display="none";
            
        });
    });
}

// addclient save save function
const addclientmodalsavebtn=document.getElementById('addclientmodalsavebtn');
const successalertbox=document.getElementById('successalertbox');
const indexoverlay=document.getElementById('overlay');
if(addclientmodalsavebtn){
    addclientmodalsavebtn.addEventListener('click',()=>{
        addnewclientmodal.style.top = '-450%';
        successalertbox.style.display='block';
        setTimeout(() => {
            maincontentouter.style.opacity='0';
            maincontentouter.style.zIndex='-1';
            successalertbox.style.display='none';
            if(indexoverlay){
                indexoverlay.style.display='none';
            }
        }, 500);
    });
}

// newestimatemodal 
const closenewestimatetemplatemodal=document.querySelectorAll('.closenewestimatetemplatemodal')
const newestimatetemplatemodal=document.getElementById('newestimatetemplatemodal');
Array.from(closenewestimatetemplatemodal).forEach(button => {
    button.addEventListener('click', () => {
        
        newestimatetemplatemodal.style.top = '-450%';
          maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';

    });
});


// fillestimatemodal 
const savenewestamatebtn=document.querySelectorAll('.savenewestamatebtn');
const fillcleitndetailmodal=document.getElementById('fillcleitndetailmodal');
const closefillcleitndetailmodal=document.querySelectorAll('.closefillcleitndetailmodal');
Array.from(savenewestamatebtn).forEach(button => {
    button.addEventListener('click', () => {
        
        newestimatetemplatemodal.style.top = '-450%';
        fillcleitndetailmodal.style.top = '50%';
          
    });
});
if(closefillcleitndetailmodal){
    Array.from(closefillcleitndetailmodal).forEach(button => {
        button.addEventListener('click', () => {
            
            
            fillcleitndetailmodal.style.top = '-450%';
            maincontentouter.style.opacity='0';
    maincontentouter.style.zIndex='-1';
              
        });
    }); 
}

// add new employee modal

const showaddnewemploymodal=document.getElementById('showaddnewemploymodal');
const showaddnewemploymodalbtn=document.getElementById('showaddnewemploymodalbtn');
const closebtnaddnewemployeemodal=document.querySelectorAll('.closebtnaddnewemployeemodal')
const employeeoverlay=document.querySelector('.employee-overlay');

// add new employ modal show 

if(showaddnewemploymodalbtn){
    showaddnewemploymodalbtn.addEventListener('click',()=>{
    
        showaddnewemploymodal.style.top='50%';
        employeeoverlay.style.display='block';
    
    }) 
}

Array.from(closebtnaddnewemployeemodal).forEach(button => {
    button.addEventListener('click', () => {
        showaddnewemploymodal.style.top='-150%';
        employeeoverlay.style.display='none';
        

    });
});
// add new metailpricing 
const showaddnewmetrialmodal=document.getElementById('showaddnewmetrialmodal');
const addnewmetrailmodalbtnlink=document.getElementById('addnewmetrailmodalbtnlink');
const closeaddnewmetrialmodal=document.querySelectorAll('.closeaddnewmetrialmodal');
const metrailpricingoverlay=document.querySelector('.metrailpricingoverlay');

if(addnewmetrailmodalbtnlink){
    addnewmetrailmodalbtnlink.addEventListener('click',()=>{
        showaddnewmetrialmodal.style.top='50%';
        if(metrailpricingoverlay){
            metrailpricingoverlay.style.display='block'
        }
        
        }); 
}

    Array.from(closeaddnewmetrialmodal).forEach(button => {
        button.addEventListener('click', () => {
            
            showaddnewmetrialmodal.style.top = '-150%';
            if(metrailpricingoverlay){
                metrailpricingoverlay.style.display='none'
            }
    
        });
    });

