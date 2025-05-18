<div class="ProductCard">
    <a href="#product" class="ProductCard-link"></a>
    <div class="ProductCard-header">
        <div class="ProductCard-imageWrapper">
            <img src="public/images/product-<?php echo rand(0,1); ?>.png" width="652" height="560" alt="" class="ProductCard-image ProductCard-image--primary" loading="lazy">
        </div>
        <?php if (rand(0,1)) { ?>
            <div class="ProductCard-tertiaryBadges">
                <span class="Badge Badge--rectangle Badge--new">Novinka</span>
                <span class="Badge Badge--rectangle Badge--clearance">Doprodej</span>
                <span class="Badge Badge--rectangle Badge--discount">Sleva -10 %</span>
            </div>
        <?php } ?>
        <?php if (rand(0,1)) { ?>
            <div class="ProductCard-variants">
                <p class="ProductCard-variantsTitle">Zvolte velikost:</p>
                <ul class="ProductCard-variantsList">
                    <?php foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL'] as $size) { ?>
                        <li class="ProductCard-variant">
                            <a class="ProductCard-variantLink" href="#variant<?php echo $size; ?>"><?php echo $size; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
    <div class="ProductCard-body">
        <div>
            <h2 class="ProductCard-title">
                <?php if (rand(0,1)) { ?>
                    MacBook Pro 15" 2,5 GHz s Retina displejem, 512 GB (2015)
                <?php } else { ?>
                    iPhone 5s
                <?php } ?>
            </h2>
        </div>
    </div>
    <div class="ProductCard-footer">
        <div class="ProductCard-footerContent">
            <div class="ProductCard-priceWrapper">
                <div class="ProductCard-price">76&nbsp;990&nbsp;Kč</div>
                <?php if (rand(0,1)) { ?>
                <del class="ProductCard-priceOld">85&nbsp;544&nbsp;Kč</del>
                <?php } ?>
            </div>
        </div>
    </div>
</div>