$(document).ready(function(){
    $('.modal').modal();
    
    $('.alpha').submit(function(e){
            e.preventDefault();
    });
    $('.lettre').click(function(){
        var letter = $(this).val();
        console.log(letter);
        alphabet(letter);
    });
    });

function alphabet(lettre){
    $.ajax({
        url: "http://localhost/MyFridgeFood/energy/letter",
        type: 'POST',
        data: {
            lettre: lettre,
        },
        dataType: "json",
        success: function(data){
            console.log(data);
            $('.searching-panel').fadeOut(400, "linear", function(){;
            $('.searching-panel').html('');
    
            data.forEach(function(index){
                console.log(index);
                $('.searching-panel').append('<div class="col s12 m4 l3"> <div class="card products"> <div class="card-image"><img src="'+index.image_small_url+'" width="200" height="250" alt="image de '+index.product_name+'"><span class="card-title title-card">'+index.product_name+'</span></div><div class="card-content"><p><span class="categorie-label">Catégorie : '+index.main_category_fr+'</span><br><span class="calorie-label">Calorie :'+index.energy_100g+'</span></p></div></div></div>');
            });
                                                                    
        });
            $('.searching-panel').fadeIn(400, "linear");
        }
        
    });
}
