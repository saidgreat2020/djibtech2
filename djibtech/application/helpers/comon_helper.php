<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function public_url ($url=''){

    return base_url('assets/'.$url);
}