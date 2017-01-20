
function majImage() 
{
	if (document.getElementById('selecteur').value == "0") 
	{
		document.getElementById('monimage').src = '';
	}
	else if(document.getElementById('selecteur').value == "1") 
	{
		document.getElementById('monimage').src = '../icon/greenbutton.png';
	}
	else if(document.getElementById('selecteur').value == "2")
	{
		document.getElementById('monimage').src = '../icon/orangebutton.png';
	}
	else if(document.getElementById('selecteur').value == "3")
	{
		document.getElementById('monimage').src = '../icon/redbutton.png';
	}
}
