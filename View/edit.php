<h2>Cập nhật danh sách sản phẩm</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>NameProduct</label>
        <input type="text" name="nameProduct" value="<?php echo $product->nameProduct; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>PriceProduct</label>
        <textarea name="priceProduct" class="form-control"><?php echo $product->priceProduct; ?></textarea>
    </div>
    <div class="form-group">
        <label>DescribeProduct</label>
        <textarea name="describeProduct" class="form-control"><?php echo $product->describeProduct; ?></textarea>
    </div>
    <div class="form-group">
        <label>factory</label>
        <textarea name="factory" class="form-control"><?php echo $product->factory; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
