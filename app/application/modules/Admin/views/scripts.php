
<script type="text/javascript">
$(document).ready(function(){
App.init();
App.uiNotifications();
App.uiNestableLists();
});
</script>

<script src="<?php echo base_url(ASSETS); ?>js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/multi_select/multiple-select.js"></script>

<script>
// Loader
$(window).load(function () { // makes sure the whole site is loaded
$('#status').fadeOut(); // will first fade out the loading animation
$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
$('body').delay(350).css({'overflow': 'visible'});
});
</script>

<script type="text/javascript">

    <?php
    if(!empty($success)) { ?>
    $.gritter.add({
        title: 'Account status',
        text: "Account status has been "+ status,
        image: "<?=base_url('assets/img/favicon.png')?>",
        class_name: 'clean',
        sticky: true,
        time: ''
    });
    <?php } ?>

 $(".change_status").change(function (e) {
     var field = $(this);
     var pk = field.data('pk');
     if(field.val() == 1)
     {
         field.val(0);
     } else{
         field.val(1);
     }
     var data = {"id":pk,"value":field.val()};
     console.log(data)
     $.ajax({
         type: "POST",
         url: '<?=base_url('admin/accounts/update_status')?>',
         data: data,
         success: function(response)
         {
             if(field.val() == "1")
             {
                 var status = "activated"
             }else{
                 var status = "deactivated"

             }
             $.gritter.add({
                 title: 'Account status',
                 text: "Account status has been "+ status,
                 image: "<?=base_url('assets/img/favicon.png')?>",
                 class_name: 'clean',
                 sticky: true,
                 time: ''
             });
         } });

 });

    $(".change_modules_status").change(function (e) {
        var field = $(this);
        var pk = field.data('pk');
        if(field.val() == 1)
        {
            field.val(0);
        } else{
            field.val(1);
        }
        var data = {"id":pk,"value":field.val()};
        console.log(data)
        $.ajax({
            type: "POST",
            url: '<?=base_url('admin/settings/update_status')?>',
            data: data,
            success: function(response)
            {
                if(field.val() == "1")
                {
                    var status = "activated"
                }else{
                    var status = "deactivated"

                }
                $.gritter.add({
                    title: 'Module updated',
                    text: "Module status has been "+ status,
                    image: "<?=base_url('assets/img/favicon.png')?>",
                    class_name: 'clean',
                    sticky: true,
                    time: ''
                });
            } });

    });



    jQuery(document).on("ready xcrudafterrequest", function (event, container) {
if (container) {
jQuery(container).find("select").select2();
} else {
jQuery(".xcrud").find("select").select2();
} });
</script>

