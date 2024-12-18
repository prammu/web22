function validateForm() {
  const name = document.getElementById("name").value;
  const dob = document.getElementById("dob").value;
  const gender = document.getElementById("gender").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const aadhar = document.getElementById("aadhar").value;
  const address = document.getElementById("address").value;
   str="";
  // Basic validation
  if (name === "") {
    str+=("Please enter your name.\n");
    //return false;
  }

  if (dob === "") {
    str+=("Please enter your Date of Birth address.\n");
   // return false;
  }

  if (gender === "") {
    str+=("Please select your gender.\n");
    //return false;
  }
  
  if (email === "") {
    str+=("Please enter your email address.\n");
   // return false;
  }
  if (!isValidEmail(email)) {
    str+=("Please enter a valid email address.\n");
   // return false;

  }
  

  if (phone === "") {
    str+=("Please enter your phone number.\n");
    //return false;
  }

  if (aadhar === "") {
    str+=("please enter your aadhara Number\n");
    //return false;
  }
  
  if (address === "") {
    str+=("Please enter your Address .\n");
    //return false;
  }
  if(str!="")
  {
    alert(str);
    return false;
  }


  // Additional validation (e.g., date range, room availability) can be added here
   document.getElementById("f1").submit();
}

function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
