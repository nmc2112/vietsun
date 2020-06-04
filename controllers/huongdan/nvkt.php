<?php
    $xtp = new XTemplate('views/huongdan/nvkt.html');
    $xtp->assign('x','../');
    $xtp->parse('LICENSE');
    $acontent = $xtp->text('LICENSE');