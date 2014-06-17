$(document).ready(function() {
    $(document).on('click', '.non_favs .movie_list', function() {

        $id = ($(this).attr('id').split("_"));
        $id = $id[1];
        $title = $(this).text();

        $(this).remove();
        $(".favs ul").append("<li class='movie_list' id='movie_" + $id + "'>" + $title + "</li>");   //NEW
        
        // AJAX HERE
        
    }); // End movie_list click function
}); // End document ready

