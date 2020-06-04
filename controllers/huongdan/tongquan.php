<?php
    $xtp = new XTemplate('views/huongdan/tongquan.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');