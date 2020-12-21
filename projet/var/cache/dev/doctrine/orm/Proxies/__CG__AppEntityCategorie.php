<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categorie extends \App\Entity\Categorie implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeEmpruntMax', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeEmpruntMaxNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'nbEmpruntMax', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'nbEmpruntMaxNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'genres', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'articles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeEmpruntMax', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeEmpruntMaxNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'nbEmpruntMax', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'nbEmpruntMaxNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'dureeNouveaute', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'genres', '' . "\0" . 'App\\Entity\\Categorie' . "\0" . 'articles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categorie $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle(string $libelle): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeEmpruntMax(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeEmpruntMax', []);

        return parent::getDureeEmpruntMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setDureeEmpruntMax(int $dureeEmpruntMax): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeEmpruntMax', [$dureeEmpruntMax]);

        return parent::setDureeEmpruntMax($dureeEmpruntMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeEmpruntMaxNouveaute(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeEmpruntMaxNouveaute', []);

        return parent::getDureeEmpruntMaxNouveaute();
    }

    /**
     * {@inheritDoc}
     */
    public function setDureeEmpruntMaxNouveaute(int $dureeEmpruntMaxNouveaute): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeEmpruntMaxNouveaute', [$dureeEmpruntMaxNouveaute]);

        return parent::setDureeEmpruntMaxNouveaute($dureeEmpruntMaxNouveaute);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEmpruntMax(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEmpruntMax', []);

        return parent::getNbEmpruntMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEmpruntMax(int $nbEmpruntMax): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEmpruntMax', [$nbEmpruntMax]);

        return parent::setNbEmpruntMax($nbEmpruntMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEmpruntMaxNouveaute(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEmpruntMaxNouveaute', []);

        return parent::getNbEmpruntMaxNouveaute();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEmpruntMaxNouveaute(int $nbEmpruntMaxNouveaute): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEmpruntMaxNouveaute', [$nbEmpruntMaxNouveaute]);

        return parent::setNbEmpruntMaxNouveaute($nbEmpruntMaxNouveaute);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeNouveaute(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeNouveaute', []);

        return parent::getDureeNouveaute();
    }

    /**
     * {@inheritDoc}
     */
    public function setDureeNouveaute(int $dureeNouveaute): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeNouveaute', [$dureeNouveaute]);

        return parent::setDureeNouveaute($dureeNouveaute);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenres(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenres', []);

        return parent::getGenres();
    }

    /**
     * {@inheritDoc}
     */
    public function addGenre(\App\Entity\Genre $genre): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGenre', [$genre]);

        return parent::addGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGenre(\App\Entity\Genre $genre): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGenre', [$genre]);

        return parent::removeGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\App\Entity\Article $article): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Article $article): \App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

}
