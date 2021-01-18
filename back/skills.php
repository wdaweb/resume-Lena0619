


<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<div>
<h3>技能區管理</h3>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="25%">技能名稱</td>
                    <td width="15%">百分比</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $skills=$Skills->all();
                    
                    foreach($skills as $key => $skill){
                    
                ?>
                <tr>
                    <td><textarea name="ski[]" style="width:95%;height:40px"><?=$skill['ski']?></textarea></td>
                    <td><textarea name="percentage[]" style="width:95%;height:40px"><?=$skill['percentage']?></textarea></td>
                    <td><input type="checkbox" name="del[]" value="<?=$skill['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$skill['id']?>">
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
                            value="技能新增">
                    </td>
                    <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
                </tr>
                
            </tbody>
        </table>

    </form>
</div>
