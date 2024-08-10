document.addEventListener('DOMContentLoaded', () => {

// Disease box scripting goes here:

// Second row of usage guide and natural ingredients.
// Toggle functionality to read more or less.
const dboxrow2 = document.getElementsByClassName('d-box-row-2');
const toggleBtn = document.getElementsByClassName('read-btn');
let toggleBtnArray = Array.from(toggleBtn);
let row2Array = Array.from(dboxrow2);

row2Array.forEach((row) => {
        row.style.height = '100px';
        row.style.overflow = 'hidden';
})

toggleBtnArray.map((btn, i) => {
    let rowClosed = true;
    btn.addEventListener('click', () => {
            const row = row2Array[i];        
                if(rowClosed){
                    rowClosed = false;
                    row.style.height = 'auto';
                    row.style.overflow = 'visible';
                    btn.innerHTML = 'Read less';
                }
                else{
                    rowClosed = true;
                    row.style.height = '100px';
                    row.style.overflow = 'hidden';
                    btn.innerHTML = 'Read more';
                } 
    })
})
// Toggle read more or less functionality ends here


})
