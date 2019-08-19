


CREATE TABLE `hsing`.`article` (
  `article_id`      INT(100) NOT NULL AUTO_INCREMENT
  COMMENT '文章id',
  `article_sort`    VARCHAR(100) CHARACTER SET utf8
  COLLATE utf8_general_ci    NOT NULL
  COMMENT '文章类别',
  `article_author`  VARCHAR(100) CHARACTER SET utf8
  COLLATE utf8_general_ci    NOT NULL
  COMMENT '文章作者',
  `article_time`    DATE     NOT NULL
  COMMENT '文章添加时间',
  `article_name`    VARCHAR(100) CHARACTER SET utf8
  COLLATE utf8_general_ci    NOT NULL
  COMMENT '文章标题',
  `article_content` VARCHAR(10000) CHARACTER SET utf8
  COLLATE utf8_general_ci    NOT NULL
  COMMENT '文章内容',
  PRIMARY KEY (`article_id`)
)
  ENGINE = InnoDB
  CHARSET = utf8
  COLLATE utf8_general_ci
  COMMENT = '文章数据表';