<h1>Asiakastiedot</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>Sähköposti</TH><TH>Muokkaa</TH></TR>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr>';
	echo '<td>'.$rivi['etunimi'].'</td>';
	echo '<td>'.$rivi['sukunimi'].'</td>';
	echo '<td>'.$rivi['email'].'</td>';
	echo '<td><a href="'.site_url('asiakas/naytaMuokattava').'/'.$rivi['id_asiakas'].'">Muokkaa</a></td>';
	echo '</tr>';
}
?>
</TABLE>