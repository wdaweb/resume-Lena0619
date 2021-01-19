


<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<div>
<h3>希望的求職條件:</h3>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="25%">名稱</td>
                    <td width="55%">條件</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                    $jobs=$Job->all();
                    
                    foreach($jobs as $key => $job){
                    $isChk=($job['sh']==1)?'checked':'';
                ?>
                <tr>
                    <td><textarea name="reqname[]" style="width:95%;height:30px"><?=$job['reqname']?></textarea></td>
                    <td><textarea name="condi[]" style="width:95%;height:30px"><?=$job['condi']?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$job['id']?>" <?=$isChk?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$job['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$job['id']?>">
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
                            value="求職條件新增">
                    </td>
                    <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
                </tr>
                
            </tbody>
        </table>

    </form>
</div>
