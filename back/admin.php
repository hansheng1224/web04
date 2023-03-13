<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">管理者帳號管理</p>
	<form method="post" action="./api/edit.php">
		<table width="100%" class='cent'>
			<tbody>
				<tr class="yel">
					<td width="45%">帳號</td>
					<!-- <td width="23%">替代文字</td> -->
					<td width="45%">密碼</td>
					<td width="7%">刪除</td>
					<td></td>
				</tr>
				<?php
				$rows = $Admin->all();
				foreach ($rows as $row) {
					
				?>
					<tr>
						<!-- <td width="70%" >
							<img src="./upload/<?= $row['img']; ?>" alt="" style="width:150px;height:80px">
						</td> -->
						<td width="45%">
							<input type="text" name="acc[]" id="" value="<?= $row['acc']; ?>" style="width:95%">
						</td>
						<td width="45%">
							<input type="text" name="pw[]" id="" value="<?=str_repeat("*",strlen($row['pw'])) ; ?>" style="width:95%">
						</td>
						<td width="7%">
							<input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>">
						</td>
						<td>
							
							<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/admin.php')" value="新增管理者帳號"></td>
					<td class="cent">
						<input type="hidden" name="table" value="Admin">
						<input type="submit" value="修改確定">
						<input type="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
</div>