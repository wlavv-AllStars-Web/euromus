function viewMore(e){

    const button = e; 
    console.log(button.innerText)
    
    if (button.innerText === "VIEW LESS") {
        button.innerText = "VIEW MORE";
        const dataElement = button.previousElementSibling;
        dataElement.classList.remove("active_card");
    } else {
        
        const card_texts = document.querySelectorAll(".card_text");
        card_texts.forEach((item) => {
            if (item.classList.contains("active_card")) {
                item.classList.remove("active_card");
                item.nextElementSibling.innerText = "VIEW MORE";
            }
        });

        button.innerText = "VIEW LESS";
        const dataElement = button.previousElementSibling;
        dataElement.classList.add("active_card");
    }
    
    
}

function anchorLink(e) {
    e.preventDefault();
}

// Wrap the entire script in a function
function moveQuantityInput() {


    // Find the #quantity_wanted input element
    var quantityInput = document.querySelector('#product #quantity_wanted');
    
    // Find the .input-group-btn-vertical element
    var inputGroupVertical = document.querySelector('#product .input-group-btn-vertical');
    
    // Check if inputGroupVertical is null
    if (inputGroupVertical === null) {
        // If inputGroupVertical is null, retry after a short delay
        setTimeout(moveQuantityInput, 100);
        return; // Exit the function early
    }
    
    // Get the buttons within inputGroupVertical
    var buttons = inputGroupVertical.querySelectorAll('button');
    
    // Append the quantityInput between the buttons in inputGroupVertical
    if(quantityInput && inputGroupVertical){
        inputGroupVertical.insertBefore(quantityInput, buttons[1]);
    }

}

// Call the function when DOM content is loaded
// document.addEventListener("DOMContentLoaded", moveQuantityInput);

// function addInputBootstrap(){
//     var newHtml = '<div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="number" name="qty" id="quantity_wanted" inputmode="numeric" pattern="[0-9]*" value="1" min="1" class="input-group form-control" aria-label="Quantity" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>';

//     var elements = document.querySelectorAll('.qty');
//     elements.forEach(function(element) {
//         element.innerHTML = '';
//         element.innerHTML = newHtml;
//     });
    


// }

// document.addEventListener("DOMContentLoaded", addInputBootstrap);
// document.addEventListener('DOMContentLoaded', function () {

//     document.addEventListener('click', function (event) {
//         if (event.target.classList.contains('plus')) {
//             var countInput = event.target.closest('.qty').querySelector('.count');
//             countInput.value = parseInt(countInput.value) + 1;
//         }

//         if (event.target.classList.contains('minus')) {
//             var countInput = event.target.closest('.qty').querySelector('.count');
//             countInput.value = parseInt(countInput.value) - 1;
//             if (parseInt(countInput.value) === 0) {
//                 countInput.value = 1;
//             }
//         }
//     });

// });


// document.addEventListener('DOMContentLoaded', function () {

//     // Event listener for the plus button
//     document.addEventListener('click', function (event) {
//         if (event.target.classList.contains('plus') || event.target.classList.contains('minus')) {
//             var countInput = event.target.closest('.product-quantity').querySelector('.product-quantity-input');
//             var currentValue = parseInt(countInput.value);
//             var minValue = parseInt(countInput.min);
//             var maxValue = parseInt(countInput.max);

//             if (event.target.classList.contains('plus') && currentValue < maxValue) {
//                 countInput.value = currentValue + 1;
//             }

//             if (event.target.classList.contains('minus') && currentValue > minValue) {
//                 countInput.value = currentValue - 1;
//             }

//             // Update the value attribute explicitly if needed
//             countInput.setAttribute('value', countInput.value);
//             console.log("Updated Value: ", countInput.value);
//         }
//     });

// //     // Event listener for the add to cart button
// //     document.querySelectorAll('.add-to-cart').forEach(function(button) {
// //         button.addEventListener('click', function() {
// //             var productId = this.dataset.idProduct;
// //             var quantityInput = this.closest('.product-quantity').querySelector('.product-quantity-input');
// //             var quantity = quantityInput.value;

// //             // Call the add to cart function with the specified quantity
// //             addToCart(productId, quantity);
// //         });
// //     });

// //     // Function to handle adding to cart
// //     // function addToCart(productId, quantity) {
// //     //     var formData = new FormData();
// //     //     formData.append('id_product', productId);
// //     //     formData.append('quantity', quantity);

// //     //     fetch('/order', {
// //     //         method: 'POST',
// //     //         body: formData
// //     //     }).then(response => response.json()).then(data => {
// //     //         if (data.success) {
// //     //             alert('Product added to cart!');
// //     //             // Update cart display, etc.
// //     //         } else {
// //     //             alert('Error adding product to cart.');
// //     //         }
// //     //     }).catch(error => {
// //     //         console.error('Error:', error);
// //     //     });
// //     // }

// // });
