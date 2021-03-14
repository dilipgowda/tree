<?php
use backend\models\Menu;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Categories';
?>
<div class="site-index">

    <div class="jumbotron1">
        <h3>Categories Tree</h3>

        <p class="lead1">Click on a category to see the Breadcrumbs </p>

       
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Categories</h2>

                <p><?php 
                $categories_data = Menu::categories();
                        foreach ($categories_data as $category) {
                        echo  $category;
                        }
                    ?>
                    </p>

            </div>
            <div class="col-lg-4">
                <h2>Breadcrumb</h2>

                <p><?php 
                    $cat = Menu::getCategoryData();
                    Menu::getBreadcrumb($cat, $catname,$result);
                    print_r(implode(" >> ",array_reverse($result)));
                    ?></p>

                <p>
            </div>
            
        </div>

    </div>
</div>
