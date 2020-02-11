
  <form action="" method="post">
    <table>
      <tr>
        <td>Реквізити номерів:</td>
        <td><input type="text" id="numbers" name="numbers" value="<?= isset($_GET['red']) ? $product['numbers'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Водій:</td>
        <td><input type="text" id="driver" name="driver" value="<?= isset($_GET['red']) ? $product['driver'] : ''; ?>"></td>
      </tr>
	  <tr>
        <td>ЗПУ:</td>
        <td><input type="text" id="spu" name="spu" value="<?= isset($_GET['red']) ? $product['spu'] : ''; ?>"></td>
      </tr>
	  <tr>
        <td>Статус:</td>
		 <td>
			<select name="status"> 
				<option value="В дорозі">В дорозі</option> 
				<option value="Прибув">Прибув</option>
			</select>
  </td>
      </tr>
	  	  <tr>
        <td>Стан об'єкта:</td>
		 <td>
			<select name="states"> 
				<option value="В дорозі">Пошкодженно</option> 
				<option value="Не пошкодженно">Не пошкодженно</option>
				<option value="Критичний стан">Критичний стан</option>
			</select>
  </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="OK" onclick="offline()"></td>
      </tr>
    </table>
  </form>