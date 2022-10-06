#db name = 'mygallerydb'

CREATE TABLE pictures (
	pic_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pic_name TEXT NOT NULL,
    pic_description TEXT NOT NULL,
    pic_tag TEXT NOT NULL,
    pic_added_time TIMESTAMP
);
