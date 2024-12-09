window.onload = function(){

    alert("Welcome to Find my Meds page !");
};

// Wait for the DOM content to load
document.addEventListener("DOMContentLoaded", function () {
    // Add event listener to the form submission
    var form = document.forms["Byname-form"];
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission
  
      // Get the form values
      var medicineName = form.elements["Medicine_name"].value;
      var quantity = form.elements["Quantity"].value;
      var name = form.elements["Name"].value;
      var phoneNumber = form.elements["Phone_number"].value;
      var address = form.elements["address"].value;
      var email = form.elements["email"].value;
  
      // Display the form values in the console
      console.log("Medicine Name or Code:", medicineName);
      console.log("Quantity:", quantity);
      console.log("Name:", name);
      console.log("Phone Number:", phoneNumber);
      console.log("Address:", address);
      console.log("Email:", email);
  
      // You can perform further actions with the form data here
      // For example, you can send it to a server using AJAX
      // or perform validation before submitting the form.
    });
  
    // Add event listener to the cancel button
    var cancelButton = document.getElementById("cancelbutton");
    cancelButton.addEventListener("click", function () {
      form.reset(); // Reset the form fields
    });
  
    // Assuming you have an HTML element with the id "logout"
    var logoutButton = document.getElementById("logout");
  
    // Add an event listener to the logout button/link
    logoutButton.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent the default link behavior
  
      // Perform the logout action
      logout();
    });
  
    // Logout function
    function logout() {
      // Perform the necessary actions to log out the user
      // For example, clearing session data or redirecting to a login page
  
      // Clear session data (if applicable)
      // Example:
      sessionStorage.clear();
  
      // Redirect to a login page (replace "login.html" with your actual login page)
      window.location.href = ".../Deliver.html";
    }
  });
  