<?php

namespace site\_faux;

use Kirby\Cms\File;
use Kirby\Cms\Page;

class CustomPage extends Page
{
    public string $headline;
    public string $subheadline;
    public string $layout;
    public string $address;
    public string $phone;
    public string $email;
    public string $social;
    public string $text;
    public $date;
    public File $cover;


}