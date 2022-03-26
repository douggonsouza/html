<?php

namespace douggonsouza\pages;

use douggonsouza\pages\tags\tagsInterface;

abstract class bookmark
{
    protected $tag;
    
    /**
     * Exporta string da tag
     *
     * @param tagsInterface $tag
     * 
     * @return string
     * 
     */
    public static function tag(tagsInterface $tag)
    {
        self::setTag($tag);
        return self::getTag();
    }

    /**
     * Get the value of tag
     */ 
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set the value of tag
     *
     * @return  self
     */ 
    public function setTag($tag)
    {
        if(isset($tag) && !empty($tag)){
            $this->tag = $tag;
        }

        return $this;
    }
}

?>