const  menu=document.querySelector('.mobile-menu');
const  sidebar=document.querySelector('.sidebar');

//adding event listerner
menu.addEventListener("click",function()

{
sidebar.classList.toggle('-translate-x-full');
})
