const menu = document.querySelector('.menu-burger-container');

function menuAction () {
    menu.classList.toggle ('show')
};

menu.addEventListener('click', menuAction);



function mostra(id){
    /*if(document.getElementById(id).style.display == 'block'){
        document.getElementById(id).style.display= 'none';
    }else{document.getElementById(id).style.display = 'block';}
    */
   return true;
}


$('input.action').on('click', function(){
    $('span.card').hide();
    var i = $('input.action').index($(this));
    $('span.card').eq(i).show();
});






