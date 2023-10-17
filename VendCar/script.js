let cart = [];

function addToCart(item, price) {
  cart.push({ item, price });
  updateCart();
}

function removeFromCart(index) {
  cart.splice(index, 1);
  updateCart();
}

function updateCart() {
  let cartElement = document.getElementById("cart");
  cartElement.innerHTML = "<h2>Keranjang Belanja</h2>";

  if (cart.length === 0) {
    cartElement.innerHTML += "<p>Keranjang kosong.</p>";
  } else {
    cart.forEach((item, index) => {
      cartElement.innerHTML += `<p>${item.item}: $${item.price} <button onclick="removeFromCart(${index})">Hapus</button></p>`;
    });
    let total = cart.reduce((acc, item) => acc + item.price, 0);
    cartElement.innerHTML += `<p>Total: $${total}</p>`;
  }
}

function checkout() {
  alert("Terima kasih telah membeli mobil bersama kami!");
  cart = [];
  updateCart();
}
