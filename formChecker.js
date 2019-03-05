function testFunc()
{
  let gelatoQ = quantityTest(document.getElementById("gelato").value);
  let sigfoxQ = quantityTest(document.getElementById("sigfox").value);
  let bookQ = quantityTest(document.getElementById("book").value);

  let shipMethod = checkBox(getRadioVal());

  let email = ValidateEmail(document.getElementById("userName").value);
  let password = checkPassword(document.getElementById("passwordText").value);


  //check if everything it true
  if (gelatoQ && sigfoxQ && bookQ && bookQ && shipMethod && email && password)
  {
    console.log("true");
    return true;

  }
  else
  {
    console.log("false");
    return false;

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


}

function quantityTest(quantity)
{
  if (quantity >=0)
  {
    return true;
  }
  else
  {
    alert("You must enter a quantity >= 0")
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
    alert("Select shipping method");
    return false;
  }
}

//this function was taken from https://www.w3resource.com/javascript/form/email-validation.php
function ValidateEmail(mail)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true);
  }
  alert("Invalid email");
    return (false);
}

function checkPassword(pass)
{
  if (pass!= "")
  {
    return true;
  }
  else{
    alert("You must enter a password");
    return false;
  }
}
