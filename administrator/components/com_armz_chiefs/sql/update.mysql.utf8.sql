
INSERT INTO `#__content_types` (`type_title`, `type_alias`, `table`, `content_history_options`)
SELECT * FROM ( SELECT 'Chief','com_armz_chiefs.chief','{"special":{"dbtable":"#__armz_chiefs","key":"id","type":"Chief","prefix":"Armz_chiefsTable"}}', '{"formFile":"administrator\/components\/com_armz_chiefs\/models\/forms\/chief.xml", "hideFields":["checked_out","checked_out_time","params","language" ,"pic"], "ignoreChanges":["modified_by", "modified", "checked_out", "checked_out_time"], "convertToInt":["publish_up", "publish_down"], "displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"group_id","targetTable":"#__usergroups","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}') AS tmp
WHERE NOT EXISTS (
	SELECT type_alias FROM `#__content_types` WHERE (`type_alias` = 'com_armz_chiefs.chief')
) LIMIT 1;

UPDATE `#__content_types` SET
	`type_title` = 'Chief', 
	`table` = '{"special":{"dbtable":"#__armz_chiefs","key":"id","type":"Chief","prefix":"Armz_chiefsTable"}}', 
	`content_history_options` = '{"formFile":"administrator\/components\/com_armz_chiefs\/models\/forms\/chief.xml", "hideFields":["checked_out","checked_out_time","params","language" ,"pic"], "ignoreChanges":["modified_by", "modified", "checked_out", "checked_out_time"], "convertToInt":["publish_up", "publish_down"], "displayLookup":[{"sourceColumn":"catid","targetTable":"#__categories","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"group_id","targetTable":"#__usergroups","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"created_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"},{"sourceColumn":"access","targetTable":"#__viewlevels","targetColumn":"id","displayColumn":"title"},{"sourceColumn":"modified_by","targetTable":"#__users","targetColumn":"id","displayColumn":"name"}]}'
WHERE (`type_alias` = 'com_armz_chiefs.chief');
