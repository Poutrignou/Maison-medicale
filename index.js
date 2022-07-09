const textPresentation = document.querySelector('.text-presentation')
const buttonPresentation = document.querySelector('.button-presentation')
const carte = document.querySelector('#carte')
const buttonCarte = document.querySelector('#button-carte')

buttonPresentation.addEventListener('click', (e) => {
    console.log(textPresentation)
    textPresentation.classList.toggle('active')
})
buttonCarte.addEventListener('click', (e) => {
    console.log(textPresentation)
    carte.classList.toggle('active')
})