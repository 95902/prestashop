<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-17 15:44:27
  from 'C:\wamp64\www\prestashop\admin548ikkjvs\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602d2bcbcef4f2_18519205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b71d1e61491a40b61b8de152964781583613e73' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin548ikkjvs\\themes\\default\\template\\content.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602d2bcbcef4f2_18519205 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
