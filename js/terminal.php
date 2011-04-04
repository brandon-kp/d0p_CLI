$(function()
{
	$('.close').click(function(){
		$('.close').parent().fadeOut('slow', function() {});
		return false;
	});
	var  testTextBox = $('#textbox');
	var output = $('#output');
	var code =null;
	testTextBox.keypress(function(e)
	{
		code= (e.keyCode ? e.keyCode : e.which);
		if (code == 13) 
		{
			if(testTextBox.val() == "about")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<br />d0p@localhost:~$ Opening 'about' dialog...<br />");
				$('#dialog').dialog('open');
				$('#textbox').val('');
			}
			if(testTextBox.val() == "skills")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<br />d0p@localhost:~$ Opening 'skillset' dialog...<br />");
				$('#dialog_skills').dialog('open');
				$('#textbox').val('');
			}			
			if(testTextBox.val() == "social")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<br />d0p@localhost:~$ Opening 'social' dialog...<br />");
				$('#dialog_social').dialog('open');
				$('#textbox').val('');
			}
			if(testTextBox.val() == "brandon")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<br />d0p@localhost:~$ Opening 'personal info' dialog...<br />");
				$('#dialog_brandon').dialog('open');
				$('#textbox').val('');
			}	
			if(testTextBox.val() == "blog")
			{
				$('#output').append("<br />d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("d0p@localhost:~$ Opening 'blog' window...<br />");
				window.open('http://brandonkprobst.tumblr.com');
				$('#textbox').val('');
			}
			if(testTextBox.val() == "lol")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<br />d0p@localhost:~$ Since Sunday evening, I've designed and coded about 10 designs for a portfolio. None of which I liked by the time I finished them. So, in about an hour, I threw together this command line, and I'm in love. Unfortunately, I have to go to bed.<br />");
				$('#textbox').val('');
			}
			if(testTextBox.val() == "fade")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#testfade').load('../datapull/about.html');
				$('#testfade').fadeIn('slow', function() {
				// Animation complete
				});
				$('#textbox').val('');
			}
			if(testTextBox.val() == "help")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<div id=\"cmd_help\"></div>");
				$('#cmd_help').load('datapull/help.html', function() {});
				$('#textbox').val('');
			}
			if(testTextBox.val() == "uptime")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<span class=\"a1\">Uptime and load averages</span>");
				$('#output').append("<div id=\"uptimeload\"></div>");
				$('#uptimeload').load('../datapull/uptime.php', function() {});
				$('#textbox').val('');
			}
			if(testTextBox.val() == "lastfm")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<span class=\"a1\">Recently played last.fm tracks</span>");
				$('#output').append("<div id=\"lastfmpull\"></div>");
				$('#lastfmpull').load('../datapull/lastfm.php', function() {});
				$('#textbox').val('');
			}
			var split = testTextBox.val().split( /\s+/ );
			if(split[0] == "whois")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<span class=\"a1\">Whois domain lookup</span>");
				$('#output').append("<div id=\"whoisinfo\"></div>");
				$('#whoisinfo').load('../datapull/whois.php?domain='+split[1], function() {});
				$('#textbox').val('');
				window.location('#whoisinfo');
			}
			if(split[0] == "tor")
			{
				$('#output').append("d0p@localhost:~$ "+testTextBox.val());
				$('#output').append("<span class=\"a1\">Bittorrent search</span>");
				$('#output').append("<div id=\"torlist\"></div>");
				$('#torlist').load('../datapull/tpb.php?tor='+split[1], function() {});
				$('.detLink').innerHTML = $('.detLink').href;
				$('#textbox').val('');
				window.location('#whoisinfo');
			}
		}
	});
});
$(document).ready(function() {
	$('body').fadeIn('30000', function() {});
});	