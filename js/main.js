//function to allow user to increase and decrease font size
//within articles, or single posts
$('#larger-text').click(function() {
	$('.entry-content p').not( '.wp-caption-text' ).css('font-size', '1.5em');
	});
	
$('#normal-text').click(function() {
	$('.entry-content p').not( '.wp-caption-text' ).css('font-size', '1.2em');
	});

$('#smaller-text').click(function() {
	$('.entry-content p').not( '.wp-caption-text' ).css('font-size', '1em');
	});

//functions to toggle dropdown nav menu
function showDropTop(evt) {
	$('.sub-nav').toggleClass('visible');
	}
	
function hideDropTop(evt) {
	$('.sub-nav').removeClass('visible');
	}

//call the dropdown nav menu function
$(document).ready(function() {
    $('.parent').on("click", showDropTop);
    $('#content').on("click", hideDropTop);
});

//function to remove left alignment of post images
function realignPostImages() {
if ( $('.wp-caption').hasClass('alignright')) {
$('.wp-caption').removeClass('alignright');
$('.wp-caption').addClass('aligncenter');
}
}

//function to prevent link to image attachment page
function preventClickImageAttach(){
$('a[rel*=attachment]').click(function(e){
    e.preventDefault(); 
})
}
//call the image functions
$(document).ready(function() {
realignPostImages();
preventClickImageAttach();
});