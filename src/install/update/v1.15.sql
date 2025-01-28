ALTER TABLE festival_stage
	ADD COLUMN festival_stage_place VARCHAR(255);

DROP VIEW IF EXISTS `view_festival_artists`;

CREATE VIEW view_festival_artists AS
SELECT *
FROM festival_artist fa
	LEFT OUTER JOIN festival_stage fs ON (fa.festival_artist_stage_id = fs.festival_stage_id);
