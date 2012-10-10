

DROP TABLE IF EXISTS `lbs_bbs`;

CREATE TABLE `lbs_bbs` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `title` VARCHAR(64)
COLLATE utf8_general_ci DEFAULT '', `content` TEXT COLLATE utf8_general_ci, `update_time`
DATETIME DEFAULT NULL, `userid` INTEGER(11) DEFAULT NULL, `flag` TINYINT(4) DEFAULT '0',
PRIMARY KEY (`id`) )ENGINE=MyISAM AUTO_INCREMENT=3 CHARACTER SET 'utf8' COLLATE
'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_blacklist`;

CREATE TABLE `lbs_blacklist` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `userid`
INTEGER(11) DEFAULT NULL, `black_userid` INTEGER(11) DEFAULT NULL, `update_time` DATETIME
DEFAULT NULL, `flag` TINYINT(4) DEFAULT '1', PRIMARY KEY (`id`) )ENGINE=MyISAM
AUTO_INCREMENT=10 ROW_FORMAT=FIXED CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_chewei`;

CREATE TABLE `lbs_chewei` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `userid` INTEGER(11)
DEFAULT NULL, `name` VARCHAR(20) COLLATE utf8_general_ci DEFAULT NULL, `status` TINYINT(4)
DEFAULT '0', `update_time` DATETIME DEFAULT NULL, PRIMARY KEY (`id`) )ENGINE=MyISAM
AUTO_INCREMENT=9 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_chewei_apply`;

CREATE TABLE `lbs_chewei_apply` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `chewei_id`
INTEGER(11) DEFAULT NULL, `apply_userid` INTEGER(11) DEFAULT NULL, `apply_time` DATETIME
DEFAULT NULL, `apply_status` TINYINT(4) DEFAULT '1', `verify_status` TINYINT(4) DEFAULT
'0', `verify_time` DATETIME DEFAULT NULL, PRIMARY KEY (`id`) )ENGINE=MyISAM
AUTO_INCREMENT=7 ROW_FORMAT=FIXED CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_feed`;

CREATE TABLE `lbs_feed` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `userid` INTEGER(11)
DEFAULT NULL, `content` MEDIUMTEXT, `update_time` DATETIME DEFAULT NULL, `reply` TEXT
COLLATE utf8_general_ci, `type` TINYINT(4) DEFAULT '0', PRIMARY KEY (`id`) )ENGINE=MyISAM
AUTO_INCREMENT=5 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_member`;

CREATE TABLE `lbs_member` ( `xpos` DECIMAL(20,8) DEFAULT NULL, `ypos` DECIMAL(20,8)
DEFAULT NULL, `userid` INTEGER(11) NOT NULL AUTO_INCREMENT, `username` VARCHAR(64) COLLATE
utf8_general_ci DEFAULT NULL, `password` VARCHAR(64) COLLATE utf8_general_ci DEFAULT NULL,
`qianming` TEXT COLLATE utf8_general_ci, `sex` TINYINT(4) DEFAULT '1', `b_date` DATE
DEFAULT NULL, `regdate` DATETIME DEFAULT NULL, `aihao` TEXT COLLATE utf8_general_ci,
`zhiye` TEXT COLLATE utf8_general_ci, `gongsi` TEXT COLLATE utf8_general_ci, `xuexiao`
TEXT COLLATE utf8_general_ci, `difang` TEXT COLLATE utf8_general_ci, `zhuye` TEXT COLLATE
utf8_general_ci, `email` VARCHAR(64) COLLATE utf8_general_ci DEFAULT NULL, `update_time`
DATETIME DEFAULT NULL, `status` TINYINT(4) DEFAULT '1', `pic` VARCHAR(64) COLLATE
utf8_general_ci DEFAULT NULL, `startposx` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '0',
`startposy` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '0', `endposx` VARCHAR(20) COLLATE
utf8_general_ci DEFAULT '0', `endposy` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '0',
`startposname` TEXT COLLATE utf8_general_ci, `endposname` TEXT COLLATE utf8_general_ci,
`startoff_time` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '', `backoff_time` VARCHAR(20)
COLLATE utf8_general_ci DEFAULT '', `restday` VARCHAR(20) COLLATE utf8_general_ci DEFAULT
'', `req_sex` CHAR(1) COLLATE utf8_general_ci DEFAULT '0', `req_smoke` CHAR(1) COLLATE
utf8_general_ci DEFAULT '0', `req_fee` CHAR(1) COLLATE utf8_general_ci DEFAULT '0',
`req_peoples` CHAR(1) COLLATE utf8_general_ci DEFAULT '3', `sina_weibo_id` VARCHAR(20)
COLLATE utf8_general_ci DEFAULT '', `renren_id` VARCHAR(20) COLLATE utf8_general_ci
DEFAULT '', `douban_id` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '', `zuojia`
VARCHAR(32) COLLATE utf8_general_ci DEFAULT '', `jialing` TINYINT(4) DEFAULT '0', `weihao`
VARCHAR(20) COLLATE utf8_general_ci DEFAULT '', `membertype` TINYINT(4) DEFAULT '0',
`state` TINYINT(4) DEFAULT '0', PRIMARY KEY (`userid`) )ENGINE=MyISAM AUTO_INCREMENT=155
CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_myfriends`;

CREATE TABLE `lbs_myfriends` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `userid`
INTEGER(11) DEFAULT NULL, `fid` INTEGER(11) DEFAULT NULL, `update_time` DATETIME DEFAULT
NULL, `status` TINYINT(4) DEFAULT '1', PRIMARY KEY (`id`) )ENGINE=MyISAM AUTO_INCREMENT=73
ROW_FORMAT=FIXED CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_photo`;

