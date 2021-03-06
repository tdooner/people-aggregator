<?php 
  require_once "web/includes/classes/xHtml.class.php"; 
?>
<div id="register">
  <h1><?= $title ?></h1>
        <form name="formRegisterUser" id="register_user_form" enctype="multipart/form-data" action="" method="post">
          <fieldset class="center_box">
            <div id="validation_error"></div>
            <input type="hidden" name="group_id" value="<?= @$group_id?>" />
            <div class="field_medium">
              <h4><label><span class="required"> * </span> <?= __("Login name") ?>:</label></h4>
              <input id="login_name" type="text" name="login_name" value="<?= htmlspecialchars(@$_POST['login_name']) ?>" class="text" />
              <div class="field_text">
                <?= __("Login name may contain letters, numbers and underscores (_).") ?>
              </div>
            </div>
            
            <div class="field_medium">
              <h4><label><span class="required"> * </span> <?= __("First name") ?>:</label></h4>
              <input type="text" class="text" name="first_name" value="<?= htmlspecialchars(@$_POST['first_name']) ?>" />
            </div>
          
          <div class="field_medium">
            <h4><label><span class="required"> * </span><?= __("Last name") ?>:</label></h4>
            <input type="text" name="last_name" id="last_name" value="<?= htmlspecialchars(@$_POST['last_name']) ?>" class="text" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("Date of birth") ?>:</label></h4>
            <?php $days = array();  $days[] = ' '; for($i = 1; $i < 32; $i++) $days[$i] = $i;?>
            <span><?=__("Day")?> :</span><?= xHtml::selectTag(array_flip($days), array('name' => 'dob_day', 'id' => 'dob_day'), (!empty($_POST['dob_day'])) ? htmlspecialchars($_POST['dob_day']) : '') ?>
            <span><?=__("Month")?> :</span><?= xHtml::selectTag($months, array('name' => 'dob_month', 'id' => 'dob_month'), (!empty($_POST['dob_month'])) ? htmlspecialchars($_POST['dob_month']) : '') ?>
            <span class="required"> * </span><?=__("Year")?> :<?= xHtml::selectTag($years, array('name' => 'dob_year', 'id' => 'dob_year'), (!empty($_POST['dob_year'])) ? htmlspecialchars($_POST['dob_year']) : '') ?>
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("Street address 1") ?>:</label></h4>
            <input type="text" name="homeAddress1" id="homeAddress1" value="<?= htmlspecialchars(@$_POST['homeAddress1']) ?>" class="text short" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("Street address 2") ?>:</label></h4>
            <input type="text" name="homeAddress2" id="homeAddress2" value="<?= htmlspecialchars(@$_POST['homeAddress2']) ?>" class="text short" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("City") ?>:</label></h4>
            <input type="text" name="city" id="city" value="<?= htmlspecialchars(@$_POST['city']) ?>" class="text" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("State/Province") ?>:</label></h4>
            <?= xHtml::selectTag(array_flip($states), array('name' => 'state', 'id' => 'state_1'), (isset($_POST['state'])) ? htmlspecialchars(@$_POST['state']) : -2) ?>
            <input type="text" name="stateOther" id="stateOther" value="<?= htmlspecialchars(@$_POST['stateOther']) ?>" class="text display_false" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("Country") ?>:</label></h4>
            <?= xHtml::selectTag(array_flip($countries), array('name' => 'country', 'id' => 'country'), (isset($_POST['country'])) ? htmlspecialchars(@$_POST['country']) : -1) ?>
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("ZIP Code") ?>:</label></h4>
            <input type="text" name="postal_code" id="postal_code" value="<?= htmlspecialchars(@$_POST['postal_code']) ?>" class="text" />
          </div>

          <div class="field_medium">
            <h4><label><span class="required"> &nbsp; </span><?= __("Phone #") ?>:</label></h4>
            <input type="text" name="phone" id="phone" value="<?= htmlspecialchars(@$_POST['phone']) ?>" class="text" />
          </div>
          <div class="field_medium">
            <h4><label><span class="required"> * </span> <?= __("Password") ?>:</label></h4>
            <input type="password" class="text" name="password" id="password"/>
            <div class="field_text">
      <?= __("Password can be 5-15 characters long, and is case sensitive.") ?>
     </div>
          </div>
          
          <div class="field_medium">
            <h4><label><span class="required"> * </span> <?= __("Confirm password") ?>:</label></h4>
            <input type="password" class="text" name="confirm_password" id="confirm_password"/>
          </div>
          
          <div class="field_big" id="email_container">
            <table cellpadding="5" cellspacing="5" width="100%">
            <tr>
              <th rowspan="2" id="email_ajax_cont">
                <h4><label><span class="required"> * </span> <?= __("Email") ?>:</label></h4>
                <input type="text" name="email" id="email" class="text" value="<?= htmlspecialchars(@$_POST['email']) ?>" />
              </th>
              <td>
                <input name="use_parent_email" id="email_type_own" type="radio" class="text" value="0" checked /> <?= __("use own email account")  ?>
              </td>
            </tr>
            <tr>
              <td>
               <input name="use_parent_email" id="email_type_parent" type="radio" value="1" class="text" /> <?= __("use a parent's email account")  ?>
              </td>
            </tr>
            </table>
          </div>
        <div class="field_medium" style="height: auto">
         <div>
           <h4><label><?= __("Upload a photo") ?>:<span class="required"> &nbsp; </span></label></h4>
           <div id="userfile_wrapper">
           <input name="userfile" id="userfile" type="file" class="text" />
           </div>
         </div>
         <div style="clear: left; display:none">
           <h4><label><?= __("Or enter a photo URL") ?>:<span class="required"> &nbsp; </span></label></h4>
           <input type="text" name="avatar_url" id="avatar_url" class="text short" value="<?= htmlspecialchars(@$_POST['avatar_url']) ?>" />
         </div>
         <div class="field_text" style="margin-top:8px;">
           <a href ="#" id="prev_image" title="<?= __("Preview Image") ?>" /><?= __("Preview Image") ?></a> |
           <a href ="#" id="clear_image" title="<?= __("Clear Image") ?>" /><?= __("Clear Image") ?></a>
         </div>
        </div>
        <div id="image_preview">
          <div id="loading_preview"></div>
          <? if (!empty($_POST['user_filename'])) { /* validated in register.php */ ?>
            <div id="your_photo" class="field_medium" style="height: auto">
              <h4><label><?= __("Your photo") ?>:<span class="required"> &nbsp; </span></label></h4>
              <input type="hidden" name="user_filename" value="<?= htmlspecialchars(@$_POST['user_filename']) ?>" />
            <div><?= uihelper_resize_mk_img($_POST['user_filename'], 200, 200, NULL, 'style="margin-left: 10px"') ?></div>
              <div><b><?= __("To use a different image, click Clear Image and select a new image.") ?></b></div>
            </div>
          <? } ?>
        </div>
<!--
          <div class="field_medium">
            <input type="checkbox" name="chkbox_agree" id="chkbox_agree" checked="checked" value="1"/><?= sprintf(__("I have read and agree to the %s <a href='%s/terms.php' target='_blank'>Terms and Conditions</a>"), PA::$site_name, PA::$url) ?>.
          </div>
-->          
            
          <input type = "hidden" name = "parent_uid" id="parent_uid" value = "<?= $parent_uid ?>" />
          <input type = "hidden" name = "op" value = "register" />
           <div class="button_position">
             <input type="button" name="back_btn" id="back_btn" value="<?= __("Cancel") ?>" onclick="javascript:history.back()" />
             <input type="submit" name="submit" id="reg_child" value="<?= __("Submit") ?>" alt="Add"/>
           </div>
       </fieldset>
      </form>


</div>
