<?php

$submit_log = file_get_contents('./submit.log');

$submit_log = nl2br($submit_log);

echo '<html><head><meta charset="utf-8"><title>���û㱨�Զ�ִ�����LOG</title></head><body>';
echo '<h1>���û㱨�Զ�ִ�����LOG</h1>';
echo '<p style="color: #6667AB">' . '��վʵ��Դ�뼰���ü�'. '<a href="https://github.com/limonene0x/AutoCovid-19" target="_blank">Githubҳ��</a>' . '</p>';
echo '<p style="font-size: small">��վʵ��ԭ����2022��5��17�ո��£�ǰ�ڲ�����������δ���棬�ش˸�֪��</p>' . '<hr>';

echo '<p>' . $submit_log . '<p>';

echo '<hr><p style="color: #474747">Copyright &copy; 2022 Limonene0x</p>';
echo '</body></html>';
