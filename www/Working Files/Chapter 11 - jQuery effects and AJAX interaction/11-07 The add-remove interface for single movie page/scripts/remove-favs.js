$(document).ready(function() {  // Removes movie from favourites list
                  
    $('.favs li').draggable({
        helper: 'clone',
        drag: function() {
           $('.trash').addClass('trash_hover');
        } // End drag function 
    }); // End draggable

    $('.trash').droppable({
        accept: '.favs li', 
        drop: function(event, ui) {
            $this = $(ui.draggable);
            $id = $this.attr('id').split("_");
            $id = $id[1];
            $title = $this.text();
            $description = $this.attr('title');
            
            $.ajax({
                url: "ajax/remove-favs.ajax.php",
                type: "POST",
                data: {
                    'user_id' : $userID,
                    'movie_id' : $id
                }, // End data
                'beforeSend': function() {
                    $this.remove();
                    $('.trash').addClass('trash_hover');
                }, // End beforeSend
                'success': function() {
                    $output = "<li id='nonfav_" + $id + "'>";
                    $output += "<figure>";
                    $output += "<a href='index.php?user_id=" + $userID + "&amp;movie_id=" + $id + "'>";
                    $output += "<img class='thumbnail' alt='" + $title + "' src='images-movies/" + $id + "-tn.png' onerror=this.src='images-movies/generic-tn.png'></a>";
                    $output += "<figcaption>";
                    $output += "<h3>";
                    $output += "<a href='index.php?user_id=" + $userID + "&amp;movie_id=" + $id + "'>";
                    $output += $title;
                    $output += "</a></h3>";
                    $output += "<div class='description'>" + $description + "</div>";
                    $output += "<div class='add'></div>";
                    $output += "</figcaption>";
                    $output += "</figure>";
                    $output += "</li>";                    
                   
                    $("ul.non_favs").prepend($output);
                    $('.trash').removeClass('trash_hover');
                } // End success
            });  // End AJAX
                          
           
        } // End drop function
    }); // End droppable
    
}); // End document ready

