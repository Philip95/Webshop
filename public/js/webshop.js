function addToShoppingCart(id) {
  sessionStorage.setItem("Id"+id, id);
}

function removeFromShoppingCart(id) {
    sessionStorage.removeItem("Id"+id);
    location.reload();
}
