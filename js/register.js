const nextbtns=document.querySelectorAll('.btn-next');
const circles=document.querySelectorAll('.progress-container .circle')
const areainput=document.getElementById('inputarea');
const prevbtns=document.querySelectorAll('.btn-prev');
const warning=document.getElementById('area');
const price=document.getElementById('inputprice');
const warning2=document.getElementById('pricewarning');
const submit2=document.getElementById('soso');
const form2=document.getElementById('form2');
const images=document.getElementById('images');
const imagewarning=document.getElementById('imagewarning');
const desc=document.getElementById('description');
const update=()=>{
    pages.forEach(page=>page.classList.remove('active'));
    pages[step-1].classList.add('active');
    progress.style.width=((step-1)/(pages.length-1))*100+'%';
    
    circles.forEach((circle,index)=>{
        if(index<step){
         circle.classList.add('active');
        }
        else{
            circle.classList.remove('active');
        }
    });
}
let step=1;
const pages=document.querySelectorAll('.my-from .page');
const progress=document.getElementById('progressbar');
prevbtns.forEach(btn=>{
    btn.addEventListener('click',()=>{
        if(step>1){
            step--;
        }
        update();
    })
})
nextbtns.forEach(btn=>btn.addEventListener('click',()=>{
let errors=[];
if(step<pages.length){
    if(step==1){
    warning.innerText="";
    warning2.innerText="";
    if(areainput.value!=""){
    if(isNaN(areainput.value)){
        warning.innerText="You should enter only a number"
        errors.push('NaN Error');
    }
    }
    else{
        errors.push('empty value');
        warning.innerText="You cannot leave this field blank"
    }
    if(price.value!=""){
     if(isNaN(price.value)){
       warning2.innerText="You should enter only a number";
       errors.push('NaN Error');
     }
    }
    else{
        errors.push('empty value');
        warning2.innerText="You cannot leave this field blank";
    }
    if(errors.length==0){
        step++;
    }
    errors=[];
}else{
step++;

}
update();
}
    
}));

const extenstions=['jpg','png','jpeg','gif'];
submit2.addEventListener('click',(ev)=>{
imageserror=[];
ev.preventDefault();
imagewarning.innerText="";
if(images.files.length<0||images.files.length<4){
    imageserror.push('not full images');
    imagewarning.innerText="Upload exactly 4 images";
}
else{
    let count;
    for(let i in images.files){
        count=0;
        extenstions.forEach(ext=>{
        if(images.files[i].type!=`image/${ext}`){
            count++;
        }
        });
        console.log(images.files[i]);
        if(count==4){
            imageserror.push('not image');
            imagewarning.innerText="Upload only images files";
        }
        if(i==images.files.length-1){
            break;
        }
    }
}
if(imageserror.length==0){
    form2.submit();
}



});