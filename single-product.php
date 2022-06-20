<?php include 'inc/header.php';?>

<?php include 'inc/nav.php';?>

<div class="main-hero single-product-hero shape-top">    
    <div class="container">
        <div class="col-md-12">
            <div class="content text-center">
                <img src="assets/images/title-stars-w.png" class="title-stars-w">
                <h1> صابون سنوفا انتعاش الليمون  </h1>
                <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد </p>
            </div>
        </div>
    </div>        
</div>

<section class="product-res">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="product-card single-main-image">
                    <img src="assets/images/single-product-m.png" class="card-bg">
                    <div class="card-img-overlay">
                        <img src="assets/images/single-product-img.png" class="card-product">                        
                    </div>                    
                </div>
                <div class="product-other-img">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-card single-other-image">
                                <img src="assets/images/single-product-s.png" class="card-bg">
                                <div class="card-img-overlay">
                                    <img src="assets/images/product-1.png" class="card-product">                        
                                </div>                    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card single-other-image">
                                <img src="assets/images/single-product-s.png" class="card-bg">
                                <div class="card-img-overlay">
                                    <img src="assets/images/product-1.png" class="card-product">                        
                                </div>                    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-card single-other-image">
                                <img src="assets/images/single-product-s.png" class="card-bg">
                                <div class="card-img-overlay">
                                    <img src="assets/images/product-1.png" class="card-product">                        
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-info">
                    <h1 class="p-name"> صابون سنوفا انتعاش الليمون </h1>
                    <img src="assets/images/five-stars.png" alt="">

                    <h4 class="old-price"> 850.00 رس </h4>
                    <h2 class="price"> 649.00 رس </h2>

                    <p class="s-desc"> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد </p>
                    <table class="sku-des">
                        <tr>
                            <th>: sku</th>
                            <th>HJ6516651651</th>
                        </tr>
                        <tr>
                            <th>: الفئة</th>
                            <th>مسحوق الغسيل</th>
                        </tr>
                        <tr>
                            <th>: العلامات</th>
                            <th>صابون، صابون، صابون</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-description">
    <div class="container">
        <h4 class="s-title"> الوصف </h4>
        <p class="s-content">
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
            <br>
            <br>
            <br>
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
        </p>
    </div>
</section>

<section class="may-also-like">
    <div class="container">
        <h2 class="title"> قد يعجبك أيضاً </h2>
        <div class="row">
            <?php for ($i=0; $i < 8 ; $i++) : ?>
            <div class="col-md-3">
                <a href="single-product.php" class="btn-product">
                    <div class="product-card p-new text-center">
                        <img src="assets/images/card-right.png" class="card-bg">
                        <div class="card-img-overlay">
                            <img src="assets/images/product-1.png" class="card-product">                        
                        </div>                    
                    </div>
                    <div class="product-info text-center">
                        <h4> صابون سنوفا انتعاش الليمون </h4>
                        <p> 150.00 SAR </p>
                        <img src="assets/images/five-stars.png" class="five-stars">
                    </div>
                </a>
            </div>
            <?php endfor ?>
        </div>
    </div>
</section>
    
<?php include 'inc/footer.php';?>