<h3>作品區資料</h3>
<hr>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<td style="vertical-align:top">作品區內容</td>
<table>
    <tr>
        <td width="25%">圖片</td>
        <td width="40%">描述</td>
        <td width="25%">連結</td>
        <td></td>
    </tr>
    <tr>
        <td><input type="file" name="img" id=""></td>
        <td><textarea name="descri" style="width:95%;height:60px"></textarea></td>
        <td><textarea name="link" style="width:95%;height:60px"></textarea></td>
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