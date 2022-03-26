<?php

namespace douggonsouza\pages\tags;

use douggonsouza\propertys\propertysInterface;

interface tagsInterface
{
    /**
     * Evento construtor da classe
     *
     * @param propertys $propertys
     * 
     */
    public function __construct(propertysInterface $propertys);

    /**
     * Exporta string da tag
     *
     * @return string
     * 
     */
    public function toString();

    /**
     * Set the value of propertys
     *
     * @return  self
     */ 
    public function setPropertys(propertysInterface $propertys);
}
?>