<h1>Muokkaa asiakkaan tiedot</h1>
<FORM action="<?php echo site_url('asiakas/muokkaaAsiakas'); ?>" method="post">
<TABLE>
<tr><td>Etunimi</td><td><input type="text" name="en" value="<?php echo $asiakas[0]['etunimi'];?>"></td></tr>
<tr><td>Sukunimi</td><td><input type="text" name="sn" value="<?php echo $asiakas[0]['sukunimi'];?>"></td></tr>
<tr><td>Sähköposti</td><td><input type="text" name="email" value="<?php echo $asiakas[0]['email'];?>"></td></tr>
<input type="hidden" name="id" value="<?php echo $asiakas[0]['id_asiakas'];?>">
</TABLE>
<br>
<a href="<?php echo site_url();?>">Peruuta</a>
<input type="submit" name="btn" value="Tallenna">
</FORM>