



function insertValidation()
{
	var category =  document.item_create.category;
	var stat = document.item_create.status;
	var loc = document.item_create.location;
	var col = document.item_create.color;
	if(checkcat(category))
	{
		if(checkst(stat))
		{
			if(checkcol(col))
			{
				if(checklo(loc))
				{
					return true;
				}
			}
		}
	}
	return false;
}



function checkcat(category)
	{ 
			if(category.value == " ")
			{
			alert('ERROR CATEGORY can not be empty');
			category.focus();
			return false;
			}
			else
			{
				return true;
			}
	}

function checkcol(col)
	{ 
			if(col.value == " ")
			{
			alert('ERROR COLOR can not be empty');
			col.focus();
			return false;
			}
			else
			{
				return true;
			}
	}
function checklo(loc)
	{
		if(loc.value == " ")
		{
		alert('ERROR LOCATION can not be empty');
		loc.focus();
		return false;
		}
		else
		{
			return true;
		}
	}


function checkst(stat)
	{ 
			if(stat.value == " ")
			{
			alert('ERROR STATUS can not be empty');
			stat.focus();
			return false;
			}
			else
			{
				return true;
			}
	}



