// Handle quantity changes and add to cart
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");

  cards.forEach((card) => {
    const minusBtn = card.querySelector(".quantity-btn.minus");
    const plusBtn = card.querySelector(".quantity-btn.plus");
    const quantityValue = card.querySelector(".quantity-value");
    const cartBtn = card.querySelector(".cart-btn");

    let quantity = 1;
    updateQuantity();

    minusBtn.addEventListener("click", function () {
      if (quantity > 1) {
        quantity--;
        updateQuantity();
      }
    });

    plusBtn.addEventListener("click", function () {
      quantity++;
      updateQuantity();
    });

    cartBtn.addEventListener("click", function () {
      addToCart(card);
    });

    function updateQuantity() {
      quantityValue.textContent = quantity;
    }
  });
});

// Add selected product to the cart
function addToCart(card) {
  // Get the image, name, and price of the product
  const productImageElement = card.querySelector("img"); // Get the image element
  const productImage = productImageElement
    ? productImageElement.getAttribute("src")
    : null; // Get the image URL

  const productName = card.querySelector("h3").textContent; // Get the product name
  const productPrice = card.querySelector('input[name="product_price"]').value; // Get the product price

  const quantityElement = card.querySelector(".quantity-value"); // Get the quantity element
  const quantity = parseInt(quantityElement.textContent, 10); // Convert the quantity to an integer

  // Debugging logs
  console.log("Product Image URL:", productImage);
  console.log("Product Name:", productName);
  console.log("Product Price:", productPrice);
  console.log("Quantity:", quantity);

  // Check if the quantity is greater than 0
  if (quantity > 0 && productImage && productName && productPrice) {
    // Proceed with the fetch request to add the product to the cart
    fetch("add_to_cart.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `product_name=${encodeURIComponent(
        productName
      )}&quantity=${quantity}&price=${encodeURIComponent(
        productPrice
      )}&product_image=${encodeURIComponent(productImage)}`,
    })
      .then((response) => {
        // Log the response as text to see what the server is returning
        return response.text(); // Change this from response.json() to response.text()
      })
      .then((text) => {
        console.log("Server Response:", text); // Log the server response
        // Try parsing the response as JSON
        const data = JSON.parse(text);
        if (data.success) {
          alert("Added to cart successfully!");
          quantityElement.textContent = 0; // Reset quantity to 0 after adding to cart
        } else {
          alert("Failed to add to cart. Please try again.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("An error occurred. Please try again.");
      });
  } else {
    alert(
      "Please select a valid quantity and make sure all product data is available."
    );
  }
}

// Style price elements on load
document.addEventListener("DOMContentLoaded", function () {
  const priceElements = document.querySelectorAll(".font-bold");
  priceElements.forEach(function (priceElement) {
    priceElement.style.color = "#310E05";
    priceElement.style.fontWeight = "bold";
    priceElement.style.marginLeft = "10px";
    priceElement.style.fontSize = "larger";
  });
});
