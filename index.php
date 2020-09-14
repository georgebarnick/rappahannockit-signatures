<?php
switch ( $_SERVER['QUERY_STRING'] ) {
	case "gbarnick":
		$name = "George Barnick";
		$title = "Managing Director";
		$phone = "540.940.2773 x100";
		break;
	case "charrell":
		$name = "Cody Harrell";
		$title = "Director of Operations";
		$phone = "540.940.2773 x101";
		break;
	case "asulser":
		$name = "Andrew Sulser";
		$title = "Tier 1 Engineer";
		$phone = "540.940.2773 x102";
		break;
	case "brodriguez":
		$name = "Brandyn Rodriguez";
		$title = "Tier 1 Engineer";
		$phone = "540.940.2773 x103";
		break;
	case "cmaconaughey":
		$name = "Christopher Maconaughey";
		$title = "Tier 1 Engineer";
		$phone = "540.940.2773 x104";
		break;
	default:
		$default = 1;
}

if ( $default != 1 ) {
?>
<html>
	<body>
		<table>
			<tr>
				<td style="padding-right:5px;">
					<img src="https://www.rappahannockit.com/signature.gif" alt="Rappahannock IT logo" width="80" height="80" />
				</td>
				<td>
					<span style="font-weight:bold;font-family:sans-serif;color:#888;">
						<?php echo $name; ?>
					</span>
					<br />
					<span style="font-family:sans-serif;color:#888;"><?php echo $title; ?>, Rappahannock IT</span>
					<br />
					<span style="font-family:sans-serif;color:#aaa;">1011-A Princess Anne Street, Fredericksburg, VA 22401</span>
					<br />
					<span style="font-family:sans-serif;color:#aaa;"><?php echo $phone; ?></span>
					&nbsp;
					<span style="font-family:sans-serif;color:#f37d49;">|</span>
					&nbsp;
					<a href="https://www.rappahannockit.com" target="_blank" style="font-family:sans-serif;color:#aaa;text-decoration:none;">www.rappahannockit.com</a>
				</td>
			</tr>
		</table>
	</body>
</html>
<?php
} else {
	echo "ERROR: Invalid URL parameter(s) passed in HTTP request.";
}
?>
