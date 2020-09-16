/***** Notes *******
1.	Methods like keyup, keydown, and click won't trigger events like this: $('.remove').click(function(){}; 
	Solution:
	$('#cartModal .modal-body tbody').on('click', ".remove", function (){});
2.	'typeof()' is used to check what type a variable is.
3.  IMPORTANT:
	var product = "Mop";
	var bat = "Mop";
	var names = {
		Mop : 1,
		Backpack : 2,
		PaperTowel : 3,
		Pillow : 4,
		Sunglasses : 5,
	};
	console.log(names[bat]);   //output: 1
	console.log(names.product); //output: undefined
*****/
$(document).ready(function() {
//False = original size, True = bigger than original size
var imageSize = false;
// False = not been clicked yet
var targetID;
$.ajax({
    url: "getStarRating.php",
    method: "POST",
    dataType: "json",  
    success: function(data){
    	data.forEach(function(e){
				//Appends star-inner class to each product
    		($('.star-container').parent().find("[data-name='"+e.Prod_Name+"']")).append('<div class="star-inner"></div>');
    		//Changes the width of the star-inner class for each produt
    		$('.star-container[data-name="'+e.Prod_Name+'"] .star-inner').width(ratingToPixel(e.Prod_Rating));
    		$('.star-container[data-name="'+e.Prod_Name+'"]').append('<p>'+e.Prod_Rating+'</p>'); 
    	});     	
    },
    error:function(data){console.log('Exception: '+data);}        
})				
$('.img-product').click(function (){
	if(imageSize == false){
		$(this).animate({
			'height' : 250,
			'width' : 400
		}, 1000);
		imageSize = true;
	} else {
		$(this).animate({
			'height' : 150,
			'width' : 200
		}, 1000);
		imageSize = false;
	}
});
$('.feedback-btn').click(function(){
	if((($(this).attr('data-on-off')) === 'off')){
		$(this).attr('data-on-off', 'on');
		$(this).text("Hide Feedback");
		targetID = $(this).attr('data-feedbackID');
		$.ajax({
            url: "server.php",
            method: "POST",
            data: 'feedbackID='+($(this).attr('data-feedbackID')), 
            dataType: "json",  
            success: function(data){
            	if(data !== null){
            	data.forEach(function(e) {
            		$('.feedbacks[data-feedbackID="'+targetID+'"] .blockquote').append(
            			'<span>'+ '<p class="mb-0 font-weight-normal">' + e.F_Feedback + '</p>' +
            			'<footer class="blockquote-footer">' + 
            			'<span class="firstname font-weight-normal font-italic">' + e.F_Fname + '</span>' + '&nbsp' +
            			'<span class="lastname font-weight-normal font-italic">'  + e.F_Lname + '</span>' +
            			'</footer>' +
            			'</span>'
            		);
            	});
            	} else {
            		$('.feedbacks[data-feedbackID="'+targetID+'"] .blockquote').append('<span>No Feedbacks</span>');
            	}
            },
                error:function(data){console.log('Exception: '+data);}        
    	})	
	} else {
		targetID = $(this).attr('data-feedbackID');
		$('.feedbacks[data-feedbackID="'+targetID+'"] .blockquote').find('span').remove();
		$(this).text("Show Feedback");
		$(this).attr('data-on-off', 'off');
	}
});
$('.write-feedback').on('click', function(){
	targetID = $(this).attr('data-feedbackID');
	// The Modal 
	$('.modal-body .hidden-id').attr('value', targetID);
});
//TODO: Check to see if user clicked "Are you over 18" on submit button before forwarding information to writeFeedback.php
$('form').on('submit', function(){
	$.ajax({
		url: "writeFeedback.php",
		method: "POST",
		data: $(this).serialize(),
		dataType: "text",
		success: function (data){
			console.log(data);
			alert(data);
		},
		error:function(data){console.log('Exception: '+data);} 
	})
});
//TODO: Find ID # then change data-on-off in the original DOM to 'off' before removing element from modal. 
$('#cartModal .modal-body tbody').on('click', ".remove", function (){
	var element = $(this).parent().parent().find('#cart-headerNames');
	var productName = $(element).text();
	var productID = productName;
	productID = prodToID(productID);
	$('.addToCart[data-feedbackID="'+productID+'"]').attr('data-on-off', 'off');
	$(element).parent().remove();
});
//TODO: Create custom modal here for each product in Javascript
$('.addToCart').on('click', function (){
	var id = $(this).attr('data-feedbackID');
	var onOff = $(this).attr('data-on-off');
	var element = this;
	var price = priceOfProd(id);
	id = nameOfProdID(id);
	if(onOff == "off"){
		$('#cartModal .modal-body tbody').append('<tr>' +
		    '<th id="cart-headerNames" scope="row" value="">'+ id + '</th>'+
		    '<td>'+'<input class="input-column quantity" type="number" min="1" step="1" required>'+'</td>' +
		    '<td>'+'X'+'</td>' +
		    '<td class="prod-price">'+ price +'</td>' +
		    '<td class="total" data-id="'+id+'">'+ '</td>' +
		    '<td>'+'<button type="button" class="btn btn-warning remove">Remove</button>' + '</td>' +
		  '</tr>');
		$(element).attr('data-on-off', "on");
	}
});
//TODO: Check if cart is empty or not and post appropriate response
$('#checkout-btn').on('click', function(){
	var check = $('#cartModal .modal-body tbody').has('tr');
	console.log(check);
	if(check.length > 0){
		$('#cartModal .modal-body tbody').find('tr').remove();
		$('body .addToCart').attr('data-on-off', 'off');
		console.log("inside "+ check);
		$('#cartModal #checkout-btn').attr('data-target', "#checkout-modal");

	}else {
		$('#cartModal #checkout-btn').attr('data-target', "");
		alert('Please add items into shopping cart');
	}
});

//Purpose: To update the product price in modal when user enters quantity number.
$('#cartModal .modal-body tbody').on('keyup', ".quantity", function() {
	var productName = $(this).parent().parent().find('#cart-headerNames');
	productName = $(productName).text();
	var element = $(this).parent().parent().find('.prod-price');
	var quantityInput = $(this).val();
	var totalPrice = quantityInput * element.text();
	totalPrice = Math.round(totalPrice*100)/100;
	$('.total[data-id="'+productName+'"').text(totalPrice);
});
function priceOfProd(id){
	var names = [
		"Nothing",
		5.99,
		30.99,
		8.99,
		41.99,
		200
	];
	return names[id];
}
function prodToID(product){
	var names = {
		Mop : 1,
		Backpack : 2,
		PaperTowel : 3,
		Pillow : 4,
		Sunglasses : 5,
	};
	return names[product];
}
function nameOfProdID(id){
	var names = [
		"Nothing",
		"Mop",
		"Backpack",
		"PaperTowel",
		"Pillow",
		"Sunglasses"
	];
	return names[id];
}
function ratingToPixel(rating){
	//Notes: Every 0.056 star/ 1px. Each 1 full star = 18 px
	var rate = 5 / 90;
	var starValue;

	starValue = rating / rate;
	return starValue;
}
});

