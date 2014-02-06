<div class="col-xs-12 col-md-offset-3 col-md-6">
	<?
		if (!empty($this->name))
		{
	?>
		<div class="alert alert-success">You typed in "<?= $this->escape($this->name) ?>".</div>
	<?
		}
	?>
	
	<form role="form" method="post" action="<?= \Simple\Router::base("demo/index") ?>" class="form-horizontal">
		<div class="form-group">
			<label for="name" class="col-sm-5 control-label">Type a name into the box</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="name" id="name"/>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Submit"/>
		</div>
	</form>

</div>