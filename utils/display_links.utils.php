<?php  
/*
* 
* display_links
*
* Essa função serve para exibir links com base no array de informações passadas no param $arr_links
*
* @package solidarios 
*
* @author Ms. Nullus <email: gustavojs417@gmail.com> <github: msNullus>
*
* return HTMLElement
*
*/
?>
<?php function display_links($arr_links) { ?>

	<?php foreach($arr_links as $name => $path): ?>
		<li class="nav-link">
			<a 
			href="<?php echo URL_BASE_LINK_VIEWS.$path; ?>">
				<?php echo ucfirst($name); ?>
			</a>
		</li> 
	<?php endforeach; ?>

<?php } ?>