<?php
    $xtp = new XTemplate('views/huongdan/hethong.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');