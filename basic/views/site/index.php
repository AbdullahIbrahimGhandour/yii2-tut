<?php

/* @var $this yii\web\View */

$this->title = 'Shop - Home';
?>
<div class="site-index">
    <div class="body-content">
        <?php
        foreach ($model as $c)
            echo "<div class=\"col-md-2 focus-grid\">
                    <a href=\"/category?c={$c->id}\">
                        <div class=\"focus-border\">
                            <div class=\"focus-layout\">
                                <div class=\"focus-image\"><img src=\"/images/{$c->image}\"></div>
                                <h4 class=\"clrchg\">{$c->name}</h4>
                            </div>
                        </div>
                    </a>
                </div>"
        ?>
    </div>
</div>