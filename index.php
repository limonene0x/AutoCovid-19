<?php

$submit_log = file_get_contents('./submit.log');

$submit_log = nl2br($submit_log);

echo '<html><head><meta charset="utf-8"><title>无用汇报自动执行情况LOG</title></head><body>';
echo '<h1>无用汇报自动执行情况LOG</h1>';
echo '<p style="color: #6667AB">' . '本站实现源码及配置见'. '<a href="https://github.com/limonene0x/AutoCovid-19" target="_blank">Github页面</a>' . '</p>';
echo '<p style="font-size: small">本站实现原理于2022年5月17日更新，前期测试运行数据未留存，特此告知。</p>' . '<hr>';

echo '<p>' . $submit_log . '<p>';

echo '<hr><p style="color: #474747">Copyright &copy; 2022 Limonene0x</p>';
echo '</body></html>';
