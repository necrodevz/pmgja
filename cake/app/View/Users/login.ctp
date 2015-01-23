<?php

echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form-inputs(array(
    'legend' => _('Login'),
    'username',
    'password'
));
echo $this->Form-end('Login');