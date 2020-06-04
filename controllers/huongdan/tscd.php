<?php
    $xtp = new XTemplate('views/huongdan/tscd.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');