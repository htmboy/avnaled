#!/bin/bash

# 导入 .env  环境变量
source ./.env
# 要备份的表
tables="avna_article avna_article_category avna_carousel avna_index_article avna_index_product avna_links avna_product avna_product_category avna_product_cover avna_product_gallery avna_setting avna_user"
# 执行备份
mysqldump --host="${DB_HOST}" --port=${DB_PORT} --user="${DB_USERNAME}" --password="${DB_PASSWORD}" -t ${DB_DATABASE} ${tables} > ./avnaled.sql
