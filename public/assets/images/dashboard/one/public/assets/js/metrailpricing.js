const showaddnewmetrialmodal=document.getElementById('showaddnewmetrialmodal');
const addnewmetrailmodalbtnlink=document.getElementById('addnewmetrailmodalbtnlink');
const closeaddnewmetrialmodal=document.querySelectorAll('.closeaddnewmetrialmodal');

addnewmetrailmodalbtnlink.addEventListener('click',()=>{
    showaddnewmetrialmodal.style.top='50%';
    });
    Array.from(closeaddnewmetrialmodal).forEach(button => {
        button.addEventListener('click', () => {
            
            showaddnewmetrialmodal.style.top = '-150%';

    
        });
    });
















const addnewmetrailselectbox=document.getElementById('addnewmetrailselectbox');
firstoption=addnewmetrailselectbox.options[0];
addnewmetrailselectbox.addEventListener('change',()=>{
    addnewmetrailselectbox.style.border='none';
    addnewmetrailselectbox.style.outline='none';
    addnewmetrailselectbox.style.boxShadow='none';
    addnewmetrailselectbox.style.backgroundColor='#6AB716';
    addnewmetrailselectbox.style.color='#fffff';
    

});

var options = addnewmetrailselectbox.options;


Array.from(options).forEach(button => {
    button.addEventListener('mouseover', () => {
        alert();

    });
});

