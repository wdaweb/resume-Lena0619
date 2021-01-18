


<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<div>
<h3>經驗區管理</h3>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="25%">工作</td>
                    <td width="15%">期間</td>
                    <td width="50%">描述</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $expes=$Experience->all();
                    
                    foreach($expes as $key => $expe){
                    
                ?>
                <tr>
                    <td><textarea name="work[]" style="width:95%;height:60px"><?=$expe['work']?></textarea></td>
                    <td><textarea name="period[]" style="width:95%;height:60px"><?=$expe['period']?></textarea></td>
                    <td><textarea name="detail[]" style="width:95%;height:60px"><?=$expe['detail']?></textarea></td>
                    <td><input type="checkbox" name="del[]" value="<?=$expe['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$expe['id']?>">
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
                            value="經驗內容新增">
                    </td>
                    <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
                </tr>
                
            </tbody>
        </table>

    </form>
</div>

