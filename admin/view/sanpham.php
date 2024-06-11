<div class="main">
    <h2>NHẬP SẢN PHẨM</h2>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
                if (isset($dsdm)) {
                    foreach ($dsdm as $dm) {
                        echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                    }
                }
            ?>
        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="hinh" id="">
        <?php
            if(isset($uploadOk)&&($uploadOk==0)){
                echo "Yêu cẩu nhập đúng file hình ảnh!";
            }
        ?>
        <input type="text" name="gia" id="">
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Hành Động</th>
        </tr>
        <?php
            //var_dump($kq);
        ?>
    <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $dm) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$dm['tensp'].'</td>
                        <td><img src="'.$dm['img'].'" width="80px"</td>
                        <td>'.$dm['gia'].'</td>
                        <td><a href="index.php?act=updatespform&id='.$dm['id'].'">Sửa</a>  |  <a href="index.php?act=delsp&id='.$dm['id'].'">Xóa</a></td>
                    </tr>';
                    $i++;
            }
        }
    ?>

        
    </table>
</div>