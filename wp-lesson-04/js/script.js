jQuery(function($){
    document.getElementById('menu').addEventListener('click', function () {
        this.classList.toggle('open');
        $('.p-global-navigation').toggleClass( 'open' );
    });
});