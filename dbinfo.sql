--�₢���킹�e�[�u��
DROP TABLE IF EXISTS inquirys;
CREATE TABLE inquirys(
   inquiry_id INT UNSIGED NOT NULL AUTO_INCREMENT COMMENT='���j�[�N��ID',
   email�@VARCHAR(320) NOT NULL COMMENT='�₢���킹�̃��A�h',
   inquiry_body TEXT NOT NULL COMMENT='���O',
   name�@VARCHAR(620) NOT NULL COMMENT='�₢���킹���e',
   birthday DATE COMMENT='�a����'
PRIMARY KEY('inquiry_id')

)CHARACTER SET 'utf8mb4',ENGINE=InnoBD,COMMENT'1���R�[�h���u�ꌏ�̖₢���킹�v���Ӗ�����e�[�u��'�G

