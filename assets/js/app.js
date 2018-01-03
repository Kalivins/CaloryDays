$(document).ready(function() {
    $('.modal').modal();
    $('.carousel.carousel-slider').carousel({ full_width: true });
    $('.filters').submit(function(e) {
        e.preventDefault();
    });
        $('select').material_select();
    $('.lettre').click(function() {
        var letter = $(this).val();
        alphabet(letter);
    });

    $('.date-picker').pickadate({
        selectMonths: true,
        selectYears: 15,
        closeOnSelect: false
    });

    $(".collapse").sideNav({
        draggable: true,
    });
    $('#cat').change(function (e) {
       var search = $('#cat :selected').text();
       searchingCategory(search);
    });
    $('.autocomplete').keypress(function(e) {
        var search = $('.searched').val();
        if (search.length >= 3) {
            searchingProduct(search);
        }
    });
    $('.autocomplete-recipe').keypress(function(e) {
        var search = $('.search2').val();
        if (search.length >= 3) {
            searchingRecipe(search);
        }
    });
    $("#register").validate({
        rules: {
            "nom": {
                "required": true,
                "minlength": 2,
                "maxlength": 30
            },
            "prenom": {
                "required": true,
                "minlength": 2,
                "maxlength": 30
            },
            "pseudo": {
                "required": true,
                "minlength": 2,
                "maxlength": 30
            },
            "date_naissance": {
                "required": true,
                "date": true,
            },
            "email": {
                "email": true,
                "maxlength": 255
            },
            "mdp": {
                "required": true,
                "minlength": 6,
                "maxlength": 14
            }
        }
    });

});
var listId = [];
var listNames = [];
var listCalories = [];
var x = 0;
var CalorieUtilise;
var max;
var utilise;
var besoinRestant;
var CalorieMax = 2700;




