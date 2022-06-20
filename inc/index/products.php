<section class="products">
    <div class="container">
        <div class="main-title">
            <h1> منتجات لكل العائلة </h1>
            <h4> المنـزل النظــــيف ، يريــح الأعصــــاب </h4>
        </div>
        <div class="home-products">
            <div class="row">
                <?php for ($i=1; $i < 7 ; $i++) : ?>
                <div class="col-md-4">
                    <div class="main-card text-center">
                        <img src="assets/images/card.png" class="card-bg">
                        <div class="card-img-overlay">
                            <img src="assets/images/products/product-<?php echo $i; ?>.png" class="card-product">
                            <h4> صابون سنوفا انتعاش الليمون </h4>
                            <a href="single-product.php" class="main-btn btn-buy"> معاينة المنتج </a>
                        </div>                        
                    </div>
                </div>
                <?php endfor ?>
            </div>
        </div>
        <center>
            <a href="#" class="main-btn btn-blue"> اكتشفي منتجاتنا الآن </a>
        </center>
    </div>
</section>