function toggleSection(sectionId) {
 var section1 = document.getElementById('section1');
 var section2 = document.getElementById('section2');
 var btnSection1 = document.getElementById('btnSection1');
 var btnSection2 = document.getElementById('btnSection2');

 if (sectionId === 'section1') {
   section1.style.display = 'block';
   section2.style.display = 'none';
   btnSection1.classList.add('active');
   btnSection2.classList.remove('active');
 } else {
   section1.style.display = 'none';
   section2.style.display = 'block';
   btnSection1.classList.remove('active');
   btnSection2.classList.add('active');
 }
}