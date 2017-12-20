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
                $('.searching-panel').append('<div class="col s12 m4 l3"> <div class="card products"> <div class="card-image"><span class="card-title title-card">'+index.product_name+'</span></div><div class="card-content"></div></div></div>');
                if(index.image_small_url == ""){
                    $('.card-image').append('<img src="http://localhost/MyFridgeFood/assets/img/void.png" width="220" height="180" alt="image de '+index.product_name+'">');
                } else {
                    $('.card-image').append('<img src="'+index.image_small_url+'" width="200"         height="180" alt="image de '+index.product_name+'">');
                }
                if(index.main_category_fr != ""){
                    $('.card-content').append('<p>Catégorie : '+index.main_category_fr+'<br>');
                }
                if(index.energy_100g != ""){
                    $('.card-content').append('Calorie : {{ product.energy_100g }}</p>');
                }
            });
                                                                    
        });
            $('.searching-panel').fadeIn(400, "linear");
        }
        
    });
}
