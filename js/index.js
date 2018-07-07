var mainServicesButtonNode = $('#mainServicesButton')
var servicesButtonNode = $('#servicesButton');

mainServicesButtonNode.click(scrolling)
servicesButtonNode.click(scrolling);

function scrolling(event) {
	$('html, body').animate(
		{
			scrollTop: $('#sectionMenu').offset().top
		},
		2000
	);
}
