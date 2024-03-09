const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const arrow = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.filter__dropdown-menu');
    const variants = dropdown.querySelectorAll('.filter__dropdown-menu li');
    const selected = dropdown.querySelector('.selected')

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        arrow.classList.toggle('select-transform');
        menu.classList.toggle('menu-active');
    })
    variants.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            arrow.classList.remove('select-transform')
            menu.classList.remove('menu-open');
            variants.forEach(option => {
                menu.classList.remove('menu-active');
                option.classList.remove('dropdown__item-active')
            })
            option.classList.add('dropdown__item-active');
        })
    })
})
