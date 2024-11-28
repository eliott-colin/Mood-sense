const navContainer = document.querySelector('.nav-header')
const palierScroll = 400
let checkout = false
 
function scrollNav(){
    const offsetTop = palierScroll
    let pourcentage = ((window.scrollY - offsetTop) / window.innerHeight) * 100
 
    if (pourcentage > -10) {
        checkout = true
 
        navContainer.classList.add('nav-header-active')
        document.querySelector('.dynamique-island').classList.add('classic-nav')
        document.querySelector('.dynamique-island').classList.remove('dynamique-island')
        document.querySelector('.center-all').style.display = 'none'
        document.querySelector('.header-container').classList.add('header-container-active')
 
    }else{
        navContainer.classList.remove('nav-header-active')
        document.querySelector('.center-all').style.display = 'flex'
        document.querySelector('.classic-nav').classList.add('dynamique-island')
        document.querySelector('.classic-nav').classList.remove('classic-nav')
        document.querySelector('.header-container').classList.remove('header-container-active')
    }
}
 
window.addEventListener('scroll', scrollNav)