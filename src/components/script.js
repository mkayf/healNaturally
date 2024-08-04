console.log(1);

document.addEventListener('DOMContentLoaded', () => {

// Disease box scripting goes here:

// Second row of usage guide and natural ingredients.
// Toggle functionality to read more or less.
const dboxrow2 = document.querySelector('.d-box-row-2');
const toggleBtn = document.querySelector('.read-btn');
let rowClosed = true;
if(rowClosed){
        dboxrow2.style.height = '100px';
        dboxrow2.style.overflow = 'hidden';
        // dboxrow2.style.display = 'none'
}
toggleBtn.addEventListener('click', () => {
    if(rowClosed){
        rowClosed = false;
        dboxrow2.style.height = '100%';
        dboxrow2.style.overflow = 'visible';
        toggleBtn.innerHTML = 'Read less';
        // dboxrow2.style.display = 'block'
    }
    else{
        rowClosed = true;
        dboxrow2.style.height = '100px';
        dboxrow2.style.overflow = 'hidden';
        toggleBtn.innerHTML = 'Read more';
        // dboxrow2.style.display = 'none';
    }
})

})
