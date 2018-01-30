
<div class="container p-4">
    <form method="get" action="" class="p-4 mb-5 bg-faded">
        <div class="row no-gutters search-area">
            <div class="col-12 col-md-3 mb-2 mb-md-0">
                <select class="form-control form-control-lg w-100">
                    <option selected=""> Toàn quốc</option>
                    <option>Huế</option>
                </select>
            </div>
            <div class="col-12 col-md-4 mb-2 mb-md-0">
                <select class="form-control form-control-lg w-100">
                    <option selected="">Tất cả các chuyên mục</option>
                    <option>Oto</option>
                    <option>Xe máy</option>
                </select>
            </div>
            <div class="col-12 col-md-5 mb-2 mb-md-0">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" name="s_value" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-secondary" name="s_button">Search</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-9">
            <div class="search-area-result">
                123 Search Results
                <?php 

                //Search list
                include 'search.php';
                //Search gird
                include 'search2.php';

                ?>
            </div>
        </div>
        <div class="col-3 bg-faded">
            Side bar - Quảng cáo - tin nổi bật
        </div>
    </div>
        

</div>