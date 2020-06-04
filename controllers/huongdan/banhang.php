<?php
    $xtp = new XTemplate('views/huongdan/banhang.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');