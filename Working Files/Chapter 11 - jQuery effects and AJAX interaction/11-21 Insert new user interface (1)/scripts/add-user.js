// Inserts a new movie-goer into the database

$(document).ready(function(){
    
    $(document).on('focus', '.newdatarow', function() {
        $('.insert').removeClass('hidden');
    });
    
    $(document).on('click', '.insert', function() {
        $this = $(this);
        
        $firstname = $('input.newdata[name="firstname"]').val();
        $lastname = $('input.newdata[name="lastname"]').val();
        
        if ($firstname=="" && $lastname=="") {
            alert("Please enter at least one name");
        return;
        }
        
        $.ajax({
            url: "ajax/add-user.ajax.php",
            type: "POST",
            data: {
                'firstname' : $firstname,
                'lastname' : $lastname
            },
            'beforeSend' : function() {
                $this.removeClass('insert').addClass('loader_small');
                $('.delete').removeClass('success').addClass('hidden');
            }
        });
    
    });

});