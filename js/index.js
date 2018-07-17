// Sroll function Servicios
var mainServicesButtonNode = $('#mainServicesButton')
var servicesButtonNode = $('#servicesButton');

mainServicesButtonNode.click(scrolling)
servicesButtonNode.click(scrolling);

function scrolling(event) {
	$('html, body').animate(
		{
			scrollTop: $('#sectionMenu').offset().top -80
		},
		1000
	);
}

//Scroll function Nosotros
var nosotrosButtonNode = $('#nosotrosButton')

nosotrosButtonNode.click(scrolling3)

function scrolling3(event) {
	$('html, body').animate(
		{
			scrollTop: $('#nosotrosSection').offset().top -100
		},
		1000
	);
}

//Scroll function Contacto
var contactoButtonNode = $('#contactoButton')

contactoButtonNode.click(scrolling4)

function scrolling4(event) {
	$('html, body').animate(
		{
			scrollTop: $('#contactSection').offset().top -100
		},
		1000
	);
}