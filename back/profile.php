
<div>
<h3>作品區管理</h3>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="25%">圖片</td>
                    <td width="40%">描述</td>
                    <td width="25%">連結</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $profiles=$Profile->all();
                    
                    foreach($profiles as $key => $profile){
                    
                ?>
                <tr>
                    <td><img src='img/<?=$profile['img'];?>' style="width:100px;height:100px"></td>
                    <td><textarea name="descri[]" style="width:95%;height:60px"><?=$profile['descri']?></textarea></td>
                    <td><textarea name="link[]" style="width:95%;height:60px"><?=$profile['link']?></textarea></td>
                    <td><input type="checkbox" name="del[]" value="<?=$profile['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$profile['id']?>">
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>


        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <!-- 新增Introduction的內容,晚一點做 -->
                    <td width="200px">
                    <input type="button"
                            onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                            value="作品新增">
                    </td>
                    <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
                </tr>
                
            </tbody>
        </table>

    </form>
</div>
