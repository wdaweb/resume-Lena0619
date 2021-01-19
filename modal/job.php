<h3>新增求職條件</h3>
<hr>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<td style="vertical-align:top">求職條件</td>
<table>
    <tr>
        <td width="25%">名稱</td>
        <td width="50%">條件</td>
        <td></td>
    </tr>
    <tr>
        <td><textarea name="reqname" style="width:95%;height:30px"></textarea></td>
        <td><textarea name="condi" style="width:95%;height:30px"></textarea></td>
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