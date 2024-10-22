<h1>Productos</h1>
    <div class="product-list">
        {{foreach productsOnSale}}
        <div class="product" data-productId="{{productId}}">
            <img src="{{productImgUrl}}" alt="{{productName}}">
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <span class="price">{{productPrice}}</span>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
        {{endfor productsOnSale}}
    </div>