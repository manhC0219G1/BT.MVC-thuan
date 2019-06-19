<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Mô tả sản phẩm</th>
        <th> Nhà sản xuất</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($products as $key => $product): ?>

    <tr>
        <td><?php echo $product->id ?></td>
        <td><?php echo $product->nameProduct ?></td>
        <td><?php echo $product->priceProduct ?></td>
        <td><?php echo $product->describeProduct ?></td>
        <td><?php echo $product->factory ?></td>

        <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>

