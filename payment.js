document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    const cardNumber = document.getElementById("cardNumber").value;
    const cardHolderName = document.getElementById("cardHolderName").value;
    const expiryDate = document.getElementById("expiryDate").value;
    const cvv = document.getElementById("cvv").value;
  
    // Here you would perform further validation and integrate with a payment gateway
    // For demonstration purposes, we'll just log the form values
    console.log("Card Number:", cardNumber);
    console.log("Card Holder Name:", cardHolderName);
    console.log("Expiry Date:", expiryDate);
    console.log("CVV:", cvv);
  
    // You can redirect the user to a success or error page after processing the payment
  });
  
