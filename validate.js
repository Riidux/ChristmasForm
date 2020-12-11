function validateForm() {
  var fname = document.forms["wishForm"]["firstName"].value;
  if (fname == null || fname == "") {
    alert("First name must be filled out.");
    return false;
  }
    
    var lname = document.forms["wishForm"]["lastName"].value;
  if (lname == null || lname == "") {
    alert("Last name must be filled out.");
    return false;
  }
    
    var gender = document.forms["wishForm"]["gender"].value;
  if (gender == null || gender == "") {
    alert("Gender option must be picked.");
    return false;
  }
    
    var country = document.forms["wishForm"]["country"].value;
  if (country == null || country == "") {
    alert("Country must be filled out.");
    return false;
  }
    
    var age = document.forms["wishForm"]["age"].value;
  if (age == null || age == "") {
    alert("Age must be filled out.");
    return false;
  }
    if (isNaN(age)) {
        alert("Age must be a number.");
    return false;
    }
    if (age < 0 || age > 99) {
        alert("Age has to be between 0 and 99.");
    return false;
    }
    
    var wish = document.forms["wishForm"]["wish"].value;
  if (wish == null || wish == "") {
    alert("Wish must be filled out.");
    return false;
  }
    
}