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
                $('.searching-panel').append('<div class="col s6 m4 l3"><div class="card products"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="btn"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
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

                    $('.searching-panel').append('<div class="col s6 m4 l3"><div class="card products"><div class="card-image produit"><img src="' + index.image_small_url + '" height="150" alt="image de ' + index.product_name + '"><span class="card-title card_c title_c">' + index.product_name + '</span><div class="card-title card_c content-energy"><p class="cat z-depth-3">' + index.main_category_fr + '</p><p class="cal z-depth-3">' + index.calorie_100g + ' ' + Kcal + '</p><span class="card-title card_c title_c">' + index.product_name + '</span></div><div class="hover-card"><button class="btn"> <i class="large material-icons icon-produit">add_circle_outline</i></button></div></div></div>');
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
        url: "http://localhost/MyFridgeFood/energy/",
        type: "POST",
        data: {
            calorie: calorie
        },
        dataType: "json",
        success: function (data) {
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
                            "label": "JavaScript",
                            "value": 264131,
                            "color": "#2484c1"
                        },
                        {
                            "label": "Ruby",
                            "value": 218812,
                            "color": "#0c6197"
                        },
                        {
                            "label": "Java",
                            "value": 157618,
                            "color": "#4daa4b"
                        },
                        {
                            "label": "PHP",
                            "value": 114384,
                            "color": "#90c469"
                        },
                        {
                            "label": "Python",
                            "value": 95002,
                            "color": "#daca61"
                        },
                        {
                            "label": "C+",
                            "value": 78327,
                            "color": "#e4a14b"
                        },
                        {
                            "label": "C",
                            "value": 67706,
                            "color": "#e98125"
                        },
                        {
                            "label": "Objective-C",
                            "value": 36344,
                            "color": "#cb2121"
                        },
                        {
                            "label": "Shell",
                            "value": 28561,
                            "color": "#830909"
                        },
                        {
                            "label": "Cobol",
                            "value": 24131,
                            "color": "#923e99"
                        },
                        {
                            "label": "C#",
                            "value": 100,
                            "color": "#ae83d5"
                        },
                        {
                            "label": "Coldfusion",
                            "value": 68,
                            "color": "#bf273e"
                        },
                        {
                            "label": "Fortran",
                            "value": 218812,
                            "color": "#ce2aeb"
                        },
                        {
                            "label": "Coffeescript",
                            "value": 157618,
                            "color": "#bca44a"
                        },
                        {
                            "label": "Node",
                            "value": 114384,
                            "color": "#618d1b"
                        },
                        {
                            "label": "Basic",
                            "value": 95002,
                            "color": "#1ee67b"
                        },
                        {
                            "label": "Cola",
                            "value": 36344,
                            "color": "#b0ec44"
                        },
                        {
                            "label": "Perl",
                            "value": 32170,
                            "color": "#a4a0c9"
                        },
                        {
                            "label": "Dart",
                            "value": 28561,
                            "color": "#322849"
                        },
                        {
                            "label": "Go",
                            "value": 264131,
                            "color": "#86f71a"
                        },
                        {
                            "label": "Groovy",
                            "value": 218812,
                            "color": "#d1c87f"
                        },
                        {
                            "label": "Processing",
                            "value": 157618,
                            "color": "#7d9058"
                        },
                        {
                            "label": "Smalltalk",
                            "value": 114384,
                            "color": "#44b9b0"
                        },
                        {
                            "label": "Scala",
                            "value": 95002,
                            "color": "#7c37c0"
                        },
                        {
                            "label": "Visual Basic",
                            "value": 78327,
                            "color": "#cc9fb1"
                        },
                        {
                            "label": "Scheme",
                            "value": 67706,
                            "color": "#e65414"
                        },
                        {
                            "label": "Rust",
                            "value": 36344,
                            "color": "#8b6834"
                        },
                        {
                            "label": "FoxPro",
                            "value": 32170,
                            "color": "#248838"
                        }
                    ]
                },
                "labels": {
                    "outer": {
                        "format": "label-value1",
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
    });
}


