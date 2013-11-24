<?php require("strings/settings_strings.php"); ?>
<div id="settings">
    <h2><?php echo $headline; ?></h2>
    <form method="post">
        <div class="form_part">
            <h4><?php echo $general_headline; ?></h4>
            <div class="sub_form">
                <p><label for="name"><?php echo $page_name; ?></label><input type="text" name="page_name"></p>
                <p> <input type="checkbox" name="settings[]" value="main_menu"><?php echo $main_menu;?></p>
                <p> <input type="checkbox" name="settings[]" value="article_link"><?php echo $article_link;?></p>
                <p> <input type="checkbox" name="settings[]" value="children_menu"><?php echo $children_menu;?></p>
            </div>

            <h4><?php echo $images_headline; ?></h4>
            <div class="sub_form">
                <p> <input type="checkbox" name="settings[]" value="profile_img"><?php echo $profile_image;?></p>
                <p> <input type="checkbox" name="settings[]" value="cover_img"><?php echo $cover_image;?></p>
            </div>

            <h4><?php echo $gallery_headline; ?><input type="checkbox" name="settings[]" value="gallery_yes"><?php echo $ok;?></h4>
            <div class="sub_form">
                <p> <input type="checkbox" name="settings[]" value="gallery_description"><?php echo $gallery_description;?></p>
                <p> <input type="checkbox" name="settings[]" value="gallery_title"><?php echo $gallery_title;?></p>
                <p> <input type="checkbox" name="settings[]" value="gallery_group"><?php echo $gallery_groups;?></p>
            </div>

            <h4><?php echo $articles_headline; ?><input type="checkbox" name="settings[]" value="article_yes"><?php echo $ok; ?></h4>
            <div class="sub_form">
                <group>
                    <p><input type="checkbox" name="settings[]" value="multiple_articles"><?php echo $multiple_articles;?></p>
                    <p><input type="checkbox" name="settings[]" value="single_articles"><?php echo $single_article;?></p>
                </group>
                <h5><?php echo $article_content_headline;?></h5>
                <div class="sub_sub_form">
                    <p><input type="checkbox" name="settings[]" value="article_title"><?php echo $article_title;?></p>
                    <p><input type="checkbox" name="settings[]" value="date_time"><?php echo $date_time;?></p>
                    <p><input type="checkbox" name="settings[]" value="article_summary"><?php echo $article_summary;?></p>
                    <p><input type="checkbox" name="settings[]" value="article_img"><?php echo $article_image;?></p>
                </div>
            </div>
        </div>
        <div  class="form_part">
            <h4><?php echo $links_headline; ?><input type="checkbox" name="settings[]" value="links_yes"><?php echo $ok;?></h4>
            <div class="sub_form">
                <p><input type="checkbox" name="settings[]" value="article_title"><?php echo $article_title;?></p>
                <p><input type="checkbox" name="settings[]" value="date_time"><?php echo $date_time;?></p>
                <p><input type="checkbox" name="settings[]" value="article_summary"><?php echo $article_summary;?></p>
                <p><input type="checkbox" name="settings[]" value="article_img"><?php echo $article_image;?></p>
            </div>

            <h4><?php echo $timeline_headline; ?><input type="checkbox" name="settings[]" value="timeline_yes"><?php echo $ok;?></h4>
            <div class="sub_form">
                <p><input type="checkbox" name="settings[]" value="event_name"><?php echo $event_name;?></p>
                <p><input type="checkbox" name="settings[]" value="event_description"><?php echo $event_description;?></p>
                <p><input type="checkbox" name="settings[]" value="event_date_time"><?php echo $event_date_time;?></p>
                <p><input type="checkbox" name="settings[]" value="link_to_event"><?php echo $link_to_event;?></p>
            </div>

            <h4><?php echo $contact_headline; ?><input type="checkbox" name="settings[]" value="contact_yes"><?php echo $ok;?></h4>
            <div class="sub_form">
                <p><input type="checkbox" name="settings[]" value="visitors_name"><?php echo $visitors_name;?></p>
                <p><input type="checkbox" name="settings[]" value="visitors_surname"><?php echo $visitors_surname;?></p>
                <p><input type="checkbox" name="settings[]" value="visitors_email"><?php echo $visitors_email;?></p>
                <p><input type="checkbox" name="settings[]" value="visitors_phone"><?php echo $visitors_phone;?></p>
                <p><input type="checkbox" name="settings[]" value="visitors_message"><?php echo $visitors_message;?></p>
            </div>

            <h4><?php echo $subscribe_headline; ?><input type="checkbox" name="settings[]" value="subscribe_yes"><?php echo $ok; ?></h4>
            <div class="sub_form">
                <p><input type="checkbox" name="settings[]" value="subscribers_name"><?php echo $visitors_name;?></p>
                <p><input type="checkbox" name="settings[]" value="subscribers_surname"><?php echo $visitors_surname;?></p>
                <p><input type="checkbox" name="settings[]" value="subscribers_email"><?php echo $visitors_email;?></p>
            </div>
        </div>
        <br style="clear: left;" />
        <div style="border-top: 1px solid #888888;text-align: right; padding-top: 10px ">
            <button type="submit" name="save_settings" class="buttons">Save</button>
        </div>
    </form>
</div>
