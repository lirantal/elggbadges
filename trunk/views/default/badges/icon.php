<?php


	// set securitytokens
	$ts = time();
	$token = generate_action_token($ts);
	$tokenRequest = "&__elgg_token=$token&__elgg_ts=$ts";

	
    //if ($vars['size'] == 'large' && $vars['override']) {  
    if (get_context() == 'profile') {  

        if ($guid = $vars['entity']->badges_badge) {
            $badge = get_entity($guid);

            if (is_object($badge)) {
            	
?>
                <br /><br />
                <div class="badges_profile">
		            <div>
                        <span><?php echo elgg_echo('badges:badge:upper'); ?>: 

                            <?php if ($badge->url) { ?>
                                <a href="<?php echo $badge->url; ?>">
                            <?php } ?>

                            <img title="<?php echo $badge->title; ?>" src="<?php echo $vars['url']; ?>action/badges/view?file_guid=<?php echo $guid . $tokenRequest ?>">

                            <?php if ($badge->url) { ?>
                                </a>
                            <?php } ?>

                            <?php if ((int)get_plugin_setting('show_description', 'badges')) { ?>
                                <div class="badges_profile_description"><?php echo $badge->description; ?></div><br />
                            <?php } ?>
                        </span>
                    </div>
                </div>

            <?php } ?>
        <?php } ?>
    <?php } ?>
