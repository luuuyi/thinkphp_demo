<?php if (!defined('THINK_PATH')) exit();?><form class="form-horizontal" method="post">
	<?php if(is_array($tableInfoArray)): $i = 0; $__LIST__ = $tableInfoArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tableInfo): $mod = ($i % 2 );++$i; if($tableInfo[$columnNameKey] != 'id'): ?><div class="form-group">
		<label class="col-md-2 control-label" for="<?php echo ($tableInfo[$columnNameKey]); ?>"><?php echo ($tableInfo[$columnNameKey]); ?></label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="<?php echo ($tableInfo[$columnNameKey]); ?>" name="<?php echo ($tableInfo[$columnNameKey]); ?>" id="<?php echo ($tableInfo[$columnNameKey]); ?>" />
		</div>
	</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" value="提交" class="btn btn-default" />
		</div>
	</div>
</form>