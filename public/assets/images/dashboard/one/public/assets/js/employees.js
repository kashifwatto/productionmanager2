const showaddnewemploymodal=document.getElementById('showaddnewemploymodal');
const showaddnewemploymodalbtn=document.getElementById('showaddnewemploymodalbtn');
const closebtnaddnewemployeemodal=document.querySelectorAll('.closebtnaddnewemployeemodal')

// add new employ modal show 

showaddnewemploymodalbtn.addEventListener('click',()=>{
    
    showaddnewemploymodal.style.top='50%';


})
Array.from(closebtnaddnewemployeemodal).forEach(button => {
    button.addEventListener('click', () => {
        showaddnewemploymodal.style.top='-150%';

        

    });
});
