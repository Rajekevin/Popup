var popup = (function() 
{

	function init() {

		var overlay = $('.overlay');

		$('.popup-button').each(function(i, el) //A partir du click du bouton la pop pup se déclenche
		{
			var box = $('#' + $(el).attr('data-modal'));
			var close = $('.close');

			
			function removeModal() {
				box.removeClass('show');
			}

			
			function removeModalHandler() {
				removeModal(); 
			}

			
			$(el).click(function()
			{	
				box.addClass('show');
				overlay.unbind("click");
				
				overlay.bind("click", removeModalHandler);
			});


			/*Close Pop pup*/
			close.click(function(event)
			{
				event.stopPropagation();
				removeModalHandler();
			});

		});
	}

	init();

})();