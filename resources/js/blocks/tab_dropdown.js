const TabDropdowns = document.querySelectorAll('.tab_dropdown');

TabDropdowns.forEach(dropdown => {
    const arrow = dropdown.querySelector('.caret');
    const list = dropdown.querySelector('.tab__list');
    const dropdownToggle = dropdown.querySelector('.tab__header')

    dropdownToggle.addEventListener('click', () => {
        arrow.classList.toggle('select-transform');
        list.classList.toggle('chars_list-active');
    })
})