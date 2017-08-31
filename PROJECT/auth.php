<label for="modal-username">Username</label><input type="text" name="modal-username" id="modal-username">
<?
$result = array();
$result['error']='error';
$result['auth']='auth';
$javascript_array = json_encode($result);
?>
<input type="hidden" id="modal-result" value='<? echo $javascript_array;?>'>
