console.log("Запуск JS");
var script = document.createElement('script');
script.src = 'js/code.jquery.com_jquery-3.7.0.js'; // Check https://jquery.com/ for the current version
document.getElementsByTagName('head')[0].appendChild(script);



function renewNews(page){
	$('.newscont').empty();
	$.post(
		'php/showNews.php', 
		{page: page},
		function(response){
							
			response = response.replace('\r\n]','');
			response = response.replaceAll('\r\n]','');
			response = response.replaceAll(',','');
			response = response.replaceAll('[','');
			
			response = response.replaceAll('\\','');
			
			products = response.split(']');

			console.log(products);
			
			
			
							
			for(let i = 0; i<products.length-1; i++){
				products[i] = products[i].split('"');
				let nameNews = products[i][1];
				let textNews = products[i][3];
				let img = products[i][5];
								console.log(products[i]);
				$('.newscont:eq(0)').prepend('<section class="tablebox"></section>');
    			$('.tablebox:eq(0)').append('<div class="ds"><img src="'+img+'" alt="" class="logo"></div>');
        		$('.tablebox:eq(0)').append('<div class="text"></div>');
        			$('.text:eq(0)').append('<h5 class="t">'+nameNews+'</h3>');
        				$('.t:eq(0)').append('<ul><li class="newstext">'+textNews+'</li></ul>');
								
			}
		}	
	);
}


function getTotalPage(){
	
	$.post(
		'php/getPage.php', 
		'',
		function(response){
			$('<input class="total-pages" disabled value="'+response+'">').replaceAll('.total-pages');
				
		}	
	);	
}


document.addEventListener('DOMContentLoaded', function(){
	$( document ).ready(function() {
		console.log("Запуск JS");
		getTotalPage();
	renewNews(1);
	});
	
}, false);

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
					renewNews(value);
				}
				else if((target.classList.contains('but_minus') || target.classList.contains('minus'))
						&& value>1){
					--value;
					renewNews(value);
				}
				
				if(value==1){
					$('<button class="but but_minus disabled"><ion-icon class ="minus" name="arrow-back-outline"></ion-icon></button>').replaceAll('.but_minus');
				}
				else{
					$('<button class="but but_minus"><ion-icon class ="minus" name="arrow-back-outline"></ion-icon></button>').replaceAll('.but_minus');
				}
				
				if( value == maxvalue){
					$('<button class="but but_plus disabled"><ion-icon class ="plus" name="arrow-forward-outline"></ion-icon></button>').replaceAll('.but_plus');
				}
				else{
					$('<button class="but but_plus"><ion-icon class ="plus" name="arrow-forward-outline"></ion-icon></button>').replaceAll('.but_plus');
				}
					
				$('<input type="text" class="page" disabled value="'+value+'">').replaceAll('.page');
			}
		})
	})
}