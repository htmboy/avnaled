<?php

function pin(String $string) {
    return implode(pinyin($string, PINYIN_KEEP_ENGLISH));
}