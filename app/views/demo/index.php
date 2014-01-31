<div class="col-xs-12 col-md-offset-3 col-md-6">
	<?
		if (!empty($this->message))
		{
	?>
		<div class="alert alert-success">You typed in "<?= $this->escape($this->message) ?>".</div>
	<?
		}
	?>
	
	<form role="form" method="post" action="<?= \Simple\Core\Router::base("demo/index") ?>" class="form-horizontal">
		<div class="form-group">
			<label for="text" class="col-sm-5 control-label">Type something in this box</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="text" id="text"/>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Submit"/>
		</div>
	</form>

</div>