<?php

namespace FriendsEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 */
class Profile
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $streetNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $dob;

    /**
     * @var string
     */
    private $relationshipStatus;

    /**
     * @var string
     */
    private $hometown;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $religion;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var string
     */
    private $homePhone;

    /**
     * @var string
     */
    private $school;

    /**
     * @var string
     */
    private $higherEducation;

    /**
     * @var string
     */
    private $blog;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var string
     */
    private $favoriteSport;

    /**
     * @var string
     */
    private $favoriteFilm;

    /**
     * @var string
     */
    private $favoriteBook;

    /**
     * @var string
     */
    private $favoriteFood;

    /**
     * @var string
     */
    private $favoriteSong;

    /**
     * @var string
     */
    private $favoriteDrink;

    /**
     * @var string
     */
    private $email;


    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Profile
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Profile
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Profile
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Profile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set streetNumber
     *
     * @param string $streetNumber
     * @return Profile
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return string 
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Profile
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Profile
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Profile
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return Profile
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set relationshipStatus
     *
     * @param string $relationshipStatus
     * @return Profile
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;

        return $this;
    }

    /**
     * Get relationshipStatus
     *
     * @return string 
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     * @return Profile
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;

        return $this;
    }

    /**
     * Get hometown
     *
     * @return string 
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Profile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set religion
     *
     * @param string $religion
     * @return Profile
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Profile
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     * @return Profile
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string 
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Profile
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    /**
     * Get homePhone
     *
     * @return string 
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set school
     *
     * @param string $school
     * @return Profile
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set higherEducation
     *
     * @param string $higherEducation
     * @return Profile
     */
    public function setHigherEducation($higherEducation)
    {
        $this->higherEducation = $higherEducation;

        return $this;
    }

    /**
     * Get higherEducation
     *
     * @return string 
     */
    public function getHigherEducation()
    {
        return $this->higherEducation;
    }

    /**
     * Set blog
     *
     * @param string $blog
     * @return Profile
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return string 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return Profile
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set favoriteSport
     *
     * @param string $favoriteSport
     * @return Profile
     */
    public function setFavoriteSport($favoriteSport)
    {
        $this->favoriteSport = $favoriteSport;

        return $this;
    }

    /**
     * Get favoriteSport
     *
     * @return string 
     */
    public function getFavoriteSport()
    {
        return $this->favoriteSport;
    }

    /**
     * Set favoriteFilm
     *
     * @param string $favoriteFilm
     * @return Profile
     */
    public function setFavoriteFilm($favoriteFilm)
    {
        $this->favoriteFilm = $favoriteFilm;

        return $this;
    }

    /**
     * Get favoriteFilm
     *
     * @return string 
     */
    public function getFavoriteFilm()
    {
        return $this->favoriteFilm;
    }

    /**
     * Set favoriteBook
     *
     * @param string $favoriteBook
     * @return Profile
     */
    public function setFavoriteBook($favoriteBook)
    {
        $this->favoriteBook = $favoriteBook;

        return $this;
    }

    /**
     * Get favoriteBook
     *
     * @return string 
     */
    public function getFavoriteBook()
    {
        return $this->favoriteBook;
    }

    /**
     * Set favoriteFood
     *
     * @param string $favoriteFood
     * @return Profile
     */
    public function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;

        return $this;
    }

    /**
     * Get favoriteFood
     *
     * @return string 
     */
    public function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    /**
     * Set favoriteSong
     *
     * @param string $favoriteSong
     * @return Profile
     */
    public function setFavoriteSong($favoriteSong)
    {
        $this->favoriteSong = $favoriteSong;

        return $this;
    }

    /**
     * Get favoriteSong
     *
     * @return string 
     */
    public function getFavoriteSong()
    {
        return $this->favoriteSong;
    }

    /**
     * Set favoriteDrink
     *
     * @param string $favoriteDrink
     * @return Profile
     */
    public function setFavoriteDrink($favoriteDrink)
    {
        $this->favoriteDrink = $favoriteDrink;

        return $this;
    }

    /**
     * Get favoriteDrink
     *
     * @return string 
     */
    public function getFavoriteDrink()
    {
        return $this->favoriteDrink;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Profile
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
