<!-- Load ajax search list-->
<div class="search-list py-4">
<?php for($i=0;$i<3;$i++){ ?>

    <div class="row no-gutters py-3 border-bottom">
        <div class="col-auto pr-3">
            <div class="product-thumb" style="background-image: url(<?= base_url().ASSETS_PATH.'img/coverdemo.jpg';?>);"></div>
        </div>    
        <div class="col">
            <div class="product-info">
                <a class="product-title" href="#">Product name here Product name here  here Product name here ...</a>
                <p class="product-price">Price: <b>1000$</b></p>
            </div>
        </div>
    </div>

<?php } ?>
    <div class="row py-4 justify-content-center">
        <button type="button" class="btn btn-outline-info" name="s_button">View more <i class="fa fa-angle-down" aria-hidden="true"></i></button>
    </div>
</div>

