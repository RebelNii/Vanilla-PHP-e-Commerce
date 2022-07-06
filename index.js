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



const stripe = 'pk_test_51KqztJE0lh59A6dka3pDQ75MwE6DSD7TqyDjAtwN3f3EGM4f7aBp8CEDeeaDq6GYVsuceQbmhg2Yn4xoPiVymAyc00o62NiqiW'

var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};
  
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
  
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission.
var form = document.getElementById('stripe-form');
form.addEventListener('submit', function(event) {
    //event.preventDefault();
  
    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});
  
// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('stripe-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
  
    // Submit the form
    form.submit();
}