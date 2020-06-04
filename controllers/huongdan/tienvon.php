<?php
    $xtp = new XTemplate('views/huongdan/tienvon.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');