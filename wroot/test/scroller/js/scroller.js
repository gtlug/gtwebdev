// JavaScript Document
var Scroller = {
	root : 'scroller',	// Replaced with actual element in bootstrap
	elements : [],		// The form elements (to be populated in bootstrap)
	LOOP : true,		// Whether to wrap around if next/prev is called at either end of array
	ABOVE : 0, 		// The number of form elements to show after current one
	BELOW : 0,		// The number of form elements to show before current one
	
	/**
	 * Form Submit event handler
	 * @param event Event
	 */
	form_Submit : function (event)
	{
		// We don't submit anything
		Event.stop(event);
		switch(this._buttonPressed)
		{
			case 'direction':
				Scroller.scroll(this, this._buttonPressedValue);
				break;
		}
	},
	
	/**
	 * Button Press event handler
	 * @param event Event
	 */
	button_Press : function (event)
	{
		// Nothing to do
	},
	
	/**
	 * Scroll to another element
	 * @param element HTMLElement current element scrolling from
	 * @param direction Integer +1 for forward, -1 for backward
	 */
	scroll : function(element, direction)
	{
		Scroller.elements.invoke('hide');
		var toIndex = element._scrollerIndex + (direction * 1);
		if(toIndex < 0)
			toIndex = Scroller.LOOP
				? Scroller.elements.length - 1
				: 0
			;
		if(toIndex >= Scroller.elements.length)
			toIndex = Scroller.LOOP
				? 0
				: Scroller.elements.length - 1
			;
		var bottom = toIndex - Scroller.BELOW;
		var top = toIndex + Scroller.ABOVE;
		// turn range on
		if(bottom < 0) bottom = 0;
		if(top >= Scroller.elements.length) top = Scroller.elements.length - 1;
		for(var i = bottom; i <= top; i++)
			Scroller.elements[i].style.display = 'block';
	}
};

// Bootstrap
// Set up event handlers
// Initialize variables
Event.observe(document, 'dom:loaded', function(event)
{
	var buttonPressEvents = $A(['mouseup', 'click', 'keyup', 'keypress']);
	Scroller.root = $(Scroller.root); // Get Element/Extend
	Scroller.elements = Scroller.root.select('form');
	Scroller.elements.each(function(form, index)
	{
		form._scrollerIndex = index;	// index in Scroller.elements
		form.observe('submit', Scroller.form_Submit);
		form.select('button.submit').each(function(button)
		{
			buttonPressEvents.each(function(eventName)
			{
				button.observe(eventName, function(event)
				{
					form._buttonPressed = this.name;
					form._buttonPressedValue = getHtmlAttribute(this, 'value');
					Scroller.button_Press.bind(this)(event);
				});
			});
		});
	});
});



/**
 * Internet Explorer developers should rot in hell for this hack.
 * @param element String|HTMLElement ID or Button element
 * @param attribute String
 * @return String value in button 'value' attribute
 */
function getHtmlAttribute(element, attribute)
{
	element = $(element);
	if(null === element)
		throw new Exception("Element not found in getHtmlAttribute()");

	if(element.outerHTML)
	{
		var regex = new RegExp(element.tagName + '[^>]* ' + attribute + '="([^"]*)"', 'i');
		var results = String(element.outerHTML).match(regex);
		if(results.length > 1)
			return results[1];
	}
	return element.getAttribute(attribute);
}
