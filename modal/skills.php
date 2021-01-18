<h3>新增技能</h3>
<hr>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<td style="vertical-align:top">技能內容</td>
<table>
    <tr>
        <td width="25%">技能名稱</td>
        <td width="15%">百分比</td>
        <td></td>
    </tr>
    <tr>
        <td><textarea name="ski" style="width:95%;height:60px"></textarea></td>
        <td><textarea name="percentage" style="width:95%;height:60px"></textarea></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>

    </tr>
</table>
    
    

</form>