    $(function()
    {
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
				if(testTextBox.val() == "help")
				{
					$('#output').append("d0p@localhost:~$ "+testTextBox.val());
					$('#output').append("<span class=\"a1\">Partial list of commands</span><br />");
					$('#output').append("<span class=\"cmd\">about</span> <span class=\"det\">Shows an 'about' dialog, which gives a brief history of my webdev capability.</span><br />");
					$('#output').append("<span class=\"cmd\">skills</span> <span class=\"det\">Shows a 'skillset' dialog, which gives a description of what you can pay me to do.</span><br />");
					$('#output').append("<span class=\"cmd\">blog</span> <span class=\"det\">Opens a window with containing my under-used Tumblr blog.</span><br /><hr />");
					$('#textbox').val('');
				}
			}
        });

    });