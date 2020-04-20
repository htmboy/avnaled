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
-- 轮播图表
create table avna_carousel(
	id tinyint unsigned not null primary key auto_increment,
	title varchar(255) not null,
	alt varchar(255) not null,
	site varchar(255) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
	is_show tinyint unsigned not null,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
-- 分类表
create table avna_product_category(
	id tinyint unsigned not null primary key auto_increment,
	name varchar(255) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
	is_show tinyint unsigned not null default 2,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
-- 产品表
create table avna_product(
	id tinyint unsigned not null primary key auto_increment,
	cat_id tinyint unsigned not null,
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
	content tinytext not null,
	created_at timestamp not null,
	updated_at timestamp not null,
	is_show tinyint unsigned not null,
	sort tinyint unsigned not null,
	cat_sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
-- 产品轮播图表
create table avna_product_gallery(
	id tinyint unsigned not null primary key auto_increment,
	pro_id tinyint unsigned not null,
	gallery varchar(255) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
	is_show tinyint unsigned not null default 0,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
# 
# 
-- 文章类目
create table avna_article_category(
	id tinyint unsigned not null primary key auto_increment,
	name varchar(255) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
  is_show tinyint unsigned not null,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;
# 
# 
-- 文章
create table avna_article(
	id int unsigned not null primary key auto_increment,
	cat_id tinyint unsigned not null,
	title varchar(255) not null,
	author varchar(255) not null,
	frequency tinyint unsigned not null, 
	content tinytext not null,
	created_at timestamp not null,
	updated_at timestamp not null,
    is_show tinyint unsigned not null,
	sort tinyint unsigned not null,
	cat_sort tinyint unsigned not null
)engine=myisam default charset=utf8;
#
#
-- 文章封面图表
create table avna_article_cover(
	id tinyint unsigned not null primary key auto_increment,
	art_id tinyint unsigned not null,
	title varchar(255) not null,
	alt varchar(255) not null,
	site varchar(255) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
    is_show tinyint unsigned not null,
	sort tinyint unsigned not null
)engine=myisam default charset=utf8;

create table avna_user(
	id tinyint unsigned not null primary key auto_increment,
	username varchar(255) not null,
	password varchar(255) not null,
	remember_token varchar(100) not null,
	created_at timestamp not null,
	updated_at timestamp not null,
	active tinyint unsigned not null
)engine=myisam default charset=utf8;
#############################
# 
# avna 仿站
# https://www.kibxg.com/