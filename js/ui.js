$(function(){
	// Accordion
	$("#accordion").accordion({
		header: "h3" 
	});

	// Tabs
	$('#tabs').tabs();


	// Dialog			
	$('#dialog').dialog({
		autoOpen: false,
		width: 600,
	});
	$('#dialog_skills').dialog({
		autoOpen: false,
		width: 600,
	});
	$('#dialog_brandon').dialog({
		autoOpen: false,
		width: 600,
		show: "blind",
		position: '100px 300px'
	});
	$('#dialog_social').dialog({
		autoOpen: false,
		width: 315,
	});
	
	// Dialog Link
	$('#dialog_link').click(function(){
		$('#dialog').dialog('open');
		return false;
	});

	// Datepicker
	$('#datepicker').datepicker({
		inline: true
	});
	
	// Slider
	$('#slider').slider({
		range: true,
		values: [17, 67]
	});
	
	// Progressbar
	var i = 0;
		while(i <= 99){
		$("#progressbar").progressbar({
			value: i 
		});
		i++;
	}
	
	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); }, 
		function() { $(this).removeClass('ui-state-hover'); }
	);
	
});

/*I'm ashamed of this. Don't look.*/
function GetHeight()
{
        var y = 0;
        if (self.innerHeight)
        {
                y = self.innerHeight;
        }
        else if (document.documentElement && document.documentElement.clientHeight)
        {
                y = document.documentElement.clientHeight;
        }
        else if (document.body)
        {
                y = document.body.clientHeight;
        }
        return y-130;
}
document.getElementById('body').innerHTML='<style type="text/css">#wrapper {min-height: '+GetHeight()+'!important;height: auto !important;height: '+GetHeight()+'!important;}</style>';

