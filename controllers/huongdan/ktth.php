<?php
    $xtp = new XTemplate('views/huongdan/ktth.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');