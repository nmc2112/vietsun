<?php
    $xtp = new XTemplate('views/huongdan/khohang.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');