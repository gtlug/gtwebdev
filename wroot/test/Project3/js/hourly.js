var Hourly = 
{
    /**
     * Page bootstrap
     * @param Event event
     * @return void
     */
    init: function(event) 
    {
        Hourly.setDataSet(1);
    },

    /**
     * Update navigation to "highlight" selected page
     * @param integer col
     */
    setDataSet: function(col) 
    {
        $('data').select('td.selected').each(function(td) 
        {
            td.removeClassName('selected');
        });
        var select = 'td.col' + col;
        //alert(select);
        $('data').select(select).each(function(td) 
        {
            td.addClassName('selected');
        });
    }
};
// register bootstrap
document.observe('dom:loaded', Hourly.init);