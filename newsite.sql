# http://www.dhq898.com/
# 
# seo表
# 
# 首页
# 1，轮播图表
# 2，建议搜索词表
# 
# 产品中心
# 1，分类表
# 2，产品表
# 3，产品轮播图表
#
# 新闻中心
# 1，文章类目表
# 2，文章表
#
#
#
create database aooled_group;
-- 轮播图（单独）
create table aoo_carousel(
	id tinyint unsigned not null primary key auto_increment,
	domain_id tinyint unsigned not null,
	title varchar(255) not null,
	alt varchar(255) not null,
	site varchar(255) not null,
	link varchar(255) not null,
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
-- 友情链接（单独）
create table aoo_link(
	id tinyint unsigned not null primary key auto_increment,
	domain_id tinyint unsigned not null,
	name varchar(255) not null,
	link tinytext not null,
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
-- 产品分类（一对多产品）
create table aoo_product_category(
	id tinyint unsigned not null primary key auto_increment,
	map_id tinyint unsigned not null default 0,
	name varchar(255) not null,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
-- 产品 （一对多图片，多对一产品分类）
create table aoo_product(
	id tinyint unsigned not null primary key auto_increment,
	cat_id tinyint unsigned not null,
	seo_title varchar(128) not null,
	seo_keywords varchar(128) not null,
	seo_description varchar(255) not null,
	title varchar(255) not null,
	thumbnail varchar(255) not null,
	`number` varchar(255) not null,
	watts varchar(20) not null,
	size varchar(255) not null,
	color varchar(255) not null,
	package varchar(255) not null,
	weight varchar(255) not null,
	voltage varchar(255) not null,
	angle varchar(255) not null,
	waterproof varchar(255) not null,
	life varchar(255) not null,
	distance varchar(255) not null,
	material varchar(255) not null,
	characteristic varchar(255) not null,
	content longtext not null,
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null,
	cat_sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
-- 首页产品展现 （一对一产品）
create table aoo_index_product(
	id tinyint unsigned not null primary key auto_increment,
	domain_id tinyint unsigned not null,
	pro_id tinyint unsigned not null,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
-- 产品轮播图表（单独）
create table aoo_product_gallery(
	id tinyint unsigned not null primary key auto_increment,
	pro_id tinyint unsigned not null,
	gallery varchar(255) not null,
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
# 
# 
-- 文章类目（一对多文章）
# create table aoo_article_category(
# 	id tinyint unsigned not null primary key auto_increment,
# 	pid tinyint unsigned not null default 0,
# 	name varchar(255) not null,
# 	created_at timestamp not null,
# 	updated_at timestamp not null,
# 	is_show tinyint unsigned not null default 0,
# 	sort tinyint unsigned not null
# )engine=myisam default charset=utf8;
#
-- 文章首页展示（一对一文章）
create table aoo_index_article(
   id tinyint unsigned not null primary key auto_increment,
   art_id tinyint unsigned not null,
   sort tinyint unsigned not null
)engine=myisam default charset=utf8;
# 
-- 文章（单独）
create table aoo_article(
	id int unsigned not null primary key auto_increment,
	domain_id tinyint unsigned not null,
	map_id tinyint unsigned not null,
	seo_title varchar(128) not null,
	seo_keywords varchar(128) not null,
	seo_description varchar(255) not null,
	title varchar(255) not null,
	thumbnail varchar(255) not null,
	author varchar(255) not null,
	clicks tinyint unsigned not null,
	content longtext not null,
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null,
	cat_sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
create table aoo_search_word(
	id tinyint unsigned not null primary key auto_increment,
	domain_id tinyint unsigned not null,
	keyword varchar(255) not null,
	link varchar(255),
	created_at timestamp not null DEFAULT CURRENT_TIMESTAMP,
	updated_at timestamp not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	is_show tinyint unsigned not null,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;






-- 文章图表
# create table aoo_article_cover(
# 	id tinyint unsigned not null primary key auto_increment,
# 	art_id tinyint unsigned not null,
# 	title varchar(255) not null,
# 	alt varchar(255) not null,
# 	site varchar(255) not null,
# 	created_at timestamp not null,
# 	updated_at timestamp not null,
#     is_show tinyint unsigned not null,
# 	sort tinyint unsigned not null
# )engine=myisam default charset=utf8;

# create table aoo_user(
# 	id tinyint unsigned not null primary key auto_increment,
# 	username varchar(255) not null,
# 	password varchar(255) not null,
# 	remember_token varchar(100) not null,
# 	created_at timestamp not null,
# 	updated_at timestamp not null,
# 	active tinyint unsigned not null
# )engine=myisam default charset=utf8;

# create table aoo_setting(
# 	`key` varchar(255) not null,
# 	value varchar(255) not null,
# 	description varchar(255) not null,
# 	created_at timestamp not null,
# 	updated_at timestamp not null
# )engine=myisam default charset=utf8;
#############################
# 
# avna 仿站
# https://www.kibxg.com/