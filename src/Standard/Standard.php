<?php

namespace Ababilithub\FlexPhpTrait\Standard;

use Ababilithub\FlexPhpTrait\Instance\Access\Access;
use Ababilithub\FlexPhpTrait\Instance\Instance;
USE Ababilithub\FlexPhpTrait\Asset\Asset;
use Ababilithub\FlexPhpTrait\Php\ArrayFunction\ArrayFunction;
use Ababilithub\FlexPhpTrait\Wordpress\Security\Sanitization\Sanitization;
use Ababilithub\FlexPhpTrait\Wordpress\Security\Validation\Validation;

trait Standard 
{
    use Instance, Asset, Access, Sanitization, Validation, ArrayFunction; 
}