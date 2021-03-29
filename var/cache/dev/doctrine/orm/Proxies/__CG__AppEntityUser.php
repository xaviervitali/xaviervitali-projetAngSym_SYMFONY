<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'children', '' . "\0" . 'App\\Entity\\User' . "\0" . 'emailNotification', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registeredAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'granted', '' . "\0" . 'App\\Entity\\User' . "\0" . 'article', '' . "\0" . 'App\\Entity\\User' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'about', '' . "\0" . 'App\\Entity\\User' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fileUploads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'contacts'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'children', '' . "\0" . 'App\\Entity\\User' . "\0" . 'emailNotification', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registeredAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'granted', '' . "\0" . 'App\\Entity\\User' . "\0" . 'article', '' . "\0" . 'App\\Entity\\User' . "\0" . 'comments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'about', '' . "\0" . 'App\\Entity\\User' . "\0" . 'likes', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fileUploads', '' . "\0" . 'App\\Entity\\User' . "\0" . 'contacts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren(array $children): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailNotification(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailNotification', []);

        return parent::getEmailNotification();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailNotification(?bool $emailNotification): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailNotification', [$emailNotification]);

        return parent::setEmailNotification($emailNotification);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegisteredAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegisteredAt', []);

        return parent::getRegisteredAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegisteredAt(\DateTimeInterface $registeredAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegisteredAt', [$registeredAt]);

        return parent::setRegisteredAt($registeredAt);
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
    public function addArticle(\App\Entity\Article $article): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Article $article): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function getGranted(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGranted', []);

        return parent::getGranted();
    }

    /**
     * {@inheritDoc}
     */
    public function setGranted(?bool $granted): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGranted', [$granted]);

        return parent::setGranted($granted);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticle(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticle', []);

        return parent::getArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function getComments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\App\Entity\Comment $comment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\App\Entity\Comment $comment): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbout(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbout', []);

        return parent::getAbout();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbout(?string $about): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbout', [$about]);

        return parent::setAbout($about);
    }

    /**
     * {@inheritDoc}
     */
    public function getLikes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLikes', []);

        return parent::getLikes();
    }

    /**
     * {@inheritDoc}
     */
    public function addLike(\App\Entity\Like $like): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLike', [$like]);

        return parent::addLike($like);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLike(\App\Entity\Like $like): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLike', [$like]);

        return parent::removeLike($like);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileUploads(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileUploads', []);

        return parent::getFileUploads();
    }

    /**
     * {@inheritDoc}
     */
    public function addFileUpload(\App\Entity\FileUpload $fileUpload): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFileUpload', [$fileUpload]);

        return parent::addFileUpload($fileUpload);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFileUpload(\App\Entity\FileUpload $fileUpload): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFileUpload', [$fileUpload]);

        return parent::removeFileUpload($fileUpload);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', []);

        return parent::getContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\App\Entity\Contact $contact): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', [$contact]);

        return parent::addContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\App\Entity\Contact $contact): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', [$contact]);

        return parent::removeContact($contact);
    }

}
