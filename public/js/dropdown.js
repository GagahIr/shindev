

const dropdownbtn = document.getElementById('dropdownbtn')
const dropdownmenu = document.getElementById('dropdownmenu')

dropdownbtn.addEventListener('click', () => {
    dropdownmenu.classList.toggle('hidden');
});

document.addEventListener('click',(props) => {
    const targetElement = props.target;
    if (!targetElement.closest('#dropdownmenu') && !targetElement.closest('#dropdownbtn')) {
        dropdownmenu.classList.add('hidden');
    }
});