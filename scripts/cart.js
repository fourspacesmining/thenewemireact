$(document).ready()

var shoppingCart = (function() {
    // =============================
    // metodos y propiedades privados
    // =============================
    cart = [];
    
    // Constructor
    function Item(name, price, count, amount) {
      this.name = name;
      this.price = price;
      this.count = count;
      this.amount = amount;
    }
    
    // guardar carrito
    function saveCart() {
      sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    }
    
      // cargar carrito
    function loadCart() {
      cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
      loadCart();
    }
    
    // =============================
    // metodos y propiedades publicos
    // =============================
    var obj = {};
    
    // Agregar a carrito
    obj.addItemToCart = function(name, price, count) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count ++;
          saveCart();
          return;
        }
      }
      var item = new Item(name, price, count);
      cart.push(item);
      saveCart();
    }
    // establecer conteo de item
    obj.setCountForItem = function(name, count) {
      for(var i in cart) {
        if (cart[i].name === name) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remover item del carrito
    obj.removeItemFromCart = function(name) {
        for(var item in cart) {
          if(cart[item].name === name) {
            cart[item].count --;
            if(cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
      }
      saveCart();
    }
  
    // Remover todos los items de carrito
    obj.removeItemFromCartAll = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }
  
    // limpiar carrito
    obj.clearCart = function() {
      cart = [];
      saveCart();
    }
  
    // Conteo de carrito
    obj.totalCount = function() {
      var totalCount = 0;
      for(var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }
  
    // Total carrito
    obj.totalCart = function() {
      var totalCart = 0;
      for(var item in cart) {
        totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }
  
    // enlistar carrito
    obj.listCart = function() {
      var cartCopy = [];
      for(i in cart) {
        item = cart[i];
        itemCopy = {};
        for(p in item) {
          itemCopy[p] = item[p];
  
        }
        itemCopy.total = Number(item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
  
    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
  })();
  
  
  // *****************************************
  // Triggers / Events
  // ***************************************** 
  // Agregar item
 
  
  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for(var i in cartArray) {
      var total = Number(cartArray[i].total);
      output += "<tr>"
        + "<td><img src='/paginallaves/productos/" + cartArray[i].name + "/" + cartArray[i].name +".png' alt='" + cartArray[i].name + "'></td>"
        + "<td>" + cartArray[i].name + "</td>" 
        + "<td class = 'singular'>($" + cartArray[i].price.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + ")</td>"
        + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
        + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
        + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
        + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
        + " = " 
        + "<td>$" + total.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "</td>" 
        +  "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart().toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2}));
    mostrarCarrito();
  }


  function mostrarCarrito() {
    $('.total-count').html(shoppingCart.totalCount());
  }
  
  
  //botones para agregar, aumentar, eliminar y borrar todo
  document.addEventListener('click', function(e) {
    if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('modalBtn')) {
      var name = e.target.getAttribute('data-name');
      var price = Number(e.target.getAttribute('data-price'));
      var counterElement = document.getElementById('counter-value');
      var amount = counterElement ? Number(counterElement.innerText) : 1;
      shoppingCart.addItemToCart(name, price, amount);
      displayCart();
    } else if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('clear-cart')) {
      shoppingCart.clearCart();
      displayCart();
    } else if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('delete-item')) {
      var name = e.target.getAttribute('data-name');
      shoppingCart.removeItemFromCartAll(name);
      displayCart();
    } else if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('minus-item')) {
      var name = e.target.getAttribute('data-name');
      shoppingCart.removeItemFromCart(name);
      displayCart();
    } else if(e.target && e.target.nodeName == "BUTTON" && e.target.classList.contains('plus-item')) {
      var name = e.target.getAttribute('data-name');
      shoppingCart.addItemToCart(name);
      displayCart();
    }
  });
  
    
  // contador de items
  $('.show-cart').on("change", ".item-count", function(event) {
     var name = $(this).data('name');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
  });
  
  displayCart();