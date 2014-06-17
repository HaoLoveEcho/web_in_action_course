$(document).ready(function() { // Adds single movie to favourites list
    
    $requestRunning = false;
    $(document).on('click', '.actions .add', function() {
        if ($requestRunning) {
            return; // Don't do anything if an AJAX request is running
        }

        $this = $(this);
        $id = $this.attr('id').split("_");
        $id = $id[1];
        $description = $('p.description').text();
        $title = $('h3.title').text();

        
        $.ajax({
            url: "ajax/add-favs.ajax.php",
            type: "POST",
            data: {
                'user_id' : $userID,
                'movie_id' : $id
            }, // End data
            'beforeSend': function(){
                $requestRunning = true;
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
				
				$this.html("<p>Remove from favourites</p>").removeClass('add').addClass('remove');
				
            } // End success
        }); // End AJAX
        
    }); // End movie_list click function
}); // End document ready

