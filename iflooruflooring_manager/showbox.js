const showboxbtn = document.querySelector('.showbox')

showboxbtn.addEventListener('click', showboxfunction)

function showboxfunction(){
    const mainbox = document.querySelector('.mainbox')

    mainbox.classList.add('activemainbox')
}