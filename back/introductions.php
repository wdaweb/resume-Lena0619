
<div>
<h3>自傳管理</h3>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="70%">自傳管理</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $intros=$Introductions->all();
                    
                    foreach($intros as $key => $intro){
                    $isChk=($intro['sh']==1)?'checked':'';
                ?>
                <tr>
                    <td><textarea name="text[]" style="width:95%;height:60px"><?=$intro['text']?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$intro['id']?>" <?=$isChk?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$intro['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$intro['id']?>">
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
                    <td width="200px">
                    <input type="button"
                            onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                            value="介紹內容新增">
                    </td>
                    <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
                </tr>
                
            </tbody>
        </table>

    </form>
</div>

