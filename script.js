function pricing() {

    const promotion = {
        "none": 0,
        "student": 80,
        "trainee": 50,
        "junior": 15,
    }

    let quantity = document.getElementById("quantity").value
    let promo = document.getElementById("promotion").value
    let subtotal = 200 * quantity
    let discount = subtotal * promotion[promo] / 100
    let total = subtotal - discount
    let msj = ''
    if (discount !== 0) msj = `<span class="discount">¡Ahorrás $${discount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}!</span>`

    document.getElementById("price").innerHTML = `$${total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}${msj}`;
}



function reset() {
    document.getElementById("price").innerHTML = '$0';
    document.getElementById("promotion").value = 'none';
    document.getElementById("quantity").value = 1;
}

document.getElementById("resume").addEventListener("click", pricing)

document.getElementById("reset").addEventListener("click", reset)