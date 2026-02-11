let i=0;
const slider=document.getElementById('slider');

function nextSlide(){
 i++;
 if(i>=slider.children.length) i=0;
 slider.style.transform=`translateX(-${i*100}%)`;
}

setInterval(nextSlide,3000);
