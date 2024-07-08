<?php

// $cfg['Servers'][$i]['host']='localhost';
// $cfg['Servers'][$i]['user']='Banny';
// $cfg['Servers'][$i]['password']='@banny254';
// $cfg['Servers'][$i]['auth_type']='cookie';
GRANT ALL PRIVILAGES ON *.* TO 'root '@'localhost'
IDENTIFIED BY 'your_password'WITH GRANT OPTION;
FLUSH PRIVILAGES;
