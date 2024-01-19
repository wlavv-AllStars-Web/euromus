<?php
/* Smarty version 4.3.4, created on 2024-01-12 17:03:22
  from 'C:\xampp\htdocs\euromus\modules\ukoocompat\views\templates\hook\ASM_select_groups_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a170da36e452_24775969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f3d99b3b4ffa5314139cb662fde7e127d5c03e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\euromus\\modules\\ukoocompat\\views\\templates\\hook\\ASM_select_groups_js.tpl',
      1 => 1704974576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a170da36e452_24775969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('context', Context::getContext());
$_smarty_tpl->_assignInScope('idLang', (int)$_smarty_tpl->tpl_vars['context']->value->language->id);?>

<?php echo '<script'; ?>
>

    $(document).ready(function() {
        return ;
    });
    

    function call_ajax_fill_selects(index){
        id_lang = <?php echo $_smarty_tpl->tpl_vars['idLang']->value;?>
;
        select_1 = 0;
        select_2 = 0;
        select_3 = 0;
        select_4 = 0;

        if($('#id_ukoocompat_criterion_select_groups_1').length) select_1 = $('#id_ukoocompat_criterion_select_groups_1').val();
        if($('#id_ukoocompat_criterion_select_groups_2').length) select_2 = $('#id_ukoocompat_criterion_select_groups_2').val();
        if($('#id_ukoocompat_criterion_select_groups_3').length) select_3 = $('#id_ukoocompat_criterion_select_groups_3').val();
        if($('#id_ukoocompat_criterion_select_groups_4').length) select_4 = $('#id_ukoocompat_criterion_select_groups_4').val();
        if($('#id_lang').length) id_lang = $('#id_lang').val();
        
        if(index == 1){
            $('#id_ukoocompat_criterion_select_groups_2').prop('disabled', 'disabled');
            $('#id_ukoocompat_criterion_select_groups_3').prop('disabled', 'disabled');
            $('#id_ukoocompat_criterion_select_groups_4').prop('disabled', 'disabled');
        }
        
        if(index == 2){
            $('#id_ukoocompat_criterion_select_groups_3').prop('disabled', 'disabled');
            $('#id_ukoocompat_criterion_select_groups_4').prop('disabled', 'disabled');
        }
        
        if(index == 3){
            $('#id_ukoocompat_criterion_select_groups_4').prop('disabled', 'disabled');
        }
        
        $.ajax({
            url: "/modules/ukoocompat/views/templates/hook/getDataForNextSelect.php",
            type: "POST",
            async: true,
            data: {
                select_1,
                select_2,
                select_3,
                nextSelect: (parseInt(index) + parseInt(1)),
                id_lang
            },
            success: function (result) {
                if (result.length > 0 && index < 4) {
                    
                    if($('#id_ukoocompat_criterion_select_groups_' + (index + 1)).length){
                        $('#id_ukoocompat_criterion_select_groups_' + (index + 1)).replaceWith(result);
                        clean_other_selects(index);
                    }
                }
            }
        });
    }

    function clean_other_selects(index){

        if(index === 1){
            if($('#id_ukoocompat_criterion_select_groups_3').length){
                $('#id_ukoocompat_criterion_select_groups_' + 3).prop('value', "0");
                $('#id_ukoocompat_criterion_select_groups_' + 3).prop('readonly', "readonly");
            }

            if($('#id_ukoocompat_criterion_select_groups_4').length){
                $('#id_ukoocompat_criterion_select_groups_' + 4).prop('value', "0");
                $('#id_ukoocompat_criterion_select_groups_' + 4).prop('readonly', "readonly");
            }
        }
        
        if(index === 2){
            if($('#id_ukoocompat_criterion_select_groups_4').length) $('#id_ukoocompat_criterion_select_groups_' + 4).prop('value', "0");
        }

    }

    

    function save_compatibilities(){
        
        select_1 = 0;
        select_2 = 0;
        select_3 = 0;
        select_4 = 0;

        if($('#id_ukoocompat_criterion_select_groups_1').length) select_1 = $('#id_ukoocompat_criterion_select_groups_1').val();
        if($('#id_ukoocompat_criterion_select_groups_2').length) select_2 = $('#id_ukoocompat_criterion_select_groups_2').val();
        if($('#id_ukoocompat_criterion_select_groups_3').length) select_3 = $('#id_ukoocompat_criterion_select_groups_3').val();
        if($('#id_ukoocompat_criterion_select_groups_4').length) select_4 = $('#id_ukoocompat_criterion_select_groups_4').val();

        id_product = $('#id_product').val();

        $('#show_group_compats_message').toggle();

        $.ajax({
            url: "/modules/ukoocompat/views/templates/hook/saveCompatibilities.php",
            type: "POST",
            data: {
                select_1,
                select_2,
                select_3,
                select_4,
                id_product,
            },
            success: function(data){
            
                $('#show_group_compats_message').toggle();

                // var rowClass = 'id_compat_' + data.id_product;

                // var html = '<tr class="' + rowClass + '">';
                // html += '<input type="hidden" id="compatibility_number">';

                // html += '<td>';
                // html += '<input type="checkbox" name="delete_compats" value="' + data.checkboxValue + '">';
                // html += '</td>';

                // html += '<td>' + data.select_1 + '</td>';
                // html += '<td>' + data.select_2 + '</td>';
                // html += '<td>' + data.select_3 + '</td>';
                // html += '<td>' + data.select_4 + '</td>';

                // html += '</tr>';

                // // Now you can use the 'html' variable to append this row to your table
                // $('#module_ukoocompat').append(html);

                location.reload();

            }
        });
    }

<?php echo '</script'; ?>
><?php }
}
