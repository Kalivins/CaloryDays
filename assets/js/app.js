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
        if(search.length >= 3) {
            searchingProduct(search);
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
                $('.searching-panel').append('<div id="'+index.id+'" class="col s6 m4 l3"><div class="card product"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="adding btn"  type="button" data-id="'+index.id+'" data-calorie="'+index.calorie_100g+'" data-name="'+index.product_name+'"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
            });
                $('.adding').bind("click", function (e) {
                    listId.splice(x, 0, $(this).attr('data-id'));
                    listNames.splice(x, 0, $(this).attr('data-name'));
                    var filtre = $(this).attr('data-calorie');
                    if($(this).attr('data-calorie') == "Non communiqué"){
                        filtre = 0;
                        listCalories.splice(x, 0, 0);
                    } else {
                        listCalories.splice(x, 0, parseInt($(this).attr('data-calorie')));
                    }
                    x++;
                    $('.article_list').append('<div class="element-ref">'+$(this).attr('data-name')+'<span class="pull-right">'+filtre+' Kcal</span></div>');
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
            $('.searching-panel').fadeOut(400, "linear", function () {

                $('.searching-panel').html('');
                var complete = {};

                datat.forEach(function (index) {

                    complete[index.product_name] = index.image_small_url;

                    var Kcal = "Kcal";
                    if (index.calorie_100g == "Non communiqué") {
                        Kcal = "";
                    }

                    $('.searching-panel').append('<div id="'+index.id+'" class="item col s6 m4 l3"><div class="card product"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="adding btn"  type="button" data-id="'+index.id+'" data-calorie="'+index.calorie_100g+'" data-name="'+index.product_name+'"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
                });
                $('.adding').bind("click", function (e) {
                    listId.splice(x, 0, $(this).attr('data-id'));
                    listNames.splice(x, 0, $(this).attr('data-name'));
                    if($(this).attr('data-calorie') == "Non communiqué"){
                        listCalories.splice(x, 0, 0);
                    } else {
                        listCalories.splice(x, 0, parseInt($(this).attr('data-calorie')));
                    }
                    x++;
                    CalorieUtilise = listCalories.join(' + ');
                    CalorieUtilise = eval(CalorieUtilise);
                    max = CalorieMax / CalorieMax * 100;
                    utilise = CalorieUtilise / max * 100;
                    besoinKcal = CalorieMax - CalorieUtilise;
                    besoinRestant = max - utilise;
                    caloriePie(CalorieUtilise, besoinKcal, utilise, besoinRestant);
                    console.log(CalorieUtilise);
                    console.log(listId);
                    console.log(listNames);
                    console.log(listCalories);
                });
                $('.autocomplete').autocomplete({
                    data: complete,
                    limit: 10,
                    onAutocomplete: function (val) {

                        searchingProduct(val);
                    },
                    minLength: 2,
                });

            });
            $('.searching-panel').fadeIn(400, "linear");
        }
});
}
function caloriePie(Kcal, besoinK, utile, besoin) {
    $('#graphique').html('');
    $('#graphique').append('<div id="CalorieChart"></div>');
    var pie = new d3pie("CalorieChart", {
        "header": {
            "title": {
                "text": "Comparaison de ",
                "fontSize": 24,
                "font": "open sans"
            },
            "subtitle": {
                "text": "A full pie chart to show off label collision detection and resolution.",
                "color": "#999999",
                "fontSize": 12,
                "font": "open sans"
            },
            "titleSubtitlePadding": 9
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasWidth": 590,
            "pieInnerRadius": "36%",
            "pieOuterRadius": "88%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": [
                {
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
            "string": "{label}:"+Kcal+" Kcal",
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
    if(utile > besoin){
        var besoinKr = besoinK * -1;
        $('#graphique').append('<h2>Vous avez dépassé votre besoin journalier de '+besoinKr+' Kcal</h2>')
    } else {
        $('#graphique').append('<h2>' + besoinK + ' Kcal Restant</h2>')
    }
}
function originalPie() {
    $('#graphique').html('');
    var pie = new d3pie("CalorieChart", {
        "header": {
            "title": {
                "text": "Lots of Programming Languages",
                "fontSize": 24,
                "font": "open sans"
            },
            "subtitle": {
                "text": "A full pie chart to show off label collision detection and resolution.",
                "color": "#999999",
                "fontSize": 12,
                "font": "open sans"
            },
            "titleSubtitlePadding": 9
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasWidth": 590,
            "pieInnerRadius": "36%",
            "pieOuterRadius": "88%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": [
                {
                    "label": "Besoin journalier",
                    "value": 2700,
                    "color": "#2484c1"
                },
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