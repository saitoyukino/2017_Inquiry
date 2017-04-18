--問い合わせテーブル
DROP TABLE IF EXISTS inquirys;
CREATE TABLE inquirys(
   inquiry_id INT UNSIGED NOT NULL AUTO_INCREMENT COMMENT='ユニークなID',
   email　VARCHAR(320) NOT NULL COMMENT='問い合わせのメアド',
   inquiry_body TEXT NOT NULL COMMENT='名前',
   name　VARCHAR(620) NOT NULL COMMENT='問い合わせ内容',
   birthday DATE COMMENT='誕生日'
PRIMARY KEY('inquiry_id')

)CHARACTER SET 'utf8mb4',ENGINE=InnoBD,COMMENT'1レコードが「一件の問い合わせ」を意味するテーブル'；

