<?php /* Smarty version 3.1.27, created on 2023-07-27 18:54:30
         compiled from "/home/dexfpheh/polticventure.co/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1216891664c2bd66ac8236_66222338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b80519f315221be069ddbe0ea799fe514e8249c' => 
    array (
      0 => '/home/dexfpheh/polticventure.co/tmpl/footer.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216891664c2bd66ac8236_66222338',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64c2bd66ad5617_97916114',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64c2bd66ad5617_97916114')) {
function content_64c2bd66ad5617_97916114 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/dexfpheh/polticventure.co/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1216891664c2bd66ac8236_66222338';
if ($_smarty_tpl->tpl_vars['settings']->value['reverse_columns']) {?>
</div>

              </td>
              </tr>
            </table>
            <!-- Main: END -->

              </td>
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          
              <td width=300 align=center><img src="images/q.gif" width=180 height=1>
<?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

              </td>

             </tr>
           </table>
		  </td>
		 </tr>
	   </table>
	 </td>
  </tr>



  <tr> 
    <td height="19" class="forCopyright">All Rights Reserved. <a href='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
' class="forCopyright"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a></td>
  </tr>
</table>
</center></body>
</html>
<?php } else { ?>
</div>

              </td>
              </tr>
            </table>
            <!-- Main: END -->

              </td>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']) {?>
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          
              <td width=300 align=center class=bgcolorright><img src="images/q.gif" width=180 height=1>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']) {?>
<?php echo $_smarty_tpl->getSubTemplate ("news_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
                                   
              </td>
<?php }?>
             </tr>
           </table>
		  </td>
		 </tr>
	   </table>
	 </td>
  </tr>



  <tr> 
    <td height="19" class="forCopyright">All Rights Reserved. <a href='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
' class="forCopyright"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a></td>
  </tr>
</table>
</center></body>
</html>
<?php }
}
}
?>