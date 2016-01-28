
<div id="content">
<h1>Consorcio | Maneja tu Suerte</h1>
<div class="redes">
<span>COMPARTIR</span>
<a href="#"><img src="<?php echo base_url('assets/img/fb.jpg') ?>" alt="Facebook" /></a>
<a href="#"><img src="<?php echo base_url('assets/img/tw.jpg')?>" alt="Twitter" /></a>
</div>
<img class="logo" src="<?php echo base_url('assets/img/logo.jpg')?>" alt="Consorcio" />

<div class="form">
<img class="text1" src="<?php echo base_url('assets/img/text1.png')?>" alt="Juega en el traga monedas de Consorcio y podrás obtener tu SOAP gratis o ganar cientos de descuentos" />
<h2>SELECCIONA EL MODELO DE TU VEHÍCULO*, INGRESA TUS DATOS Y COMIENZA A JUGAR</h2>
	<?php echo form_open(''); ?>
		<ul>
		<li><select>
		  <option>Modelo de tu vehículo</option>
		  <option>Lada</option>
		  <option>Fiat</option>
		</select></li>
		<li><input placeholder="Patente" name="patente"></li>
		<li class="nombre"><input placeholder="Nombre" name="nombre"></li>
		<li><input placeholder="Apellido Paterno" name="apellidoPaterno"></li>
		<li><input placeholder="Apellido Materno" name="apellidoMaterno"></li>
		<li><input placeholder="Rut Ej: 12.345.678-9" name="rut"></li>
		<li><input placeholder="Celular Ej: +569xxxxxxxx" name="celular"></li>
		<li><input placeholder="Email" name="email"></li>
		<li><input placeholder="Confirmar Email" name="confirEmail" ></li>
		</ul>
		<span class="check"><input type="checkbox" name="acepto">Acepto</span>
<?php echo form_close(); ?>
<a class="btn" href="#"><img src="<?php echo base_url('assets/img/participar.png')?>" alt="Participar" /></a>

<p class="legal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at sapien interdum, efficitur massa sed, tempus metus. Ut eleifend in lectus vel eleifend. Nam semper fermentum turpis ac dignissim. Aliquam quis facilisis purus, a accumsan lectus. Fusce eget augue congue, varius dolor vel, sagittis sapien. Morbi blandit quam eget euismod accumsan. Morbi urna lectus, mattis sit amet volutpat et, sagittis at quam. Aenean tincidunt maximus est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
</div>
</div><!--/content-->
