
const relay1 = document.getElementById('relay1')

relay1.addEventListener('click',handleClick)

function handleClick(event){
    if (event.target.value == 'on'){
        event.target.value = 'off'
    }else{event.target='on'}
}