const input = document.querySelector('input');
const btn = document.querySelector('add > button');

btn.addEventListener('click' , addlist)
input.addEventListener('keyup', (e)=>{
    (e.keyCode === 13 ? addlist(e) : null); 
})

function addlist(e) {
    const Incompleto = document.querySelector('.Incompleto');
    const completo = document.querySelector('.completo');

    const newLi = document.createElement('li');
    const checkBtn = document.createElement('button');
    const delbtn = document.createElement('button');

    checkBtn.innerHTML = '<i class="fa fa-check"></i>';
    delbtn.innerHTML = '<i class="fa fa-trash"></i>';

    if (input.value !=='') {
        newLi.textContent = input.value;
        input.value = '';
        Incompleto.appendChild(newLi);
        newLi.appendChild(checkBtn);
        newLi.appendChild(delbtn);
    }
    
    checkBtn.addEventListener('click', function(){
        const parent = this.parentNode;
        parent.remove();
        completo.appendChild(parent);
        checkBtn.style.display = 'none';
    })
    delbtn.addEventListener('click', function(){
        const parent = this.parentNode;
        parent.remove();
    })
}