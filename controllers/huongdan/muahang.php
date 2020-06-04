<?php
    $xtp = new XTemplate('views/huongdan/muahang.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');