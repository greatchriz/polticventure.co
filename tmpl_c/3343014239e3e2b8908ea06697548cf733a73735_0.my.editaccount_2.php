<?php /* Smarty version 3.1.27, created on 2023-08-04 15:01:56
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:172712573564cd12e43fbfd4_04618824%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1691161316,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '172712573564cd12e43fbfd4_04618824',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64cd12e4400fb6_71823172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64cd12e4400fb6_71823172')) {
function content_64cd12e4400fb6_71823172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172712573564cd12e43fbfd4_04618824';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>