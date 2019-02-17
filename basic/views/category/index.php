<?php

/* @var $this yii\web\View */

$this->title = 'Shop - Category';
?>
<div class="total-ads main-grid-border">
    <div class="container">
        <ol class="breadcrumb" style="margin-bottom: 5px;">
            <li><a href="/site">Home</a></li>
            <li class="active"><?= $cat->name ?></li>
        </ol>
        <div class="ads-grid">
            <div class="ads-display col-md-9">
                <div class="wrapper">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div>
                                    <div id="container">
                                        <div class="clearfix"></div>
                                        <ul class="list">
                                            <?php
                                            foreach($model as $m){
                                                echo "<a href=\"/product?id={$m->id}\">
                                                        <li>";
                                                if($m->image){
                                                    echo "<img src=\"/images/C{$cat->id}/{$m->image}\" title=\"\" alt=\"\" />";
                                                }
                                                else {
                                                    echo "<img src=\"/images/im{$cat->id}.png\" title=\"\" alt=\"\" />";
                                                }
                                                echo "<section class=\"list-left\">
                                                                <h5 class=\"title\">{$m->name}</h5>
                                                                <span class=\"adprice\">\${$m->price}</span>
                                                                <p class=\"catpath\">{$m->description}</p>
                                                            </section>
                                                            <section class=\"list-right\">
                                                                <span class=\"date\">{$m->created}</span>
                                                                <span class=\"cityname\" style=\"color: #00cc00\">In Stock</span>
                                                            </section>
                                                            <div class=\"clearfix\"></div>
                                                        </li>
                                                    </a>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                            use yii\widgets\LinkPager;
                            echo LinkPager::widget([
                                'pagination' => $pagination,
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>