<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Of Sale</title>
    <title>DigiZimmer.com</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../assets/css/noval.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />

</head>

<body>
    <!-- container fluid -->
    <div class="container-fluid container-pos">
        <div class="row h-100">
            <div class="col-md-7 product-section">
                <div class="mb-4">
                    <h4 class="mb-4">
                        <i class="fas fa-store"></i>Product
                    </h4>
                    <input type="text" id="searchProduct"
                        class="form-control search-box" placeholder="find Product...">
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary category-btn active">All Menu</button>
                    <button class="btn btn-outline-primary category-btn ">Food</button>
                    <button class="btn btn-outline-primary category-btn ">Drink</button>
                    <button class="btn btn-outline-primary category-btn ">Snack</button>
                </div>
                <div class="row" id="productGrid">
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/2.jpg" width="100%" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">makanan</span>
                                <h6 class="card-title mt-2 mb-2">Burger</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/1.jpg" width="100%" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">makanan</span>
                                <h6 class="card-title mt-2 mb-2">Mie Goreng</h6>
                                <p class="card-text text-primary fw-bold">Rp. 20.000,-</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/4.jpg" width="100%" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">makanan</span>
                                <h6 class="card-title mt-2 mb-2">Kentucky</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>
                        </div>
                    </div>




                </div>


            </div>

            <div class="col-md-5 cart-section">
                <div class="cart-header">
                    <h4>cart</h4>
                    <small>Order # <span class="orderNumber">001</span></small>
                </div>
                <div class="cart-items" id="cartItems">
                    <div class="text-center text-muted mt-5">
                        <i class="bi bi-cart mb-3"></i>
                        <p>The basket is still empty.</p>
                    </div>
                </div>

                <div class="cart-footer">
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal :</span>
                            <span id="Subtotal">Rp. 100.000</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pajak (10%) :</span>
                            <span id="tax">Rp. 10.000</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Total :</span>
                            <span id="total">Rp. 110.000</span>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md-6">
                            <button class="btn btn-outline-danger w-100">
                                <i class="bi bi-trash"></i> Clear Cart
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-checkout btn-primary w-100">
                                <i class="bi bi-cash"></i> Process Payment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script>
        // const nama = 'muhammad noval';
        // let name = 'muhammad noval';
        // console.log(name);
        // alert(nama);

        // let angka1 = 10;
        // let angka2 = 20;
        // console.log(angka1 + angka2);
        // console.log(angka1 - angka2);
        // console.log(angka1 / angka2);
        // console.log(angka1 * angka2);
        // console.log(angka1 % angka2);
        // console.log(angka1 ** angka2);

        // // operator penugasan
        // let x = 10;
        // x += 5; //15
        // console.log(x);

        // // operator pembandingan
        // let a = 2;
        // let b = 1;

        // if (a === b) {
        //     console.log("ya");
        // } else {
        //     console.log("tidak");
        // }

        // console.log(a > b)
        // console.log(a < b)

        // operator logika && ,AND,OR,||,!
        let umur = 20;
        let punyaSim = true;

        if (umur >= 17 && punyaSim) {
            console.log("boleh mengemudi");
        } else {
            console.log("Tidak boleh mengemudi");
        }

        let buah = ['pisang', 'salak', 'semangka'];
        console.log("buah dikeranjang:", buah);
        console.log("saya mau buah", buah[1]);
        buah[1] = "nanas";
        console.log("buah baru:", buah);
        buah.push('pepaya');
        console.log("buah", buah);
        buah.pop();
    </script>
</body>

</html>