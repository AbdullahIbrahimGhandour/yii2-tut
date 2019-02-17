<?php

/* @var $this yii\web\View */

$this->title = 'Shop - Product';
?>
<div class="single-page main-grid-border">
    <div class="container">
        <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="/site">Home</a></li>
            <li class="active"><a href="/category?c=<?= $cid->id ?>"><?= $cid->name ?></a></li>
            <li class="active">Product</li>
        </ol>
        <div class="product-desc">
            <div class="col-md-7 product-view">
                <h2><?= $model->name ?></h2>
                <p> <i class="glyphicon glyphicon-map-marker"></i>Cairo, Egypt | Added <?= $model->created ?></p>
                <?php if($model->image){ ?>
                    <img src="/images/C<?= $cid->id ?>/<?= $model->image ?>"/>
                <?php }else{ ?>
                    <img src="/images/im<?= $cid->id ?>.png"/>
                <?php } ?>
                <div class="product-details">
                    <p><strong>About</strong> : <?= $model->description ?></p>

                </div>
            </div>
            <div class="col-md-5 product-details-grid">
                <div class="item-price">
                    <div class="product-price">
                        <p class="p-price">Price</p>
                        <h3 class="rate">$<?= $model->price ?></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="condition">
                        <p class="p-price">Condition</p>
                        <h4>Good</h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="itemtype">
                        <p class="p-price">Item Type</p>
                        <h4><?= $cid->name ?></h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="interested text-center">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p><i class="glyphicon glyphicon-earphone"></i>00-85-9875462655</p>
                </div>
                <div class="tips">
                    <h4>Safety Tips for Buyers</h4>
                    <ol>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                        <li><a href="#">Contrary to popular belief.</a></li>
                    </ol>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>