var script = document.createElement('script');
script.src = 'js/code.jquery.com_jquery-3.7.0'; // Check https://jquery.com/ for the current version
document.getElementsByTagName('head')[0].appendChild(script);

document.onclick = event =>{
    target = event.target;
    
    
    if(target.closest('.add-to-cart')){
        let productname = target.closest('.info').querySelector('h4').textContent;
        console.log(productname);
        
        $.post(
            'php/addCart.php', 
            {productname: productname},
            function(response){
                console.log(response);
            }
        );
    }
}
