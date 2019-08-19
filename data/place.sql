

CREATE TABLE `hsing`.`place` (
  `place_id`       INT(100) NOT NULL AUTO_INCREMENT
  COMMENT '连锁店id',
  `place_province` VARCHAR(100) CHARACTER SET utf8
  COLLATE utf8_general_ci   NOT NULL
  COMMENT '连锁店省份',
  `place_content`  VARCHAR(200) CHARACTER SET utf8
  COLLATE utf8_general_ci   NOT NULL
  COMMENT '连锁店地址',
  PRIMARY KEY (`place_id`)
)
  ENGINE = InnoDB
  CHARSET = utf8
  COLLATE utf8_general_ci
  COMMENT = '连锁店地址';