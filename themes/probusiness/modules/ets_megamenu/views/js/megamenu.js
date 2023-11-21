/**
 * 2007-2022 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2022 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */
$(function() {
     if ($('.ets_mm_megamenu.sticky_enabled').length > 0)
     {
        var sticky_navigation_offset_top = $('.ets_mm_megamenu.sticky_enabled').offset().top;
        var headerFloatingHeight = $('.ets_mm_megamenu.sticky_enabled').height()+($('#header').length > 0 ? parseInt($('.ets_mm_megamenu.sticky_enabled').css('marginTop').replace('px',''))+parseInt($('.ets_mm_megamenu.sticky_enabled').css('marginBottom').replace('px','')) : 0);
        var oldHeaderMarginBottom = $('#header').length > 0 ? parseInt($('#header').css('marginBottom').replace('px','')) : 0;
        var sticky_navigation = function(){
            if(!$('.ets_mm_megamenu').hasClass('sticky_enabled'))
                return false;
            var scroll_top = $(window).scrollTop(); 
            if (scroll_top > sticky_navigation_offset_top) {
                $('.ets_mm_megamenu.sticky_enabled').addClass('scroll_heading');
                if($('#header .header_content').length > 0){
                    if ($(window).width() >= 992){
                        $('#header .header_content').css({'marginBottom':headerFloatingHeight+'px'});
                    }
                }
            } else {
                $('.ets_mm_megamenu.sticky_enabled').removeClass('scroll_heading');
                if($('#header .header_content').length > 0)
                    $('#header .header_content').css({'marginBottom':''});
            } 
        };
        sticky_navigation();
        $(window).scroll(function() {
             sticky_navigation();
        });
     }
     
     $('.transition_slide li.mm_menus_li').hover(function(){
        if($(window).width() >= 992){
            $(this).find('.mm_columns_ul').stop(true,true).slideDown(300);
        }
    }, function(){
        if($(window).width() >= 992){
            $(this).find('.mm_columns_ul').stop(true,true).slideUp(300);
        }
    });
    
    
    $('.ybc-menu-toggle').on('click',function(){
        if ($(window).width() <= 991){
            var wrapper = $(this).next('.mm_menus_ul');
            if($(this).hasClass('closed'))
            {
                var btnObj = $(this); 
                btnObj.removeClass('closed');
                btnObj.addClass('opened');
                //btnObj.text('-');
                wrapper.stop(true,true).addClass('active');
                if ( $('.transition_slide.transition_default').length != '' ){
                    wrapper.stop(true,true).slideDown(0);
                }
            }
            else
            {
                var btnObj = $(this); 
                btnObj.removeClass('opened');
                btnObj.addClass('closed');
                //btnObj.text('+');           
                wrapper.stop(true,true).removeClass('active');
                if ( $('.transition_slide.transition_default').length != '' ){
                    wrapper.stop(true,true).slideUp(0);
                }
            }   
         }     
    });
    
    
    $('.close_menu').on('click',function(){
        if ($(window).width() <= 991){
            $(this).parent().prev().removeClass('opened');
            $(this).parent().prev().addClass('closed');        
            $(this).parent().stop(true,true).removeClass('active');
         }     
    });
    
    
    $('.arrow').on('click',function(){
        if ($(window).width() <= 991){
            var wrapper = $(this).next('.mm_columns_ul');
            if($(this).hasClass('closed'))
            {
                var btnObj = $(this); 
                btnObj.removeClass('closed');
                btnObj.addClass('opened');
                //btnObj.text('-');
                wrapper.stop(true,true).addClass('active');
            }
            else
            {
                var btnObj = $(this); 
                btnObj.removeClass('opened');
                btnObj.addClass('closed');
                //btnObj.text('+');           
                wrapper.stop(true,true).removeClass('active');
            } 
        }       
    });

    //Active menu
    if($('.ets_mm_megamenu').hasClass('enable_active_menu') && $('.mm_menus_ul > li').length > 0)
    {
        var currentUrl = window.location.href;      
        $('.mm_menus_ul > li').each(function(){
            if($(this).find('a[href="'+currentUrl+'"]').length > 0)
            {
                $(this).addClass('active');
                return false;
            }
        });
    }
    if($('.mm_breaker').length > 0 && $('.mm_breaker').prev('li').length > 0)
    {
        $('.mm_breaker').prev('li').addClass('mm_before_breaker');
    }
});
