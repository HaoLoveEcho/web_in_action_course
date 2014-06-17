$(document).ready(function() { // Adds movie to favourites list
    
    $(document).on('mouseover mouseout', '.non_favs li', function(){
        $('.add', this).toggleClass('favourite');
    });
    
    $requestRunning = false;
    $(document).on('click', '.non_favs .add', function() {
        if ($requestRunning) {
            return; // Don't do anything if an AJAX request is running
        }

        $this = $(this);
        $this_li = $this.closest('li');
        $id = $this_li.attr('id').split("_");
        $id = $id[1];
        $description = $this.siblings('.description').text();
        $title = $this.siblings('h3').text();

        
        $.ajax({
            url: "ajax/add-favs.ajax.php",
            type: "POST",
            data: {
                'user_id' : $userID,
                'movie_id' : $id
            }, // End data
            'beforeSend': function(){
                $requestRunning = true;
                $this_li.remove();
            }, // End beforeSend
            'success': function() {
                $requestRunning = false;
                
                $output = "<li title='" + $description + "' id='fav_" + $id + "'>";
                $output += "<a href='index.php?user_id=" + $userID + "&amp;movie_id=" + $id + "'>";
                $output += $title;
                $output += "</a></li>";                
                
                $('ul.favs').append($output);
                                
                $(".favs li#fav_" + $id).draggable({
                   helper: 'clone'            
                });                
            } // End success
        }); // End AJAX
        
    }); // End movie_list click function
}); // End document ready

