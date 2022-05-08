{include file='_head_radio.tpl'}


<div class="center">
{include file='_menu_panel.tpl'}
	<div class="right">
	<div class="table-container">

		{if $view == "pending"}
			<h2>Mensajes Pendientes</h2>

			<table class="table">
				<thead>
					<th>Email</th>
					<th>Asunto</th>
					<th>Fecha</th>
					<th>Ver</th>
					<th>Marcar Leído</th>
				</thead>
				<tbody>

					{if $messages}
						{foreach $messages as $row}
							<tr>
								<td>{$row['message_email']}</td>
								<td>{$row['message_subject']}</td>
								<td>{$row['message_date']}</td>
								<td><a href="{$base_url}/messages/{$row['message_id']}"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=read" data-id="{$row['message_id']}"><i class="material-icons">edit</i></button></td>
							</tr>
						{/foreach}
					{else}
						<tr>
			                <td colspan="5" class="text-center">
		                    "No hay mensajes pendientes"
		                    </td>
		                </tr>
					{/if}
				</tbody>
			</table>
		{else}
			<h2>Mensajes Leídos</h2>
			<table class="table">
				<thead>
					<th>Email</th>
					<th>Asunto</th>
					<th>Fecha</th>
					<th>Ver</th>
					<th>Eliminar</th>
				</thead>
				<tbody>
				
					{if $messages}
						{foreach $messages as $row}
							<tr>
								<td>{$row['message_email']}</td>
								<td>{$row['message_subject']}</td>
								<td>{$row['message_date']}</td>
								<td><a href="{$base_url}/messages/{$row['message_id']}"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=delete" data-id="{$row['message_id']}"><i class="material-icons">delete</i></button></td>
							</tr>
						{/foreach}
					{else}
						<tr>
			                <td colspan="5" class="text-center">
		                    "No hay mensajes pendientes"
		                    </td>
		                </tr>
					{/if}
				</tbody>
			</table>
		{/if}
		</div>

		<!-- error -->
              <div class="error-panel"></div>
          <!-- error -->
	</div>

</div>

{include file='_footer.tpl'}