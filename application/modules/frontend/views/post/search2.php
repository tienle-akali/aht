<!-- Load ajax search gird-->
<div class="search-grid py-4">
    <div class="row">
        <div class="col-12">

            <div class="d-flex flex-wrap product-list">
                <?php for ($i=0; $i < 6 ; $i++) { ?>
                    <div class="col-4 mb-4">
                        <div class="product-item">
                            <div class="product-thumb" style="background-image: url('');"></div>
                            <div class="product-info p-3">
                                <a class="product-title" href="#">Product name here Product name here  here Product name here ...</a>
                                <p class="product-price">Price: <b>1000$</b></p>
                            </div>
                        </div>
                            
                    </div>
              
                <?php } ?>
              
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-outline-info" name="s_button">View more <i class="fa fa-angle-down" aria-hidden="true"></i></button>
        </div>
    </div>
        
</div>