var Hourly = {
    /**
    * Page bootstrap
    * @param Event event
    * @return void
    */
    init: function(event) {
        Hourly.setDataSet(1);
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
    setDataSet: function(col) {
        $('data').select('td.selected').each(function(td) {
            td.removeClassName('selected');
        });
        $('data').select('td.col' + col).each(function(td) {
            td.addClassName('selected');
        });
    }
};
// register bootstrap
document.observe('dom:loaded', Hourly.init);