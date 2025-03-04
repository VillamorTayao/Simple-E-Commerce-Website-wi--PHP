const showProducts = document.querySelector('.show-products');

document.getElementById("coffee").addEventListener("click", () => {
    showProducts.innerHTML = `
        <div style="margin-right: 30px;">
            <img src="./assets/coffee-product/coffees/product1.jpg" alt="product 1">
            <p>Classic Drip and Brew (Ungrounded)</p>
            <p>&#8369; 100</p>
            <button>Buy now</button>
        </div>
        <div>
            <img src="./assets/coffee-product/coffees/product2.jpg" alt="product 2">
            <p>Classic Drip and Brew (Grounded)</p>
            <p>&#8369; 120</p>
            <button>Buy now</button>
        </div>
        `;
});

document.getElementById('syrups').addEventListener('click', () => {
    showProducts.innerHTML = `
        <div style="margin-right: 30px;">
            <img src="./assets/coffee-product/syrups/syrups.jpg" alt="product 3">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;"> 
                <p>Syrups</p>
                <button>Buy now</button>
        </div>
    `;
})

document.getElementById('others').addEventListener('click', () => {
    showProducts.innerHTML = `
        <div style="margin-right: 30px;">
            <img src="./assets/coffee-product/others/product1.jpg" alt="product 1">
            <p>Coffee Flavoring (250ml)</p>
            <p>&#8369; 150</p>
            <button>Buy now</button>
        </div>
        <div style="margin-right: 30px;">
            <img src="./assets/coffee-product/others/product2.jpg" alt="product 2">
            <p>Drip and Brew's Milk Lab (500ml)</p>
            <p>&#8369; 250</p>
            <button>Buy now</button>
        </div>
        <div>
            <img src="./assets/coffee-product/others/product3.jpg" alt="product 2">
            <p>Drip and Brew's Honey Tea</p>
            <p>&#8369; 200</p>
            <button>Buy now</button>
        </div>
    `;
})

