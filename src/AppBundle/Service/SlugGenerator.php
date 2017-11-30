<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 27/11/17
 * Time: 11:56
 */

namespace AppBundle\Service;


class SlugGenerator
{
    public function generate(string $input) :string
    {
        $slug = preg_replace('/[^\w-\s]/', '', $input);
        $input = strtolower(trim($slug));
        $slug = preg_replace('/\s/', '-', $input);
        return $slug;
    }
}