<script>
var App = (function () {
    'use strict';

    App.uiNotifications = function( ){

        $('#not-basic').click(function(){
            $.gritter.add({
                title: 'Samantha new msg!',
                text: "You have a new Thomas message, let's checkout your inbox.",
                image: '<?php echo base_url(); ?>assets/img/alert.png',
                time: '',
                class_name: 'img-rounded'
            });
            return false;
        });

        $('#not-themes').click(function(){
            $.gritter.add({
                title: 'Welcome home!',
                text: 'You can start your day checking the new messages.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/avatar5.png',
                class_name: 'clean img-rounded',
                time: '',
            });
            return false;
        });

        $('#not-sticky').click(function(){
            $.gritter.add({
                title: 'Sticky Note',
                text: "Your daily goal is 130 new code lines, don't forget to update your work.",
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/slack_logo.png',
                class_name: 'clean',
                sticky: true,
                time: ''
            });
            return false;
        });

        $('#not-text').click(function(){
            $.gritter.add({
                title: 'Just Text',
                text: 'This is a simple Gritter Notification. Etiam efficitur efficitur nisl eu dictum, nullam non orci elementum.',
                class_name: 'clean',
                time: ''
            });
            return false;
        });

        /*Positions*/
        $('#not-tr').click(function(){
            $.extend($.gritter.options, { position: 'top-right' });

            $.gritter.add({
                title: 'Top Right',
                text: 'This is a simple Gritter Notification. Etiam efficitur efficitur nisl eu dictum, nullam non orci elementum',
                class_name: 'clean'
            });

            return false;
        });

        $('#not-tl').click(function(){
            $.extend($.gritter.options, { position: 'top-left' });

            $.gritter.add({
                title: 'Top Left',
                text: 'This is a simple Gritter Notification. Etiam efficitur efficitur nisl eu dictum, nullam non orci elementum',
                class_name: 'clean'
            });

            return false;
        });

        $('#not-bl').click(function(){

            $.extend($.gritter.options, { position: 'bottom-left' });

            $.gritter.add({
                title: 'Bottom Left',
                text: 'This is a simple Gritter Notification. Etiam efficitur efficitur nisl eu dictum, nullam non orci elementum',
                class_name: 'clean'
            });

            return false;
        });

        $('#not-br').click(function(){

            $.extend($.gritter.options, { position: 'bottom-right' });

            $.gritter.add({
                title: 'Bottom Right',
                text: 'This is a simple Gritter Notification. Etiam efficitur efficitur nisl eu dictum, nullam non orci elementum',
                class_name: 'clean'
            });

            return false;
        });

        /*Social Gritters*/
        $('#not-facebook').click(function(){
            $.gritter.add({
                title: 'You have comments!',
                text: 'You can start your day checking the new messages.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/fb-icon.png',
                class_name: 'color facebook'
            });
            return false;
        });

        $('#not-twitter').click(function(){
            $.gritter.add({
                title: 'You have new followers!',
                text: 'You can start your day checking the new messages.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/tw-icon.png',
                class_name: 'color twitter'
            });
            return false;
        });

        $('#not-google-plus').click(function(){
            $.gritter.add({
                title: 'You have new +1!',
                text: 'You can start your day checking the new messages.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/gp-icon.png',
                class_name: 'color google-plus'
            });
            return false;
        });

        $('#not-dribbble').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/db-icon.png',
                class_name: 'color dribbble'
            });
            return false;
        });

        $('#not-flickr').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/fl-icon.png',
                class_name: 'color flickr'
            });
            return false;
        });

        $('#not-linkedin').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/in-icon.png',
                class_name: 'color linkedin'
            });
            return false;
        });

        $('#not-youtube').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/yt-icon.png',
                class_name: 'color youtube'
            });
            return false;
        });

        $('#not-pinterest').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/pi-icon.png',
                class_name: 'color pinterest'
            });
            return false;
        });

        $('#not-github').click(function(){
            $.gritter.add({
                title: 'You have new forks!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/gh-icon.png',
                class_name: 'color github'
            });
            return false;
        });

        $('#not-tumblr').click(function(){
            $.gritter.add({
                title: 'You have new comments!',
                text: 'You can start your day checking the new comments.',
                image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/tu-icon.png',
                class_name: 'color tumblr'
            });
            return false;
        });

        /*Colors*/
        $('#not-primary').click(function(){
            $.gritter.add({
                title: 'Primary',
                text: 'This is a simple Gritter Notification.',
                class_name: 'color primary'
            });
        });

        $('#not-success').click(function(){
            $.gritter.add({
                title: 'Success',
                text: 'This is a simple Gritter Notification.',
                class_name: 'color success'
            });
        });

        $('#not-warning').click(function(){
            $.gritter.add({
                title: 'Warning',
                text: 'This is a simple Gritter Notification.',
                class_name: 'color warning'
            });
        });

        $('#not-danger').click(function(){
            $.gritter.add({
                title: 'Danger',
                text: 'This is a simple Gritter Notification.',
                class_name: 'color danger'
            });
        });

        /*Alt Colors*/

        $('#not-dark').click(function(){
            $.gritter.add({
                title: 'Dark Color',
                text: 'This is a simple Gritter Notification.',
                class_name: 'color dark'
            });
        });

        $('#nav_admin').click(function(){

            $.ajax({
                url: '<?=base_url('admin/change_drawer_status')?>',
                data: { action: 'test' },
                type: 'post',
                success: function(output) {
                }
            });

        });

    };

    return App;
})(App || {});

</script>