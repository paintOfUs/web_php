<?php
Class Manga{
    private  $mangaId;
    private $mangaName;
    private $mangaDes;
    private $mangaAut;
    private $mangaImg;
    private $mangaType;
    
    
    function __construct($mangaName,$mangaDes, $mangaImg, $mangaType) {
        $this->mangaName = $mangaName;
        $this->mangaDes = $mangaDes;
        //$this->mangaAut = $mangaAut;
        $this->mangaImg = $mangaImg;
        $this->mangaType = $mangaType;
    }
    
    /**
     * @return mixed
     */
    public function getMangaId()
    {
        return $this->mangaId;
    }

    /**
     * @return mixed
     */
    public function getMangaName()
    {
        return $this->mangaName;
    }

    /**
     * @return mixed
     */
    public function getMangaDes()
    {
        return $this->mangaDes;
    }

    /**
     * @return mixed
     */
    public function getMangaAut()
    {
        return $this->mangaAut;
    }

    /**
     * @return mixed
     */
    public function getMangaImg()
    {
        return $this->mangaImg;
    }

    /**
     * @return mixed
     */
    public function getMangaType()
    {
        return $this->mangaType;
    }

    /**
     * @param mixed $mangaId
     */
    public function setMangaId($mangaId)
    {
        $this->mangaId = $mangaId;
    }

    /**
     * @param mixed $mangaName
     */
    public function setMangaName($mangaName)
    {
        $this->mangaName = $mangaName;
    }

    /**
     * @param mixed $mangaDes
     */
    public function setMangaDes($mangaDes)
    {
        $this->mangaDes = $mangaDes;
    }

    /**
     * @param mixed $mangaAut
     */
    public function setMangaAut($mangaAut)
    {
        $this->mangaAut = $mangaAut;
    }

    /**
     * @param mixed $mangaImg
     */
    public function setMangaImg($mangaImg)
    {
        $this->mangaImg = $mangaImg;
    }

    /**
     * @param mixed $mangaType
     */
    public function setMangaType($mangaType)
    {
        $this->mangaType = $mangaType;
    }

    
    
    
}
?>