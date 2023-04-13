const  menu=document.querySelector('.mobile-menu');
const  sidebar=document.querySelector('.sidebar');

//adding event listerner
menu.addEventListener("click",function()

{
sidebar.classList.toggle('-translate-x-full');
})
//text animation for landing page



const sectext=document.querySelector('.text-sec');

const textxontent= ()=>{
setTimeout(()=>{
sectext.textContent='Developer';
},0);
setTimeout(()=>{
sectext.textContent='Designer';
},4000);
setTimeout(()=>{
sectext.textContent='Freelancer';
},8000);
setTimeout(()=>{
sectext.textContent='Technical writter';
},12000);
}

textxontent();
setInterval(16000,textxontent);
