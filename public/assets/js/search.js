function setupCustomSelect(containerClass) {
 const customSelects = document.querySelectorAll(`.${containerClass}`);

 customSelects.forEach((customSelect) => {
   const selectedOption = customSelect.querySelector('.search-selected-option');
   const optionsList = customSelect.querySelector('.searchpageoptions');
   const dropdownIcon = customSelect.querySelector('.search-dropdown-icon');


   // Toggle options visibility on click
   customSelect.addEventListener('click', () => {
     optionsList.style.display = optionsList.style.display === 'block' ? 'none' : 'block';
     dropdownIcon.classList.toggle('searchopendropdownicon');

   });

   // Set the selected option
   optionsList.addEventListener('click', (event) => {
     if (event.target.tagName === 'LI') {
       selectedOption.textContent = event.target.textContent;
       
       selectedOption.classList.add('selected');
       dropdownIcon.classList.add('searchselecteddropdown');

     }
   });
 });
}

// Setup custom selects
setupCustomSelect('search-custom-select');