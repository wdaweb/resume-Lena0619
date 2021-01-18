<h3>新增經驗區資料</h3>
<hr>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<td style="vertical-align:top">經驗區內容</td>
<table>
    <tr>
        <td width="25%">工作</td>
        <td width="15%">期間</td>
        <td width="50%">描述</td>
        <td></td>
    </tr>
    <tr>
        <td><textarea name="work" style="width:95%;height:60px"></textarea></td>
        <td><textarea name="period" style="width:95%;height:60px"></textarea></td>
        <td><textarea name="detail" style="width:95%;height:60px"></textarea></td>
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