function alphabet(lettre) {
    $.ajax({
        url: "http://localhost/MyFridgeFood/energy/letter",
        type: 'POST',
        data: {
            lettre: lettre,
        },
        dataType: "json",
        success: function(data) {
            $('.searching-panel').fadeOut(400, "linear", function() {
                $('.searching-panel').html('');

                data.forEach(function(index) {
                    var Kcal = "Kcal";
                    if (index.calorie_100g == "Non communiqué") {
                        Kcal = "";
                    }
                    if (index.calorie_100g != "Non communiqué" || index.calorie_100g == 0) {
                        $('.searching-panel').append('<div id="' + index.id + '" class="col s6 m4 l3"><div class="card product"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="adding btn"  type="button" data-id="' + index.id + '" data-calorie="' + index.calorie_100g + '" data-name="' + index.product_name + '"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
                    }
                });
                $('.adding').bind("click", function(e) {
                    listId.splice(x, 0, $(this).attr('data-id'));
                    listNames.splice(x, 0, $(this).attr('data-name'));
                    $('.liste_nom').append($(this).attr('data-name'));
                    $('.liste_nom').append($(this).attr('data-id'));
                    var filtre = $(this).attr('data-calorie');
                    if ($(this).attr('data-calorie') == "Non communiqué") {
                        filtre = 0;
                        listCalories.splice(x, 0, 0);
                    } else {
                        listCalories.splice(x, 0, parseInt($(this).attr('data-calorie')));
                    }
                    if($('.article_list').hasClass('empty')){
                        $('.article_list').append('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                        $('.article_list').removeClass('empty');
                    }
                    else {
                        var t = x - 1;
                        $('.'+t+'').before('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                    }
                    x++;
                    CalorieUtilise = listCalories.join(' + ');
                    CalorieUtilise = eval(CalorieUtilise);
                    var max = CalorieMax / CalorieMax * 100;
                    var besoinKcal = CalorieMax - CalorieUtilise;
                    var utilise = CalorieUtilise / CalorieMax * 100;
                    var besoinRestant = max - utilise;
                    caloriePie(CalorieUtilise, besoinKcal, utilise, besoinRestant);
                    console.log(utilise);
                });

            });
            $('.searching-panel').fadeIn(400, "linear");
        }

    });
}
function searchingCategory(search) {
    $.ajax({
        url: "http://localhost/MyFridgeFood/category",
        type: 'POST',
        data: {
            category: search,
        },
        dataType: 'json',
        success: function (data) {
            $('.searching-panel').fadeOut(400, "linear", function() {
                $('.searching-panel').html('');

                data.forEach(function(index) {
                    var Kcal = "Kcal";
                    if (index.calorie_100g == "Non communiqué") {
                        Kcal = "";
                    }
                    if (index.calorie_100g != "Non communiqué" || index.calorie_100g == 0) {
                        $('.searching-panel').append('<div id="' + index.id + '" class="col s6 m4 l3"><div class="card product"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="adding btn"  type="button" data-id="' + index.id + '" data-calorie="' + index.calorie_100g + '" data-name="' + index.product_name + '"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
                    }
                });
                $('.adding').bind("click", function(e) {
                    listId.splice(x, 0, $(this).attr('data-id'));
                    listNames.splice(x, 0, $(this).attr('data-name'));
                    var filtre = $(this).attr('data-calorie');
                    if ($(this).attr('data-calorie') == "Non communiqué") {
                        filtre = 0;
                        listCalories.splice(x, 0, 0);
                    } else {
                        listCalories.splice(x, 0, parseInt($(this).attr('data-calorie')));
                    }
                    if($('.article_list').hasClass('empty')){
                        $('.article_list').append('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                        $('.article_list').removeClass('empty');
                    }
                    else {
                        var t = x - 1;
                        $('.'+t+'').before('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                    }
                    x++;
                    CalorieUtilise = listCalories.join(' + ');
                    CalorieUtilise = eval(CalorieUtilise);
                    var max = CalorieMax / CalorieMax * 100;
                    var besoinKcal = CalorieMax - CalorieUtilise;
                    var utilise = CalorieUtilise / CalorieMax * 100;
                    var besoinRestant = max - utilise;
                    caloriePie(CalorieUtilise, besoinKcal, utilise, besoinRestant);
                    console.log(utilise);
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
            $('.searching-panel').fadeOut(400, "linear", function() {

                $('.searching-panel').html('');
                var complete = {};

                datat.forEach(function(index) {
                    if(index.energy_100g != "Non communiqué") {
                        complete[index.product_name] = index.image_small_url;
                    }

                    var Kcal = "Kcal";
                    if (index.calorie_100g == "Non communiqué") {
                        Kcal = "";
                    }
                    if(index.calorie_100g != "Non communiqué") {
                        $('.searching-panel').append('<div id="' + index.id + '" class="item col s6 m4 l3"><div class="card product"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="adding btn"  type="button" data-id="' + index.id + '" data-calorie="' + index.calorie_100g + '" data-name="' + index.product_name + '"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
                    }
                    });
                $('.adding').bind("click", function(e) {
                    listId.splice(x, 0, $(this).attr('data-id'));
                    listNames.splice(x, 0, $(this).attr('data-name'));
                    var filtre = $(this).attr('data-calorie');
                    if ($(this).attr('data-calorie') == "Non communiqué") {
                        filtre = 0;
                        listCalories.splice(x, 0, 0);
                    } else {
                        listCalories.splice(x, 0, parseInt($(this).attr('data-calorie')));
                    }
                    if($('.article_list').hasClass('empty')){
                        $('.article_list').append('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                        $('.article_list').removeClass('empty');
                    }
                    else {
                        var t = x - 1;
                        $('.'+t+'').before('<div class="element-ref '+x+'">' + $(this).attr('data-name') + '<span class="pull-right">' + filtre + ' Kcal</span></div>');
                    }
                    x++;
                    CalorieUtilise = listCalories.join(' + ');
                    CalorieUtilise = eval(CalorieUtilise);
                    var max = CalorieMax / CalorieMax * 100;
                    var besoinKcal = CalorieMax - CalorieUtilise;
                    var utilise = CalorieUtilise / CalorieMax * 100;
                    var besoinRestant = max - utilise;
                    caloriePie(CalorieUtilise, besoinKcal, utilise, besoinRestant);
                    console.log(utilise);
                });
                $('.autocomplete').autocomplete({
                    data: complete,
                    limit: 14,
                    onAutocomplete: function(val) {

                        searchingProduct(val);
                    },
                    minLength: 2,
                });

            });
            $('.searching-panel').fadeIn(400, "linear");
        }
    });
}

function searchingRecipe(search) {
    $.ajax({
        url: "http://localhost/MyFridgeFood/search_r",
        type: "POST",
        data: {
            search: search,
        },
        dataType: "json",
        success: function(datat) {
            $('.searching-recipe').fadeOut(400, "linear", function() {

                $('.searching-recipe').html('');
                var complete = {};

                datat.forEach(function(index) {
                    complete[index.nom_recette] = 'http://localhost/MyFridgeFood/upload/'+index.photo+'.jpg';
                        $('.searching-recipe').append('<div class="col s12 m4 l3"><div class="card products"><div class="card-image"><img src="http://localhost/MyFridgeFood/upload/'+index.photo+'.jpg" width="300" height="250" alt="image de '+index.nom_recette+'"><span class="card-title title-card">'+index.nom_recette+'</span></div><div class="card-content"><p class="truncate">'+index.preparation+'</p></div><div class="card-action actioncard"><a class="btn" href="recipe/'+index.id_recette+'">Voir la recette</a></div></div></div>');
                    });
                $('.autocomplete-recipe').autocomplete({
                    data: complete,
                    limit: 14,
                    onAutocomplete: function(val) {

                        searchingRecipe(val);
                    },
                    minLength: 2,
                });

            });
            $('.searching-recipe').fadeIn(400, "linear");
        }
    });
}
function caloriePie(Kcal, besoinK, utile, besoin) {
    $('#graphique').html('');
    $('#graphique').append('<div id="CalorieChart"></div>');
    var pie = new d3pie("CalorieChart", {
        "header": {
            "title": {
                "text": "Total des Calories",
                "fontSize": 24,
                "font": "open sans"
            },
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasHeight": 200,
            "canvasWidth": 200,
            "pieInnerRadius": "36%",
            "pieOuterRadius": "88%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": [{
                    "label": "Besoin journalier",
                    "value": besoin,
                    "color": "#2484c1"
                },
                {
                    "label": "Calorie des aliments sélectionné",
                    "value": utile,
                    "color": "#0c6197"
                }
            ]
        },
        "labels": {
            "outer": {
                "format": "label",
                "pieDistance": 32
            },
            "inner": {
                "hideWhenLessThanPercentage": 3
            },
            "mainLabel": {
                "fontSize": 11
            },
            "percentage": {
                "color": "#ffffff",
                "decimalPlaces": 0
            },
            "value": {
                "color": "#adadad",
                "fontSize": 11
            },
            "lines": {
                "enabled": true
            },
            "truncation": {
                "enabled": true
            }
        },
        "tooltips": {
            "enabled": true,
            "type": "placeholder",
            "string": "{label}:" + Kcal + " Kcal",
            "styles": {
                "fadeInSpeed": 192
            }
        },
        "effects": {
            "load": {
                "speed": 500
            },
            "pullOutSegmentOnClick": {
                "effect": "linear",
                "speed": 200,
                "size": 8
            }
        },
        "misc": {
            "gradient": {
                "enabled": true,
                "percentage": 100
            }
        },
        "callbacks": {}
    });
    if (CalorieUtilise > CalorieMax) {
        var besoinKr = besoinK * -1;
        var toastContent = $('<span>' + besoinKr + ' Kcal en trop</span>');
        Materialize.toast(toastContent, 1500);
    } else {
        $('#graphique').append('<h2>' + besoinK + ' Kcal Restant</h2>')
    }
}

function originalPie() {
    $('#graphique').html('');
    $('#graphique').append('<div id="CalorieChart"></div>');
    var pie = new d3pie("CalorieChart", {
        "header": {
            "title": {
                "text": "Total des Calories",
                "fontSize": 24,
                "font": "open sans"
            },
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasHeight": 200,
            "canvasWidth": 200,
            "pieInnerRadius": "36%",
            "pieOuterRadius": "88%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": [{
                "label": "Besoin journalier",
                "value": 2700,
                "color": "#2484c1"
            }, ]
        },
        "labels": {
            "outer": {
                "format": "label",
                "pieDistance": 32
            },
            "inner": {
                "hideWhenLessThanPercentage": 3
            },
            "mainLabel": {
                "fontSize": 11
            },
            "percentage": {
                "color": "#ffffff",
                "decimalPlaces": 0
            },
            "value": {
                "color": "#adadad",
                "fontSize": 11
            },
            "lines": {
                "enabled": true
            },
            "truncation": {
                "enabled": true
            }
        },
        "tooltips": {
            "enabled": true,
            "type": "placeholder",
            "string": "{label}: {value} Kcal",
            "styles": {
                "fadeInSpeed": 192
            }
        },
        "effects": {
            "load": {
                "speed": 500
            },
            "pullOutSegmentOnClick": {
                "effect": "linear",
                "speed": 200,
                "size": 8
            }
        },
        "misc": {
            "gradient": {
                "enabled": true,
                "percentage": 100
            }
        },
        "callbacks": {}
    });
}
$(function() {
    $('.stepper').activateStepper();
});
jQuery.extend(jQuery.validator.messages, {
    required: "Veuillez remplir le champ",
    email: "Veuillez renseigner un email valide",
    date: "Renseignez une date valide",
    maxlength: jQuery.validator.format("votre message ne doit pas dépasser {0} caractéres."),
    minlength: jQuery.validator.format("votre message doit comporter {0} caractéres."),
});