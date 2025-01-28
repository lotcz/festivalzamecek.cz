DROP VIEW IF EXISTS `viewFestivalArtists`;

CREATE VIEW view_festival_artists AS
SELECT *
FROM festival_artist fa
	LEFT OUTER JOIN festival_stage fs ON (fa.festival_artist_stage_id = fs.festival_stage_id);
