<?php

namespace Wolf\ScmCityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comuniAttivati
 */
class comuniAttivati
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $pathFrontImage;

    /**
     * @var string
     */
    private $pathFrontImageBlurred;

    /**
     * @var \DateTime
     */
    private $dataIns;
    public $frontImage;
    public $frontImageBlurred;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return comuniAttivati
     */
    public function setNome( $nome )
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set pathFrontImage
     *
     * @param string $pathFrontImage
     * @return comuniAttivati
     */
    public function setPathFrontImage( $pathFrontImage )
    {
        $this->pathFrontImage = $pathFrontImage;

        return $this;
    }

    /**
     * Get pathFrontImage
     *
     * @return string
     */
    public function getPathFrontImage()
    {
        return $this->pathFrontImage;
    }

    /**
     * Set pathFrontImageBlurred
     *
     * @param string $pathFrontImageBlurred
     * @return comuniAttivati
     */
    public function setPathFrontImageBlurred( $pathFrontImageBlurred )
    {
        $this->pathFrontImageBlurred = $pathFrontImageBlurred;

        return $this;
    }

    /**
     * Get pathFrontImageBlurred
     *
     * @return string
     */
    public function getPathFrontImageBlurred()
    {
        return $this->pathFrontImageBlurred;
    }

    /**
     * Set dataIns
     *
     * @param \DateTime $dataIns
     * @return comuniAttivati
     */
    public function setDataIns( $dataIns )
    {
        $this->dataIns = $dataIns;

        return $this;
    }

    /**
     * Get dataIns
     *
     * @return \DateTime
     */
    public function getDataIns()
    {
        return $this->dataIns;
    }

    /**
     * @ORM\PrePersist
     */
    public function setDataInsValue()
    {
        $this->dataIns = new \DateTime();
    }

}
