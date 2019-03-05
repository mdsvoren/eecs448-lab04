function testFunc()
{
  let gelatoQ = quantityTest(document.getElementById("gelato").value);
  let sigfoxQ = quantityTest(document.getElementById("sigfox").value);
  let bookQ = quantityTest(document.getElementById("book").value);

  let shipMethod = checkBox(getRadioVal());

  let email = ValidateMail(document.getElementById("userName").value);
  let password = document.getElementById("passwordText").value;

  //check if everything it true
  if (gelatoQ && sigfoxQ && bookQ && bookQ && shipMethod && email && password)
  {
    return true;
  }
  else
  {
    return false;
    console.log("false");
  }


  function getRadioVal()
   {
    let val;
    // get list of radio buttons with specified name
    let buttons = document.getElementsByName("shipping");
    
    // go through radio buttons to see if 
    for (let i=0, len=buttons.length; i<len; i++) 
    {
        if (buttons[i].checked)
        {
          val = buttons[i].value; 
          break;
        }
    }
    return (val);
  }

  
 //use preventDefault()
}

function quantityTest(quantity)
{
  if (Number.isInteger(quantity) && quantity >=0)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function checkBox(val)
{
  if (val!= undefined)
  {
    return true;
  }
  else
  {
    return false;
  }
}

//this function was taken from https://www.w3resource.com/javascript/form/email-validation.php
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true);
  }
    return (false);
}