CREATE TABLE `lbs_photo` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `userid` INTEGER(11)
DEFAULT NULL, `x_pic` VARCHAR(64) COLLATE utf8_general_ci DEFAULT NULL, `d_pic`
VARCHAR(64) COLLATE utf8_general_ci DEFAULT NULL, `showorder` TINYINT(4) DEFAULT '1',
PRIMARY KEY (`id`) )ENGINE=MyISAM AUTO_INCREMENT=70 CHARACTER SET 'utf8' COLLATE
'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_post`;

CREATE TABLE `lbs_post` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `sender_id`
INTEGER(11) DEFAULT NULL, `update_time` DATETIME DEFAULT NULL, `recver_id` INTEGER(11)
DEFAULT NULL, `content` TEXT COLLATE utf8_general_ci, `title` VARCHAR(64) COLLATE
utf8_general_ci DEFAULT NULL, `pic` VARCHAR(64) COLLATE utf8_general_ci DEFAULT '', `map`
VARCHAR(64) COLLATE utf8_general_ci DEFAULT '', `type` TINYINT(1) DEFAULT '0', `distance`
VARCHAR(20) COLLATE utf8_general_ci DEFAULT '', `sound` VARCHAR(64) COLLATE
utf8_general_ci DEFAULT '', `state` TINYINT(4) DEFAULT '0', PRIMARY KEY (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=76 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

DROP TABLE IF EXISTS `lbs_reply`;

CREATE TABLE `lbs_reply` ( `id` INTEGER(11) NOT NULL AUTO_INCREMENT, `post_id` INTEGER(11)
DEFAULT NULL, `recver_id` INTEGER(11) DEFAULT NULL, `update_time` DATETIME DEFAULT NULL,
`title` VARCHAR(64) COLLATE utf8_general_ci DEFAULT NULL, `content` TEXT COLLATE
utf8_general_ci, `sender_id` INTEGER(11) DEFAULT NULL, `pic` VARCHAR(64) COLLATE
utf8_general_ci DEFAULT '', `map` VARCHAR(64) COLLATE utf8_general_ci DEFAULT '', `type`
TINYINT(1) DEFAULT '0', `distance` VARCHAR(20) COLLATE utf8_general_ci DEFAULT '', `sound`
VARCHAR(64) COLLATE utf8_general_ci DEFAULT '', `state` TINYINT(4) DEFAULT '0', PRIMARY
KEY (`id`) )ENGINE=MyISAM AUTO_INCREMENT=77 CHARACTER SET 'utf8' COLLATE
'utf8_general_ci';

DROP FUNCTION IF EXISTS `uFn_CalcuDistance`;

delimiter //

CREATE FUNCTION `uFn_CalcuDistance`(lat1 NUMERIC(20,8),lng1 NUMERIC(20,8),lat2
NUMERIC(20,8),lng2 NUMERIC(20,8),unit VARCHAR(2)) RETURNS decimal(20,8) NOT DETERMINISTIC
CONTAINS SQL SQL SECURITY DEFINER COMMENT '' BEGIN
DECLARE pi80 FLOAT;
DECLARE r FLOAT;

DECLARE dlat FLOAT;
 DECLARE dlng FLOAT;
 DECLARE a FLOAT;
 DECLARE c FLOAT;
 DECLARE km
NUMERIC(20,10);
 DECLARE _lat1 FLOAT;
 DECLARE _lng1 FLOAT;
 DECLARE _lat2 FLOAT;
 DECLARE
_lng2 FLOAT;
 SET pi80 = PI() / 180;
 SET _lat1 = lat1 * pi80;
 SET _lng1 = lng1 * pi80;

SET _lat2 = lat2 * pi80;
 SET _lng2 = lng2 * pi80;
 SET r = 6372.797;
 SET dlat = _lat2 -
_lat1;
 SET dlng = _lng2 - _lng1;
 SET a = sin(dlat / 2) * sin(dlat / 2) + cos(_lat1) *
cos(_lat2) * sin(dlng / 2) * sin(dlng / 2);
 SET c = 2 * atan2(sqrt(a), sqrt(1 - a));
 SET
km = r * c;
 IF (unit='m') THEN
   RETURN (km * 1000);
 ELSEIF(unit='km')THEN
   RETURN
km;
 ELSEIF(unit='mi')THEN
 RETURN (km * 0.621371192);
 ELSE
 RETURN km;
 END IF;
END;
//
delimiter ;


DROP FUNCTION IF EXISTS `getDistance`;
delimiter //

CREATE FUNCTION `getDistance`(i_user_id INTEGER(11),
i_other_user_id INTEGER(11)) RETURNS decimal(20,8) NOT DETERMINISTIC CONTAINS SQL SQL
SECURITY DEFINER COMMENT '' BEGIN
  declare user_xpos,user_ypos decimal(20,8);
  declare
other_user_xpos,other_user_ypos decimal(20,8);
  declare retstr decimal(20,8);
  select
xpos,ypos into user_xpos,user_ypos 
  from lbs_member
  where userid=i_user_id;
  
 
select xpos,ypos into other_user_xpos,other_user_ypos 
  from lbs_member
  where
userid=i_other_user_id;
  
  select
`uFn_CalcuDistance`(user_xpos,user_ypos,other_user_xpos,other_user_ypos,'m')
  into
retstr;
  RETURN retstr;
END;
//
delimiter ;


DROP FUNCTION IF EXISTS `getUserName`;
delimiter //

CREATE FUNCTION `getUserName`(uid INTEGER(11)) RETURNS
varchar(64) CHARSET gbk NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER COMMENT ''
BEGIN
  declare s_name varchar(64);                                  
  set names gbk;
 
select username into s_name from lbs_member where userid=uid;
  RETURN s_name;
END;
//
delimiter ;


DROP FUNCTION IF EXISTS `getUserPic`;
delimiter //

CREATE FUNCTION `getUserPic`(user_id INTEGER(11)) RETURNS
varchar(256) CHARSET gbk NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER COMMENT ''
BEGIN
  declare s_name VARCHAR(256);
  select pic into s_name from lbs_member 
  where
userid=user_id;
  RETURN s_name;
END;
//
delimiter ;


DROP PROCEDURE IF EXISTS `del_user`;
delimiter //

CREATE PROCEDURE `del_user`(IN user_name VARCHAR(32)) NOT
DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER COMMENT '' BEGIN
declare s_userid
varchar(32);
select userid into s_userid from lbs_member where username=user_name;
delete
from lbs_member where userid=s_userid;
delete from lbs_myfriends where
userid=s_userid;
delete from lbs_photo where userid=s_userid;
delete from lbs_post where
sender_id=s_userid or recver_id=s_userid;
delete from lbs_reply where sender_id=s_userid
or recver_id=s_userid;
delete from lbs_bbs where userid=s_userid;
delete from
lbs_blacklist where userid=s_userid;
delete from lbs_chewei where userid=s_userid;
delete
from lbs_chewei_apply where userid=s_userid;

commit;
    
END;
//
delimiter ;



INSERT INTO `lbs_blacklist` (`id`, `userid`, `black_userid`, `update_time`, `flag`) VALUES
(8,151,143,'2012-07-16 17:17:04',1), (9,151,147,'2012-07-16 17:27:04',1); COMMIT;

INSERT INTO `lbs_member` (`xpos`, `ypos`, `userid`, `username`, `password`, `qianming`,
`sex`, `b_date`, `regdate`, `aihao`, `zhiye`, `gongsi`, `xuexiao`, `difang`, `zhuye`,
`email`, `update_time`, `status`, `pic`, `startposx`, `startposy`, `endposx`, `endposy`,
`startposname`, `endposname`, `startoff_time`, `backoff_time`, `restday`, `req_sex`,
`req_smoke`, `req_fee`, `req_peoples`, `sina_weibo_id`, `renren_id`, `douban_id`,
`zuojia`, `jialing`, `weihao`, `membertype`, `state`) VALUES
(28.14536100,112.93303700,141,'wisheo','1111','',2,'1997-07-09','2012-07-09
20:38:19','','','','','','','wisheo@126.com','2012-07-18
21:08:23',1,'upload/no.jpg','28.141519','112.939281','28.140289','112.972026','
中国湖南省长沙市岳麓区黄鹤路','中国湖南省长沙市天心区新开铺路131号 邮政编码:
410009','07:30','18:00','','0','0','0','3','','','','',0,'',0,2),
(28.14465800,112.93341100,143,'1490724','1111','',1,'1995-07-10','2012-07-10
20:38:42','','','','','','','1490724@qq.com','2012-07-16
14:43:19',1,'upload/thumb_20120710-123926-227image.jpg','28.223075','112.942135','28.
188849','113.025455','中国湖南省长沙市岳麓区银双路176号-222号','中国湖南省长沙市芙蓉区马王堆中路162号','07:00','18:00','','
0','0','0','3','','','','',0,'',1,1),
(0.00000000,0.00000000,144,'马克思','qwer','',1,'1974-07-09','2012-07-11
13:44:15','','','','','','','max@iplayfun.com','2012-07-11
13:46:01',1,'upload/thumb_20120711-054601-884image.jpg','0','0','0','0','','','','','','0'
,'0','0','3','','','','',0,'',0,0),
(40.01309800,116.46579000,145,'pretty','628628','',2,'1990-06-28','2012-07-11
14:00:46','','','','','','','1241931437@qq.com','2012-07-13
12:57:02',1,'upload/thumb_20120711-060220-162image.jpg','40.044963','116.470420','39.
905623','116.630063','中国北京市朝阳区奶西村','中国北京市通州区五里店西路2号','08:00','18:00','','1','0','0','3',''
,'','','',0,'',0,1),
(40.01335300,116.46583200,146,'Bob','64398018','',1,'1975-01-19','2012-07-11
14:14:14','','','','','','','Bobsha@126.com','2012-07-11
15:47:56',1,'upload/thumb_20120711-061522-871image.jpg','0','0','0','0','','','','','','0'
,'0','0','3','','','','',0,'',0,0), (40.01330400,116.46594500,147,'Bob163','64398018','I
like play games',1,'1974-12-08','2012-07-11
14:35:01','','IT','Iplayfun','北航','望京','','Bobsha@163.com','2012-07-11
16:28:25',1,'upload/thumb_20120711-063648-749image.jpg','40.013771','116.471852','39.
905597','116.624095','中国北京市朝阳区屏翠西路9号','中国北京市通州区京通快速路辅路','07:30','18:30','','0','0','0','3'
,'','','','CRV',5,'6',0,1),
(28.21765200,112.88786900,148,'gawkk','1111','',1,'1990-07-11','2012-07-11
15:44:04','','','','','','','gawkk@126.com','2012-07-11
16:03:25',1,'upload/20120711-074442-909image.jpg','0','0','0','0','','','','','','0','0','
0','3','','','','',0,'',0,0),
(28.21775900,112.88800500,149,'tianxiahui','1111','',2,'1996-07-11','2012-07-11
15:52:30','','','','','','','tianxiahui@gmail.com','2012-07-11
15:53:24',1,'upload/20120711-075304-312image.jpg','0','0','0','0','','','','','','0','0','
0','3','','','','',0,'',0,0),
(0.00000000,0.00000000,150,'投影仪','1111','',1,'1994-08-11','2012-07-11
17:56:36','','','','','','','wishe@126.com','2012-07-11
17:57:02',1,'upload/no.jpg','0','0','0','0','','','','','','0','0','0','3','','','','',0,'
',0,0), (37.78583400,-122.40641700,151,'wang yi','123456','',1,'1987-06-02','2012-07-12
17:33:21','','','','','','','wangyi2652683@163.com','2012-07-18
11:10:33',1,'upload/no.jpg','0','0','0','0','','','','','','0','0','0','3','','','','',0,'
',0,0), (0.00000000,0.00000000,152,'','123456','',1,'1990-01-01','2012-07-17
16:53:27','','','','','','','343178660@163.com',NULL,1,'upload/no.jpg','0','0','0','0','',
'','','','','0','0','0','3','','','','',0,'',0,0),
(0.00000000,0.00000000,153,'','123456','',1,'1990-01-01','2012-07-17
16:59:07','','','','','','','12345@163.com',NULL,1,'upload/no.jpg','0','0','0','0','','','
','','','0','0','0','3','','','','',0,'',0,0),
(0.00000000,0.00000000,154,'','111111','',1,'1990-01-01','2012-07-17
17:02:53','','','','','','','222@163.com',NULL,1,'upload/no.jpg','0','0','0','0','','','',
'','','0','0','0','3','','','','',0,'',0,0); COMMIT;

INSERT INTO `lbs_myfriends` (`id`, `userid`, `fid`, `update_time`, `status`) VALUES
(43,140,141,'2012-07-09 21:26:12',1), (44,140,142,'2012-07-10 17:58:46',1),
(45,140,143,'2012-07-11 13:40:23',1), (47,147,145,'2012-07-11 15:02:08',1),
(48,147,146,'2012-07-11 15:07:26',1), (50,143,146,'2012-07-11 18:27:18',1),
(51,143,148,'2012-07-11 18:38:52',1), (52,143,147,'2012-07-12 06:42:56',1),
(53,145,147,'2012-07-12 10:55:03',1), (55,140,144,'2012-07-12 15:03:37',1),
(56,145,146,'2012-07-12 15:25:32',1), (61,145,141,'2012-07-12 15:44:07',1),
(63,145,140,'2012-07-13 09:44:41',1), (68,140,145,'2012-07-13 14:08:45',1),
(70,143,140,'2012-07-15 20:32:44',1), (71,151,141,'2012-07-16 17:14:10',1),
(72,141,151,'2012-07-18 20:52:54',1); COMMIT;

INSERT INTO `lbs_photo` (`id`, `userid`, `x_pic`, `d_pic`, `showorder`) VALUES
(1,0,'upload/no.jpg','upload/no.jpg',1),
(57,143,'upload/thumb_20120710-123926-227image.jpg','upload/20120710-123926-227image.jpg',
1),
(58,144,'upload/thumb_20120711-054601-884image.jpg','upload/20120711-054601-884image.jpg',
1),
(59,140,'upload/thumb_20120711-054736-636image.jpg','upload/20120711-054736-636image.jpg',
1),
(60,145,'upload/thumb_20120711-060220-162image.jpg','upload/20120711-060220-162image.jpg',
1),
(61,146,'upload/thumb_20120711-061522-871image.jpg','upload/20120711-061522-871image.jpg',
1),
(62,147,'upload/thumb_20120711-063648-749image.jpg','upload/20120711-063648-749image.jpg',
1),
(63,147,'upload/thumb_20120711-063700-960image.jpg','upload/20120711-063700-960image.jpg',
1),
(64,147,'upload/thumb_20120711-063712-963image.jpg','upload/20120711-063712-963image.jpg',
1),
(65,148,'upload/20120711-074442-909image.jpg','upload/20120711-074442-909image.jpg',1),
(66,149,'upload/20120711-075304-312image.jpg','upload/20120711-075304-312image.jpg',1),
(67,145,'upload/20120713-052457-373image.jpg','upload/20120713-052457-373image.jpg',1),
(68,145,'upload/20120713-052614-691image.jpg','upload/20120713-052614-691image.jpg',1),
(69,140,'upload/20120713-064907-662image.jpg','upload/20120713-064907-662image.jpg',1);
COMMIT;

INSERT INTO `lbs_post` (`id`, `sender_id`, `update_time`, `recver_id`, `content`, `title`,
`pic`, `map`, `type`, `distance`, `sound`, `state`) VALUES (43,141,'2012-07-15
20:38:18',143,'你好，1490724',NULL,'','',0,'8.71655360','',1), (44,151,'2012-07-16
17:13:27',141,'点点滴滴',NULL,'','',0,'10695421.07998770','',1); COMMIT;

INSERT INTO `lbs_reply` (`id`, `post_id`, `recver_id`, `update_time`, `title`, `content`,
`sender_id`, `pic`, `map`, `type`, `distance`, `sound`, `state`) VALUES
(74,43,141,'2012-07-15 22:16:38',NULL,'回复wisheo',143,'','',0,'5.69315100','',1),
(75,43,151,'2012-07-15
22:25:41',NULL,'',141,'upload/20120715-142541-965temp.png','',1,'5.79762510','',1),
(76,44,151,'2012-07-15
22:43:10',NULL,NULL,141,'upload/20120715-144310-321temp.png','',1,'1.01284840','',1);
COMMIT;

