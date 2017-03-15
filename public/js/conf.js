var notify = function(message) {
    var $message = $('<p style="display:block;">' + message + '</p>');

    $('.notifications').append($message);
    $message.slideDown(300, function() {
        window.setTimeout(function() {
            $message.slideUp(300, function() {
                $message.remove();
            });
        }, 2000);
    });
};


var sticky = new Waypoint({
    element: document.getElementsByClassName('coucou'),
    handler: function(direction) {
      /*  $( ".navbar" ).addClass( "stuck" );*/
       /* notify('Handler triggered in ' + direction + ' direction'),*/
            console.log('Handler triggered in ' + direction + ' direction');

        if (direction == 'down') {
            $( '.navbar' ).addClass('stuck animated fadeIn');
        }
        else {
            $( '.navbar' ).removeClass('stuck animated fadeIn');
        }/*
        $( '.navbar' ).toggleClass('active');*/

},
    offset: '0%',




})
