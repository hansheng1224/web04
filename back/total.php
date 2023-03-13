<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">進站總人數管理</p>
	<form method="post" action="./api/update.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="45%">進站總人數</td>
					<!-- <td width="23%">替代文字</td>
					<td width="7%">顯示</td>
					<td width="7%">刪除</td> -->
					<td>
						<input type="number" name="total" id="" value="<?=$Total->find(1)['total'];?>">
					</td>
				</tr>

			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px">
						<!-- <input type="button" onclick="op('#cover','#cvr','./modal/title.php')" value="新增網站標題圖片"> -->
					</td>
					<td class="cent">
					<input type="hidden" name="id" value="<?= $row['id']; ?>">
						<input type="hidden" name="table" value="Total">
						<input type="submit" value="修改確定">
						<input type="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
</div>