<?php
if(!defined('ABSPATH'))
{
    exit;
}
global $variable1;
global $variable2;
global $variable3;
global $variable4;
global $variable5;
global $variable6;
global $variable7;



    if(isset($_POST['Add'])){
            wphw_opt();
    }
    function wphw_opt(){
        $Gmail = $_POST['Gmail'];
        $Facebook = $_POST['Facebook'];
        $Linkedin = $_POST['Linkedin'];
        $Github = $_POST['Github'];
        $Twitter = $_POST['Twitter'];
        $Instagram = $_POST['Instagram'];
        $Copyright = $_POST['Copyright'];

        global $variable1;
        global $variable2;
        global $variable3;
        global $variable4;
        global $variable5;
        global $variable6;
        global $variable7;
        if( get_option('Gmail') != trim($Gmail)){
            $variable1= update_option( 'Gmail', trim($Gmail));
        }
        if( get_option('Facebook') != trim($Facebook)){
          $variable2= update_option( 'Facebook', trim($Facebook));
      }
    if( get_option('Instagram') != trim($Instagram)){
      $variable3= update_option( 'Instagram', trim($Instagram));
  
}
if( get_option('Twitter') != trim($Twitter)){
  $variable4= update_option( 'Twitter', trim($Twitter));
}

if( get_option('Linkedin') != trim($Linkedin)){
  $variable5= update_option( 'Linkedin', trim($Linkedin));
}
if( get_option('Github') != trim($Github)){
  $variable6= update_option( 'Github', trim($Github));
}
if( get_option('Copyright') != trim($Copyright)){
  $variable7= update_option( 'Copyright', trim($Copyright));
}
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if(isset($_POST['Add']) && ($variable1 || $variable2 || $variable3 || $variable4 || $variable5 || $variable6  || $variable7 )):?>
  <div id="message" class="updated below-h2">
    <p>Content updated successfully</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Enter footer link and click on save button.</strong></h3>
      <form method="post" action="">
      <table class="form-table">
          <tr>
            <th scope="row">Your Copyright name:</th>
            <td><input type="text" name="Copyright" value="<?php echo get_option('Copyright');?>" style="width:350px;" /></td>
          </tr>
        <table class="form-table">
          <tr>
            <th scope="row">Your Gmail link:</th>
            <td><input type="text" name="Gmail" value="<?php echo get_option('Gmail');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Your Facebook link:</th>
            <td><input type="text" name="Facebook" value="<?php echo get_option('Facebook');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">Your Instagram link:</th>
            <td><input type="text" name="Instagram" value="<?php echo get_option('Instagram');?>" style="width:350px;" /></td>
          <tr>
          <tr>
            <th scope="row">Your Github link:</th>
            <td><input type="text" name="Github" value="<?php echo get_option('Github');?>" style="width:350px;" /></td>
          <tr>
          <tr>
            <th scope="row">Your Linkedin link:</th>
            <td><input type="text" name="Linkedin" value="<?php echo get_option('Linkedin');?>" style="width:350px;" /></td>
          <tr>
          <tr>
            <th scope="row">Your Twitter  link:</th>
            <td><input type="text" name="Twitter" value="<?php echo get_option('Twitter');?>" style="width:350px;" /></td>
          <tr>
          

            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="Add" value="Save changes" class="button-primary" />
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
