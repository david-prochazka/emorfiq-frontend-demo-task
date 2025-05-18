<?php $productType = rand(0,1) ?>
<?php $isNew = rand(0,1) ?>
<?php $isClearance = rand(0,1) ?>
<?php $hasDiscount = rand(0,1) ?>

<article class="ProductCard" itemscope itemtype="https://schema.org/Product">
    <a href="#product" class="ProductCard-link" aria-label="Zobrazit detail produktu"></a>
    <header class="ProductCard-header">
        <div class="ProductCard-imageWrapper">
            <img
                src="public/images/product-<?php echo $productType; ?>.png"
                width="652"
                height="560"
                alt="Fotografie produktu <?= $productType === 0 ? 'MacBook Pro' : 'iPhone 5s'  ?>"
                class="ProductCard-image ProductCard-image--primary"
                <?php if ($i < 8) { ?>
                    fetchpriority="high" loading="eager"
                <?php } else { ?>
                    fetchpriority="low" loading="lazy"
                <?php } ?>
                itemprop="image"
            >
        </div>
        <?php if ($isNew || $isClearance || $hasDiscount) { ?>
            <div class="ProductCard-tertiaryBadges">
                <?php if ($isNew) { ?>
                    <span class="Badge Badge--rectangle Badge--new">Novinka</span>
                <?php } ?>
                <?php if ($isClearance) { ?>
                    <span class="Badge Badge--rectangle Badge--clearance">Doprodej</span>
                <?php } ?>
                <?php if ($hasDiscount) { ?>
                    <span class="Badge Badge--rectangle Badge--discount">Sleva -10 %</span>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if (rand(0,1)) { ?>
            <div class="ProductCard-variants">
                <p class="ProductCard-variantsTitle">Zvolte velikost:</p>
                <ul class="ProductCard-variantsList" role="list">
                    <?php foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL'] as $size) { ?>
                        <li class="ProductCard-variant" role="listitem">
                            <a class="ProductCard-variantLink" href="#variant<?php echo $size; ?>" aria-label="Zvolit velikost <?php echo $size; ?>"><?php echo $size; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </header>
    <main class="ProductCard-body">
        <h2 class="ProductCard-title" itemprop="name">
            <?= $productType === 0 ? 'MacBook Pro 15" 2,5 GHz s Retina displejem, 512 GB (2015)' : 'iPhone 5s'  ?>
        </h2>
    </main>
    <footer class="ProductCard-footer">
        <div class="ProductCard-footerContent">
            <div class="ProductCard-priceWrapper">
                <span class="ProductCard-price" itemprop="price" content="76990">76&nbsp;990&nbsp;Kč</span>
                <?php if ($hasDiscount) { ?>
                <del class="ProductCard-priceOld" aria-hidden="true">85&nbsp;544&nbsp;Kč</del>
                <?php } ?>
            </div>
        </div>
    </footer>
</article>