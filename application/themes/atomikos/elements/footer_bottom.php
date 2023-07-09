<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>

<?php View::element('footer_required'); ?>
<script type="text/javascript" src="<?=$view->getThemePath()?>/main.js"></script>

<!--testing2-->
<!--script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script-->

<!--自作のJS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollgress/2.0.0/scrollgress.min.js"></script>
<script type="text/javascript">$(function() {
    $('#contents').scrollgress({//バーの高さの基準となるエリア指定
		height: '5px',//バーの高さ
		color: '#990000',//バーの色
	});	
});
</script>
<!--testing2-->

</body>
</html>
