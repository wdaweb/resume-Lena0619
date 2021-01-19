<!-- <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;"> -->
<div>
  <h3>個人基本資料管理</h3>
  
    <form method="post" action="./api/edit.php">
    <table style="margin: 0 auto;">
      <?php
      $myinfos = $Myinfo->all();

      foreach ($myinfos as $key => $myinfo) {
        $isChk = ($myinfo['sh'] == 1) ? 'checked' : '';
      ?>
        <tr><td>姓名: <input type="text" name="name[]" value="<?= $myinfo['name'] ?>"></td></tr>
        <tr><td>電話: <input type="text" name="tel[]" value="<?= $myinfo['tel'] ?>"></td></tr>
        <tr><td>Email: <input type="text" name="email[]" value="<?= $myinfo['email'] ?>"></td></tr>
        <tr><td>生日: <input type="date" name="birth[]" value="<?= $myinfo['birth'] ?>"></td></tr>
        <tr><td>興趣: <input type="text" name="hobby[]" value="<?= $myinfo['hobby'] ?>"></td></tr>
        <tr><td>顯示: <input type="checkbox" name="sh[]" <?= $isChk ?>></td></tr>
        <tr><td><input type="hidden" name="id[]" value="<?= $myinfo['id'] ?>"></td></tr>

      <?php
      }
      ?>
      <tr>
        <input type="hidden" name="table" value="<?= $do; ?>">
        <td><input type="submit" value="修改確定"><input type="reset" value="重置"></td><br>
      </tr>
      </table>

  </form>
</div>