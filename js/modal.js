//объявление переменных
var btn = document.querySelector('.user'); 
var btn2 = document.querySelector('.user2');
var btn3 = document.querySelector('.user3');
var blockHidden = document.querySelector('.authoriz');
var btnClose = document.querySelector('.close-bt');
var btnClose2 = document.querySelector('.close-bt_2');
var toRegister = document.querySelector ('.register');
var closelogin = document.querySelector('.text-to-register');
var closereg = document.querySelector('.text-to-login');


//функция для показа 1 блока
function showBlock() {
    blockHidden.classList.add('up');
}


//функция для показа 2 блока
function showBlock2() {
    toRegister.classList.add('upreg');
}


//функция для скрывания 1 блока

function hideBlock() {
    blockHidden.classList.remove('up');
}

//функция для скрывания 2 блока

function hideBlock2() {
    toRegister.classList.remove('upreg');
}



btnClose.addEventListener('click',hideBlock)
btnClose2.addEventListener('click',hideBlock2)
closelogin.addEventListener('click', hideBlock)
closelogin.addEventListener('click', showBlock2)
closereg.addEventListener('click', hideBlock2)
closereg.addEventListener('click', showBlock)
btn.addEventListener('click', showBlock)
btn2.addEventListener('click', showBlock)
btn3.addEventListener('click', showBlock);



// modal.addEventListener('click', (e) => {
//     if (e.target === modal) modal.close()
// })

// modalClose.addEventListener('click', (e) => {
//     hideBlock();
// })
