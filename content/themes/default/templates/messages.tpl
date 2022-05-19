{include file='_head_radio.tpl'}
{include file='_menu_panel.tpl'}


<section id="player">
	<div class="wrapper">
	<div class="table-container">

		{if $view == "pending"}
			<h2>Pending Messages</h2>

			<table class="table">
				<thead>
					<th>Email</th>
					<th>Subject</th>
					<th>Date</th>
					<th>See</th>
					<th>Mark as read</th>
				</thead>
				<tbody>

					{if $messages}
						{foreach $messages as $row}
							<tr>
								<td>{$row['message_email']}</td>
								<td>{$row['message_subject']}</td>
								<td>{$row['message_date']}</td>
								<td><a href="{$base_url}/messages.php?view={$row['message_id']}"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=read" data-id="{$row['message_id']}"><i class="material-icons">edit</i></button></td>
							</tr>
						{/foreach}
					{else}
						<tr>
			                <td colspan="5" class="text-center">
		                    "There are no pending messages"
		                    </td>
		                </tr>
					{/if}
				</tbody>
			</table>
		{else}
			<h2>Read Messages</h2>
			<table class="table">
				<thead>
					<th>Email</th>
					<th>Subject</th>
					<th>Date</th>
					<th>See</th>
					<th>Remove</th>
				</thead>
				<tbody>
				
					{if $messages}
						{foreach $messages as $row}
							<tr>
								<td>{$row['message_email']}</td>
								<td>{$row['message_subject']}</td>
								<td>{$row['message_date']}</td>
								<td><a href="{$base_url}/messages.php?view={$row['message_id']}"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=delete" data-id="{$row['message_id']}"><i class="material-icons">delete</i></button></td>
							</tr>
						{/foreach}
					{else}
						<tr>
			                <td colspan="5" class="text-center">
		                    "There are no pending messages"
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

</section>

{include file='_footer.tpl'}