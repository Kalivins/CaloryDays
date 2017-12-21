$(document).ready(function(){
    $('.modal').modal();
    $('.filters').submit(function(e) {
            e.preventDefault();
    });
    $('.lettre').click(function(){
        var letter = $(this).val();
        alphabet(letter);
    });

    $(".collapse").sideNav({
        draggable: true,
    });
    $('.autocomplete').keypress(function(e) {
        var search = $('.searched').val();
        searchingProduct(search);
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
            $('.searching-panel').fadeOut(400, "linear", function(){
            $('.searching-panel').html('');

            data.forEach(function(index){
                var Kcal = "Kcal";
                if(index.calorie_100g == "Non communiqué"){
                    Kcal = "";
                }
                $('.searching-panel').append('<div class="col s6 m4 l3"> <div class="card products"> <div class="card-image"><img src="'+index.image_small_url+'" height="150" alt="image de '+index.product_name+'"><span class="card-title card_c title_c">'+index.product_name+'</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">'+index.main_category_fr+'</p><p class="cal z-depth-3">'+index.calorie_100g+' '+Kcal+'</p><span class="card-title card_c title_c">'+index.product_name+'</span></div></div></div>');
            });
                                                                    
        });
            $('.searching-panel').fadeIn(400, "linear");
        }
        
    });
}

function searchingProduct(search) {
    $.ajax({
        url: "http://localhost/MyFridgeFood/search",
        type: "POST",
        data: {
            search: search,
        },
        dataType: "json",
        success: function(datat) {
            $('.searching-panel').fadeOut(400, "linear", function () {

                $('.searching-panel').html('');
                var complete = {};

                datat.forEach(function (index) {

                    complete[index.product_name] = index.image_small_url;

                    var Kcal = "Kcal";
                    if (index.calorie_100g == "Non communiqué") {
                        Kcal = "";
                    }

                    $('.searching-panel').append('<div class="col s6 m4 l3"> <div class="card products"> <div class="card-image"><img src="'+index.image_small_url+'" height="150" alt="image de '+index.product_name+'"><span class="card-title card_c title_c">'+index.product_name+'</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">'+index.main_category_fr+'</p><p class="cal z-depth-3">'+index.calorie_100g+' '+Kcal+'</p><span class="card-title card_c title_c">'+index.product_name+'</span></div></div></div>');
                });
                $('.autocomplete').autocomplete({
                    data: complete,
                    limit: 10,
                    onAutocomplete: function (val) {

                    },
                    minLength: 2,
                });

            });
            $('.searching-panel').fadeIn(400, "linear");
        }
});
}






function caloriePie(calorie){
    $.ajax({
        url: "http://localhost",
    });
}

