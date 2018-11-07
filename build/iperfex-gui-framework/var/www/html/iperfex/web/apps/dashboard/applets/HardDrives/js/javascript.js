$(document).ready(function() {
	$('#harddrives_dirspacereport_fetch').click(function() {
		$('#harddrives_dirspacereport').html("<img class='ima' src='web/apps/" + getCurrentIperfexModule() + "/images/loading.gif' border='0' align='absmiddle' />");
		$.post('index.php', {
			menu: getCurrentIperfexModule(),
			rawmode: 'yes',
			applet: 'HardDrives',
			action: 'dirspacereport'
		},
		function(respuesta) {
			if (respuesta.status == 'error') {
				alert(respuesta.message);
			} else {
				$('#harddrives_dirspacereport').html(respuesta.html);
			}
		});
	});
});