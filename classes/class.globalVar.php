<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smccard
 * Date: 8/6/13
 * Time: 1:14 AM
 * To change this template use File | Settings | File Templates.
 */


class globalVar {

    protected $_title = 'Portfolio of Steve McCard';

    public function displayTitle(){
        return $this->_title;
    }

}
