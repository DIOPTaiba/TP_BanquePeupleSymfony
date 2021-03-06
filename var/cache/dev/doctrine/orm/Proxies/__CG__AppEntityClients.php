<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Clients extends \App\Entity\Clients implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'responsableCompte', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'dateInscription', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'typeClient', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientMoral', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientNonSalarie', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientSalarie', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'comptes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'responsableCompte', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'dateInscription', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'typeClient', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientMoral', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientNonSalarie', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'clientSalarie', '' . "\0" . 'App\\Entity\\Clients' . "\0" . 'comptes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Clients $proxy) {
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
    public function getResponsableCompte(): ?\App\Entity\ResponsableCompte
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsableCompte', []);

        return parent::getResponsableCompte();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsableCompte(?\App\Entity\ResponsableCompte $responsableCompte): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsableCompte', [$responsableCompte]);

        return parent::setResponsableCompte($responsableCompte);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephone): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateInscription(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateInscription', []);

        return parent::getDateInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateInscription(\DateTimeInterface $dateInscription): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateInscription', [$dateInscription]);

        return parent::setDateInscription($dateInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeClient(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeClient', []);

        return parent::getTypeClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeClient(string $typeClient): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeClient', [$typeClient]);

        return parent::setTypeClient($typeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientMoral(): ?\App\Entity\ClientMoral
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientMoral', []);

        return parent::getClientMoral();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientMoral(\App\Entity\ClientMoral $clientMoral): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientMoral', [$clientMoral]);

        return parent::setClientMoral($clientMoral);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientNonSalarie(): ?\App\Entity\ClientNonSalarie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientNonSalarie', []);

        return parent::getClientNonSalarie();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientNonSalarie(\App\Entity\ClientNonSalarie $clientNonSalarie): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientNonSalarie', [$clientNonSalarie]);

        return parent::setClientNonSalarie($clientNonSalarie);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientSalarie(): ?\App\Entity\ClientSalarie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientSalarie', []);

        return parent::getClientSalarie();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientSalarie(\App\Entity\ClientSalarie $clientSalarie): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientSalarie', [$clientSalarie]);

        return parent::setClientSalarie($clientSalarie);
    }

    /**
     * {@inheritDoc}
     */
    public function getComptes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComptes', []);

        return parent::getComptes();
    }

    /**
     * {@inheritDoc}
     */
    public function addCompte(\App\Entity\Comptes $compte): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCompte', [$compte]);

        return parent::addCompte($compte);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCompte(\App\Entity\Comptes $compte): \App\Entity\Clients
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCompte', [$compte]);

        return parent::removeCompte($compte);
    }

}
