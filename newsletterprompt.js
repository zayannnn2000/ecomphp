function message(){
    var form = document.getElementById('form');
    const success= document.getElementById('success');


    if(form.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            form.value = '';
        }, 2000);

        success.style.display = 'block';
    }

    setTimeout(() =>{
    success.style.display='none';
}, 4000);


}

