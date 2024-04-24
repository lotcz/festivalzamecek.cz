ALTER TABLE festival_stage
    ADD COLUMN festival_stage_place VARCHAR(255);

DROP VIEW IF EXISTS `viewFestivalArtists`;

CREATE VIEW viewFestivalArtists AS
SELECT *
FROM festival_artist fa
         LEFT OUTER JOIN festival_stage fs ON (fa.festival_artist_stage_id = fs.festival_stage_id);
