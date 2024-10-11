let slideIndex = 0;
runSlideshow();

function runSlideshow() 
{
    let i;
    let slides = document.getElementsByClassName("img1");
    for (i = 0; i < 3; i++) 
    {
        slides[i].style.display = "none";
    }
    slideIndex++;
    
    if (slideIndex > 3) 
    {
        slideIndex = 1
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(runSlideshow, 5000);
}