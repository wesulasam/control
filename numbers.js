function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      alert('Your Registration number has accepted....');
      document.RegForm.id.focus();
      return true;
      }
      else
      {
      alert('Please input numeric characters only');
      document.RegForm.id.focus();
      return false;
      }
   }
