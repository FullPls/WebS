var script = document.createElement('script');
script.src = 'js/jquery-3.7.0.js'; // Check https://jquery.com/ for the current version
document.getElementsByTagName('head')[0].appendChild(script);


function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}


function renewProduct(page){
    $('.px-5').empty();
    $.post(
        'php/showCatalog.php', 
        {page: page},
        function(response){
            response = response.replaceAll('"','');
            response = response.replaceAll('[','');
            response = response.replaceAll('\\','');
            
            products = response.split(']');
            console.log(products);
            
            
            
                            
            for(let i = 0; i<products.length-1; i++){
                products[i] = products[i].split(',');
                let productname = products[i][0];
                let price = products[i][1];
                let img = products[i][2];
                
                $('.px-5:eq(0)').prepend('<div class="col-md-4"></div>');
                    $('.col-md-4:eq(0)').prepend('<div class="col-md-12"></div>');
                        $('.col-md-12:eq(0)').prepend('<div class="product" product></div>');
                            $('.product:eq(0)').append('<div class="image"></div>');
                                $('.image:eq(0)').append('<img src="'+img+'" alt="">');
                        
                            $('.product:eq(0)').append('<div class="info"></div>');
                                $('.info:eq(0)').append('<h4>'+productname+'</h4>');
                                
                                $('.info:eq(0)').append('<ul class="rating"></ul>');
                                    $('.rating:eq(0)').append('<li><ion-icon name="star"></ion-icon></li>');
                                    $('.rating:eq(0)').append('<li><ion-icon name="star"></ion-icon></li>');
                                    $('.rating:eq(0)').append('<li><ion-icon name="star"></ion-icon></li>');
                                    $('.rating:eq(0)').append('<li><ion-icon name="star"></ion-icon></li>');
                                    $('.rating:eq(0)').append('<li><ion-icon name="star-half"></ion-icon></li>');
                                    
                                $('.info:eq(0)').append('<div class="info-price"></div>');
                                $('.info-price:eq(0)').append('<span class="price">'+price+'<small>₽</small></span>');
                                $('.info-price:eq(0)').append('<button class="add-to-cart"><ion-icon name="cart-outline"></ion-icon></button>');
                                
            }
        }   
    );
}


/*function getTotalPage(){
    
    $.post(
        'php/getTotalPage.php', 
        '',
        function(response){
            $('<input class="total-pages" disabled value="'+response+'">').replaceAll('.total-pages');
                
        }   
    );  
}*/


/*document.addEventListener('DOMContentLoaded', function(){
    $( document ).ready(function() {
        getTotalPage();
    renewProduct(1);
    });
    
}, false);*/


const counters = document.querySelectorAll('[row]');


if(counters){
    counters.forEach(counter=> {
        
        counter.addEventListener('click', e=> {
            
            const target = e.target;
            console.log(target);
            
            if(target.closest('.but')){
                
                
                let value = parseInt(target.closest('.col-1').querySelector('input').value);
                let maxvalue = parseInt(target.closest('.col-1').querySelector('.total-pages').value);
                
                if(target.classList.contains('but_plus') || target.classList.contains('plus') && value<maxvalue){
                    value++;
                    renewProduct(value);
                }
                else if((target.classList.contains('but_minus') || target.classList.contains('minus'))
                        && value>1){
                    --value;
                    renewProduct(value);
                }
                
                if(value==1){
                    $('<button class="but but_minus disabled"><ion-icon class ="minus" name="remove-outline"></ion-icon></button>').replaceAll('.but_minus');
                }
                else{
                    $('<button class="but but_minus"><ion-icon class ="minus" name="remove-outline"></ion-icon></button>').replaceAll('.but_minus');
                }
                
                if( value == maxvalue){
                    $('<button class="but but_plus disabled"><ion-icon class ="plus" name="add-outline"></ion-icon></button>').replaceAll('.but_plus');
                }
                else{
                    $('<button class="but but_plus"><ion-icon class ="plus" name="add-outline"></ion-icon></button>').replaceAll('.but_plus');
                }
                    
                $('<input type="text" class="page" disabled value="'+value+'">').replaceAll('.page');
            }
        })
    })
}
