let thumbnails=document.querySelectorAll('.thumbnail .test');
let center=document.querySelectorAll('.center img');
thumbnails.forEach((thumb,key)=>{
    thumb.addEventListener('click',()=>{
        thumbnails.forEach(e=>e.classList.remove('active'));
        thumb.classList.add('active');
        console.log(key);
        center.forEach(centr=>centr.classList.remove('active'));
        center[key].classList.add('active');
    })
})