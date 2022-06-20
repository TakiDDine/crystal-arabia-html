<?php include 'inc/header.php';?>

<?php include 'inc/nav.php';?>

<div class="main-hero page-hero page-shop-hero shape-top">    
    <div class="container">
        <div class="col-md-5">
            <div class="content">
                <img src="assets/images/title-stars-w.png" class="title-stars-w">
                <h1> منتجاتنا  </h1>
                <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد </p>
            </div>
        </div>
    </div>        
</div>

<section class="all-products">    
    <div class="container">
        <div class="main-title">
            <h1> منتجات سنوفا </h1>
            <h4> اعثر على أفضل منتجات التنظيف </h4>
        </div>

        <div class="filter-div">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="filter-title"> أحدث المنتجات </h3>
                </div>
                <div class="col-md-9">
                    <ul class="ul-filter">
                        <li><a href="#" class="active">الكل</a></li>
                        <li><a href="#">الاكثر مبيعا</a></li>
                        <li><a href="#">الاكثر مبيعا</a></li>
                        <li><a href="#">الاكثر مبيعا</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <?php for ($i=0; $i < 12 ; $i++) : ?>
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

        <div class="pagination">
            <a href="#" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" > <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /> </svg>
            </a>
            <div class="pages">
                <a class="page active">1</a>
                <a class="page">2</a>
                <a class="page">3</a>
                <a class="page">4</a>
                <a class="page">5</a>
            </div>
            <a href="#" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" > <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /> </svg>
            </a>
        </div>

    </div>
</section>

<section class="testimonials shop-testimonials">
    <div class="container">
        <div class="main-title">
            <h1> شركاؤنا أصدقاؤكم </h1>
            <h4> المنـزل النظــــيف ، يريــح الأعصــــاب </h4>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="main-card card-left text-center">
                    <img src="assets/images/card.png" class="card-bg">
                    <div class="card-img-overlay">
                        <img src="assets/images/icon-1.png" class="icon-img">
                        <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. </p>
                    </div>                        
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-card card-right text-center">
                    <img src="assets/images/card-right.png" class="card-bg">
                    <div class="card-img-overlay">
                        <img src="assets/images/icon-1.png" class="icon-img">
                        <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. </p>
                    </div>                        
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-card card-left text-center">
                    <img src="assets/images/card.png" class="card-bg">
                    <div class="card-img-overlay">
                        <img src="assets/images/icon-1.png" class="icon-img">
                        <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. </p>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php include 'inc/footer.php';?>