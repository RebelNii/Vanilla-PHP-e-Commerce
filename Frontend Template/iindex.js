$(document).ready(function(){
    //banner carousel
    $("#banner .owl-carousel").owlCarousel({
        dots:true,
        item:1
    });

   //top sales carousel
   $("#best-sale .owl-carousel").owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    response:{
        0: {
            item: 1
        },
        600:{
            item: 3
        },
        10000:{
            item:5
        }
    }
});

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-items",
        layoutMode: "fitRows"
    });

    //onClick filter
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue})
    });


});


//product_details input
let Up = document.querySelector('.qty-up')

Up.addEventListener('click', (e) => {
    e.preventDefault();
    let Input = document.querySelector('.product_cart');
    if(Input.value <= 9){
      return  Input.value++
    }
});

let Down = document.querySelector('.qty-down');

Down.addEventListener('click', (e) => {
    e.preventDefault();
    let Input = document.getElementById('product_cart');
    if(Input.value <= 10){
       return Input.value--
    }
});



const stripe = stripe('<?php echo STRIPE_PUBLISHABLE_KEY ?>');

const payBtn = document.querySelector('#payButton');


//Payment request handler
payBtn.addEventListener('click', function(evt){
    setLoading(true);
    createCheckoutSession().then(function(data){
        if(data.sessionId){
            stripe.redirectToCheckout({
                sessionId: data.sessionId
            }).then(handleResult);
        }else{
            handleResult(data);
        }
    })
});

//create a checkout session with selected product
const createCheckoutSession = function (stripe) {
    return fetch('cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            createCheckoutSession: 1
        })
    }).then(function(result){
        return result.json();
    });
};


//error handleing from checkout request
const handleResult = function(result){
    if(result.error){
        setLoading(false);
        alert(result.error.message);
    }
};

//show spinner on payment request
const setLoading = function(isLoading){
    if(isLoading){
        //disable button and show spinner
        payBtn.disabled = true;
        document.querySelector('#spinner').classList.remove('hidden');
        document.querySelector('#buttonText').classList.add('hidden');
    }else{
        //enable button and hide spinner
        payBtn.disabled = false;
        document.querySelector('#spinner').classList.add('hidden');
        document.querySelector('#buttonText').classList.remove('hidden');
    }
};

function showMessage(MSG){
    const msgContainer = document.querySelector('#payResponse');
    msgContainer.classList.remove('hidden');
    msgContainer.textContent = MSG;

    setTimeout(function(){
        msgContainer.classList.add('hidden');
        MSG.textContent = "";
    },5000)
}