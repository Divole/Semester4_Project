<?php require("C:/xampp/htdocs/Semester4_Project/strings/settings_strings.php"); ?>
<div id="settings">
    <h2><?php echo $headline; ?></h2>
    <form method="post">
        <div class="form_part">
            <h4><?php echo $general_headline; ?></h4>
            <div class="sub_form">
                <p><label for="name"><?php echo $page_name; ?></label><input type="text" name="page_name"></p>
                <p> <input class="setting_option" type="checkbox" name="settings[]" value="A"><?php echo $main_menu;?></p>
                <p> <input class="setting_option" type="checkbox" name="settings[]" value="B"><?php echo $article_link;?></p>
                <p> <input class="setting_option" type="checkbox" name="settings[]" value="C"><?php echo $children_menu;?></p>
            </div>

            <h4><?php echo $images_headline; ?></h4>
            <div class="sub_form">
                <p> <input class="setting_option" type="checkbox" name="settings[]" value="D"><?php echo $profile_image;?></p>
                <p> <input class="setting_option" type="checkbox" name="settings[]" value="I"><?php echo $cover_image;?></p>
            </div>

            <h4><?php echo $gallery_headline; ?><input class="setting_option" id="btn_gallery" type="checkbox" name="settings[]" value="F"><?php echo $ok;?></h4>
            <div class="sub_form" id="gallery_options">
                <p> <input class="setting_option" type="checkbox" disabled="disabled" name="settings[]" value="G"><?php echo $gallery_description;?></p>
                <p> <input class="setting_option" type="checkbox" disabled="disabled" name="settings[]" value="H"><?php echo $gallery_title;?></p>
                <p> <input class="setting_option" type="checkbox" disabled="disabled" name="settings[]" value="J"><?php echo $gallery_groups;?></p>
            </div>

            <h4><?php echo $articles_headline; ?><input class="setting_option" id="btn_articles" type="checkbox" name="settings[]" value="K"><?php echo $ok; ?></h4>
            <div class="sub_form" id="articles_options">
                <group>
                    <p><input class="setting_option" type="radio" name="settings[]" disabled="disabled" value="L"><?php echo $multiple_articles;?></p>
                    <p><input class="setting_option" type="radio" name="settings[]" disabled="disabled" value="M"><?php echo $single_article;?></p>
                </group>
                <h5><?php echo $article_content_headline;?></h5>
                <div class="sub_sub_form" >
                    <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="N"><?php echo $article_title;?></p>
                    <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="O"><?php echo $date_time;?></p>
                    <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="P"><?php echo $article_summary;?></p>
                    <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="Q"><?php echo $article_image;?></p>
                </div>
            </div>
        </div>
        <div  class="form_part">
            <h4><?php echo $links_headline; ?><input class="setting_option" id="btn_links" type="checkbox" name="settings[]" value="R"><?php echo $ok;?></h4>
            <div class="sub_form" id="links_options">
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="R"><?php echo $article_title;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="S"><?php echo $date_time;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="T"><?php echo $article_summary;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="U"><?php echo $article_image;?></p>
            </div>

            <h4><?php echo $timeline_headline; ?><input class="setting_option" id="btn_timeline" type="checkbox" name="settings[]" value="V"><?php echo $ok;?></h4>
            <div class="sub_form" id="timeline_options">
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="W"><?php echo $event_name;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="X"><?php echo $event_description;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="Y"><?php echo $event_date_time;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="Z"><?php echo $link_to_event;?></p>
            </div>

            <h4><?php echo $contact_headline; ?><input class="setting_option" id="btn_contact" type="checkbox" name="settings[]" value="*A"><?php echo $ok;?></h4>
            <div class="sub_form" id="contact_options">
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*B"><?php echo $visitors_name;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*C"><?php echo $visitors_surname;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*D"><?php echo $visitors_email;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*E"><?php echo $visitors_phone;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*F"><?php echo $visitors_message;?></p>
            </div>

            <h4><?php echo $subscribe_headline; ?><input class="setting_option" id="btn_subscribe" type="checkbox" name="settings[]" value="*G"><?php echo $ok; ?></h4>
            <div class="sub_form" id="subscribe_options">
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*H"><?php echo $visitors_name;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*J"><?php echo $visitors_surname;?></p>
                <p><input class="setting_option" type="checkbox" name="settings[]" disabled="disabled" value="*K"><?php echo $visitors_email;?></p>
            </div>
        </div>
        <br style="clear: left;" />
        <div style="border-top: 1px solid #888888;text-align: right; padding-top: 10px ">
            <button id="asdfgh" class="buttons">Save</button>
        </div>
    </form>
</div>

<div id="saving_text" style="visibility: hidden">saving...</div>