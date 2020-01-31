  <form action="" method="post">
    <table>
      <tr>
        <td>реквізитів номерів</td>
        <td><input type="text" id="numbers" name="numbers" value="<?= isset($_GET['red']) ? $product['numbers'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>водія:</td>
        <td><input type="text" id="driver" name="driver" value="<?= isset($_GET['red']) ? $product['driver'] : ''; ?>"></td>
      </tr>
	  <tr>
        <td>ЗПУ :</td>
        <td><input type="text" id="spu" name="spu" value="<?= isset($_GET['red']) ? $product['spu'] : ''; ?>"></td>
      </tr>
	  <tr>
        <td>Статус:</td>
        <td><input type="text" id="status" name="status" value="<?= isset($_GET['red']) ? $product['status'] : ''; ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK" onclick="getdetails()"></td>
      </tr>
    </table>
  </form>