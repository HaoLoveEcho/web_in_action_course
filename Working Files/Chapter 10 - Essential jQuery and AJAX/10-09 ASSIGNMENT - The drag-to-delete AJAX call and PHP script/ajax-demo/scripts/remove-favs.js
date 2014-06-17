$(document).ready(function() {
                  
    $('.favs li').draggable({
        helper: 'clone',
        drag: function() {
            $('.trash').addClass('trash_hover');
        } // End drag function 
    }); // End draggable

    $('.trash').droppable({
        accept: '.favs li', 
        drop: function(event, ui) {
            $id = $(ui.draggable).attr('id').split("_");
            $id = $id[1];
            $('.favs #movie_' + $id).remove();
            $title = $(ui.draggable).text();
            $(".non_favs ul").append("<li class='movie_list' id='movie_" + $id + "'>" + $title + "</li>");
            
             $.ajax({
                url: "ajax/remove-favs.ajax.php",
                type: "POST",
                data: {
                    'user_id' : $userID,
                    'movie_id' : $id
                }
            });                
           
        } // End drop function
    }); // End droppable
    
}); // End document ready

