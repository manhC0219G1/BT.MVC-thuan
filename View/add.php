<?php
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản  phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="nameProduct"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Giá sản phảm</label>
                    <input type="text" class="form-control" name="priceProduct" placeholder="Nhập giá sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <input type="text" class="form-control" name="describeProduct" placeholder="Nhập mô tả" required>
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" class="form-control" name="factory" placeholder="Nhập nhà sản xuất" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
