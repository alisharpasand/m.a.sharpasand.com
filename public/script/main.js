function refreshHeaderFixness()
{
    if(window.getScroll().y >= window.getHeight() * 5 / 6)
        $$('header').addClass('fixed');
    else
        $$('header').removeClass('fixed');
    
    $$('nav > ul > li').each(function (ii, i){
        var page = $$('.page')[i];
        var min = page.getPosition().y;
        var max = min + page.getHeight();
        var scrollPosition = window.getScroll().y - window.getHeight() / 2;
        if(scrollPosition > min && scrollPosition <= max)
           ii.addClass('active');
        else
           ii.removeClass('active'); 
    });
}

window.addEvent('scroll', refreshHeaderFixness);
window.addEvent('resize', refreshHeaderFixness);

