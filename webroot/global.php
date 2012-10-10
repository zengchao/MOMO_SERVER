<?php



//设置安装服务器程序必要信息
define('DBHOST','localhost');//安装服务器数据所在的位置 一般为localhost   **非常重要，必须填写**
define('DBUSER','root');//服务器系统数据库用户账号   **非常重要，必须填写**
define('DBPWD','bjjtgl');//服务器系统数据库密码 **非常重要,必须填写，如果没有则默认为没有密码**
define('DBNAME','demo');//安装服务器系统所在数据库 **非常重要，必须填写**
define('DBCHARSET','utf8');//连接操作数据库所使用的编码  **非常重要，必须填写**

define('SYSTEM_ADMINID','admin');//服务器系统默认管理员    安装前请修改此参数，此参数将会作为后台管理员账号   **非常重要，必须填写**
define('SYSTEM_ADMINPWD','admin');//服务器系统默认管理员密码  安装前请修改此参数 ，此参数将会作为后台管理员密码  **非常重要，必须填写**


//登录注册模块
define('LOGIN_SUCCESS',20010);//登录成功
define('LOGIN_UNREGISTE_FAILD',20011);//登录失败，用户名id不存在
define('LOGIN_FAILD',20013);//登录失败，密码错误
define('REGISTE_SUCCESS',20014);//注册成功
define('REGISTE_FAILD',20015);//身份证id已经被注册
define('REGISTE_FAILD_SERVER_BUSY',20016);//服务器繁忙,注册失败

define('DING_PIAO_COUNT_FALSE_TYPE',30011);//数据冲突
define('DING_PIAO_SERVER_FAILD_TYPE',30012);//服务器更新用户订票信息失败
define('DING_PIAO_SUCCESS',30013);//订票成功
define('DING_PIAO_UPDATE_FAILD',30014);//订票失败

//查询操作
define('QUERY_ALL_RESULT',40009);//返回所有票类信息
define('QUERY_BY_USER_ID',40010);//按照用户ID查询用户所有订票信息
define('QUERY_BY_TICKET_ID',40011);//按照票ID查询剩余票信息
define('QUERY_BY_TICKET_TYPE',40012);//按照票类型查询剩余票信息
define('QUERY_BY_TICKET_PRICE',40013);//按照票价查询剩余票信息
define('QUERY_BY_TICKET_POSITION',40014);//按照票的位置查询剩余票信息
define('QUERY_BY_USER_ID_AND_TICKET_ID',40015);//按照用户ID和票ID查询用户订票信息（暂不支持）
define('QUERY_BY_USER_ID_AND_TICKET_TYPE',40016);//按照用户ID和票类型查询用户订票信息（暂不支持）
define('QUERY_BY_USER_ID_AND_TICKET_PRICE',40017);//按照用户ID和票价格查询用户订票信息（暂不支持）
define('QUERY_BY_USER_ID_AND_TICKET_POSITION',40018);//按照用户ID和票位置来查询用户订票信息（暂不支持）
define('QUERY_BY_TICKET_TYPE_AND_TICKET_PRICE',40019);//按照票类型和票价来查询剩余票信息（暂不支持）
define('QUERY_BY_TICKET_TYPE_AND_TICKET_POSITION',40020);//按照票类型和票位置来查询剩余票信息（暂不支持）
define('QUERY_BY_TICKET_PRICE_AND_TICKET_POSITION',40021);//按照票票价和票位置来查询剩余信息（暂不支持）
define('QUERY_BY_TICKET_TYPE_AND_TICKET_PRICE_AND_TICKET_POSITION',40022);//按照，票类型，票价，票位置来查询剩余票信息（暂不支持）
define('QUERY_RESULT_IS_NULL',40024);//查询结果为空
define('QUERY_FAILD',40023);//查询失败
define('QUERY_USERINFO_BY_USER_ID',40033);//使用用户ID查询用户信息
define('QUERY_USERINFO_BY_USER_NAME',40034);//使用用户名查询用户信息
define('QUERY_USERINFO_BY_USER_TYPE',40035);//使用用户类型查询用户信息
define('QUERY_ALL_USERINFO',40036);//返回所有用户信息
define('QUERY_NOTI_BY_NOTI_TYPE',56666);//根据通知类型来查询通知

define('QUERY_SERVER_NOTI_UPDATE_TIME',50003);//查询服务器通知最后更新时间
define('SEVER_UPDATE_IS_EQUAL',50004);//客户端服务器更新时间一致
define('SEVER_UPDATE_IS_NEW',50005);//客户端需要更新
define('QUERY_NEW_NOTI_TYPE',50001);//查询最新更新过的通知
define('QUERY_NEW_NOTI_FAILD',50002);//查询最新通知失败

//退订操作
define('TUI_DING_SUCCESS',50010);//退订成功
define('TUI_DING_SERVER_BUSY_FAILD',50011);//服务器繁忙，退订失败
define('TUI_DING_FAILD',50012);//退订失败

//管理员录入信息
define('ADMIN_INPUT_SUCCESS',60010);//录入成功
define('ADMIN_INPUT_FAILD',60011);//录入失败

define('DELETE_BY_USER_ID',77700);//按用户ID删除用户
define('DELETE_BY_USER_NAME',77701);//按用户名删除用户
define('DELETE_BY_TICKET_ID',77702);//按票ID删除票信息
define('DELETE_BY_NOTI_ID',77703);//按通知ID删除

define('UPDATE_WITH_USER_ID',88806);//使用用户ID来更新
define('UPDATE_WITH_USER_NAME',88807);//使用用户名来更新
define('UPDATE_WITH_TICKET_ID',88808);//使用票ID来更新
define('UPDATE_USER_NAME',88800);//更新用户名
define('UPDATE_TICKET_ID',88801);//更新票ID
define('UPDATE_TICKET_TYPE',88802);//更新票类型
define('UPDATE_TICKET_PRICE',88803);//更新票价格
define('UPDATE_TICKET_POSITION',88804);//更新票位置
define('UPDATE_TICKET_COUNT',88805);//更新票数量

define('NOTI_TYPE_NOTI',666000);//通知
define('NOTI_TYPE_MEETING',666003);//会议
define('NOTI_TYPE_GONGGAO',666001);//公告
define('NOTI_TYPE_GONGXI',666002);//恭喜
define('NOTI_TYPE_JINJI',666005);//紧急
define('NOTI_TYPE_JINGGAO',666004);//警告
define('NOTI_TYPE_QITA',666006);//其他

//验证成为ZYProSoft团队成员
define('CHECK_BECOME_ZYPROSOFTER',88888);//验证成为ZYProSoft团队成员
define('CHECK_CODE_IS_FAULT',99997);//验证码错误
define('UPDATE_USERINFO_FAILD',99998);//更新用户信息失败
define('ZYPROSOFTER_CHECK_SUCCESS',99999);//认证成功

//服务器更新类型
define('SERVER_UPDATE_INFO_FAILD',77771);//获取服务器更新时间戳失败


//安装信息反馈
define('INSTALL_FAILD_CREATETABLE_USER',555885);//创建user表失败
define('INSTALL_FAILD_CREATETABLE_TICKET',555886);//创建ticket表失败
define('INSTALL_FAILD_CREATETABLE_OPERATION',555887);//创建operation表失败
define('INSTALL_FAILD_CREATETABLE_ADMIN',555888);//创建admin表失败
define('INSTALL_FAILD_CREATETABLE_ABOUT',555889);//创建About表失败
define('INSTALL_TICKET_SYSTEM_SERVER_SUCCESS',555890);//安装系统成功

?>