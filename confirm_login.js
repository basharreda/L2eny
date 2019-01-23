

//to validate login form
function validate()
{ 
	// name Email password re enter password
	var pass2 = document.logform.pass;
	var user2 = document.logform.user;

	if(allLetter(user2))
	{
		if(passid_validation(pass2,7,12))
		{
			return true;
		}
	
	}
	return false;	
}

//to validate sign up form
function formValidation()
{
var passid = document.regform.password;
var passid2 = document.regform.password_2;
var uname = document.regform.user;
var cty = document.regform.city;
var ucountry = document.regform.country;
var uemail = document.regform.email;
var phn = document.regform.phone;
if(allLetter(uname))
{
    if(phonenumber(phn))
        {
        if(ValidateEmail(uemail))
        { 
                if(countryselect(ucountry))
                {
                    if(cityselect(cty))
                    {
                        if(ValidateEmail(uemail))
                            {
                                if(passid_validation(passid,7,12))
                                    {
										if(passid2_validation(passid2,7,12))
										{
											return true;
										}
                                    }
                            } 
                        
                    } 
                }
        }
        }
}
return false;

}


















function passid_validation(passid,mx,my)
	{
	var passid_len = passid.value.length;
	if (passid_len == 0 ||passid_len >= my || passid_len < mx)
		{
			alert("PASSWORD should not be empty / length be between "+mx+" to "+my);
			passid.focus();
			return false;
		}
		return true;
		}
function passid2_validation(passid2,mx,my)
		{
		var passid_len = passid2.value.length;
		if (passid_len == 0 ||passid_len >= my || passid_len < mx)
			{
				alert("PASSWORD should not be empty / length be between "+mx+" to "+my);
				passid2.focus();
				if(passid != passid2)
				{
				alert("Not Confirm!");
				return false;
				}
				return false;
			}
		
		return true;
		}		
		

	function allLetter(uname)
	{ 
		var letters = /^[A-Za-z]+$/;
		if(uname.value.match(letters))
			{
			return true;
			}
		else
			{
			alert('uname must have alphabet characters only');
			uname.focus();
			return false;
			}
	}
	
function countryselect(ucountry)
	{
		if(ucountry.value == " ")
			{
				alert('Select your COUNTRY ');
				return false;
			}
		else
			{
				return true;
			}
	}
function cityselect(cty)
	{
		if(cty.value == " ")
			{
				alert('Select your CITY ');
				return false;
			}
		else
			{
				return true;
			}
	}
function phonenumber(phn)
	{
	  var phoneno = /^\d{11}$/;
	  if(phn.value.match(phoneno))
			{
		  return true;
			}
		  else
			{
			alert("Not a valid PHONE Number");
			return false;
			}
	}
function ValidateEmail(uemail)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(uemail.value.match(mailformat))
		{
		return true;
		}
	else
		{
		alert("You have entered an invalid EMAIL address!");
		return false;
		}
}	 


