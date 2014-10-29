<?php
require_once '../backend/sessions.php';
require_once '../backend/post_functions.php';

if(isset($_POST['post_id']) AND isset($_POST['user_id']) AND isset($_POST['comment'])) {
	$result = add_comment($_POST['post_id'], $_POST['user_id'], $_POST['comment']);
	if ($result !== FALSE) {
		?>
			<p><?php echo $result['body']; ?></p>
			<em>By <?php echo $result['username']; ?> on <?php echo date('F d, Y h:iA', $result['created_ts']); ?></em>
		<?php
	}
}

return $result;
?>