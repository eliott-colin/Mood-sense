let email = document.querySelector('.email');



const mailInput = document.querySelector('.questionEmail');
console.log(mailInput)

mailInput.addEventListener('input',(e) => {
    e.preventDefault()
    if(mailVide(e.target.value))
    {
        document.querySelector('#button').style.display = 'ruby'
    }
})


function mailVide(text) {
    let check = false 
    for (let index = 0; index < text.length; index++) {
        if(text[index] == "@"){
            check = true
            
        }
    }return check
        
}

let skip = document.querySelectorAll('.skip')
let visibility = document.querySelectorAll('.question')

skip[0].addEventListener('click', (e)=> {
    e.preventDefault()
    console.log(visibility[0].getAttribute('style') === 'display:block;')
    if(visibility[0].getAttribute('style') === 'display:block;'){
        visibility[0].setAttribute("style", 'display:none;')
        visibility[1].setAttribute("style", 'display:block;')
        }
    
})
skip[1].addEventListener('click', (e)=> {
    e.preventDefault()
    console.log(visibility[1].getAttribute('style') === 'display:block;')
    if(visibility[1].getAttribute('style') === 'display:block;'){
        visibility[1].setAttribute("style", 'display:none;')
        visibility[2].setAttribute("style", 'display:block;')
        }
    
})
skip[2].addEventListener('click', (e)=> {
    e.preventDefault()
    console.log(visibility[2].getAttribute('style') === 'display:block;')
    if(visibility[2].getAttribute('style') === 'display:block;'){
        visibility[2].setAttribute("style", 'display:none;')
        visibility[3].setAttribute("style", 'display:block;')
        }
})

for (let index = 1; index < 5; index++) {
    const element = index;
    const emailInput = document.querySelectorAll(`.question-${element}`)
    emailInput.forEach(radio => {
        radio.addEventListener('input', (e) => {
            console.log(e.target.checked)
            if ((e.target.checked)) {
                skip[element-1].style.display = 'block'
            }else{
                skip[element-1].style.display = 'none'
            }
           
        })
    })
}




let containerEmail = document.querySelector('.container-email')
let button = document.querySelector('#button')
    button.addEventListener('click', (e) => {
        console.log("slaut")
        e.preventDefault()
        containerEmail.setAttribute("style",'display:none;')
        visibility[0].setAttribute("style",'display:block;')

        
    })