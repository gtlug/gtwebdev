var Index = {
    /**
    * Page bootstrap
    * @param Event event
    * @return void
    */
    init: function(event) {
        $('navigation').select('a').each(function(a) {
            a.observe('click', Index.navigation_Click);
        });
    },

    /**
    * Navigation anchor event handler
    * NOTE: Event handlers are bound to event objects
    * The 'this' keyword represents the <a> tag.
    * @param Event event
    */
    navigation_Click: function(event) {
        Index.setContent(this.href);
        Index.setNavigationSelected(this.parentNode);
        // prevent event from bubbling up
        Event.stop(event);
        this.blur();
    },

    /**
    * Set content location
    * @param string href location to set content to 
    */
    setContent: function(href) {
        window.frames[0].location = href;
    },

    /**
    * Update navigation to "highlight" selected page
    * @param HTMLElement selected <li> element
    */
    setNavigationSelected: function(selected) {
        $('navigation').select('li.selected').each(function(li) {
            li.removeClassName('selected');
        });
        selected.addClassName('selected');
    }
};
// register bootstrap
document.observe('dom:loaded', Index.init);