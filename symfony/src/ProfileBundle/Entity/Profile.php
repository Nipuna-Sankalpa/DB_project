<?php

namespace ProfileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity
 */
class Profile
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=20, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=30, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="street_number", type="string", length=10, nullable=true)
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=30, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=20, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=20, nullable=true)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship_status", type="string", length=20, nullable=true)
     */
    private $relationshipStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown", type="string", length=20, nullable=true)
     */
    private $hometown;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=6, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=20, nullable=true)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=20, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_number", type="string", length=10, nullable=true)
     */
    private $mobileNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone", type="string", length=10, nullable=true)
     */
    private $homePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="school", type="string", length=100, nullable=true)
     */
    private $school;

    /**
     * @var string
     *
     * @ORM\Column(name="higher_education", type="string", length=100, nullable=true)
     */
    private $higherEducation;

    /**
     * @var string
     *
     * @ORM\Column(name="blog", type="string", length=50, nullable=true)
     */
    private $blog;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedIn", type="string", length=50, nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_sport", type="string", length=20, nullable=true)
     */
    private $favoriteSport;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_film", type="string", length=20, nullable=true)
     */
    private $favoriteFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_book", type="string", length=20, nullable=true)
     */
    private $favoriteBook;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_food", type="string", length=20, nullable=true)
     */
    private $favoriteFood;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_song", type="string", length=30, nullable=true)
     */
    private $favoriteSong;

    /**
     * @var string
     *
     * @ORM\Column(name="favorite_drink", type="string", length=30, nullable=true)
     */
    private $favoriteDrink;

    function getEmail() {
        return $this->email;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getStreetNumber() {
        return $this->streetNumber;
    }

    function getStreet() {
        return $this->street;
    }

    function getCity() {
        return $this->city;
    }

    function getCountry() {
        return $this->country;
    }

    function getDob() {
        return $this->dob;
    }

    function getRelationshipStatus() {
        return $this->relationshipStatus;
    }

    function getHometown() {
        return $this->hometown;
    }

    function getGender() {
        return $this->gender;
    }

    function getReligion() {
        return $this->religion;
    }

    function getDescription() {
        return $this->description;
    }

    function getMobileNumber() {
        return $this->mobileNumber;
    }

    function getHomePhone() {
        return $this->homePhone;
    }

    function getSchool() {
        return $this->school;
    }

    function getHigherEducation() {
        return $this->higherEducation;
    }

    function getBlog() {
        return $this->blog;
    }

    function getLinkedin() {
        return $this->linkedin;
    }

    function getFavoriteSport() {
        return $this->favoriteSport;
    }

    function getFavoriteFilm() {
        return $this->favoriteFilm;
    }

    function getFavoriteBook() {
        return $this->favoriteBook;
    }

    function getFavoriteFood() {
        return $this->favoriteFood;
    }

    function getFavoriteSong() {
        return $this->favoriteSong;
    }

    function getFavoriteDrink() {
        return $this->favoriteDrink;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setStreetNumber($streetNumber) {
        $this->streetNumber = $streetNumber;
    }

    function setStreet($street) {
        $this->street = $street;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setDob($dob) {
        $this->dob = $dob;
    }

    function setRelationshipStatus($relationshipStatus) {
        $this->relationshipStatus = $relationshipStatus;
    }

    function setHometown($hometown) {
        $this->hometown = $hometown;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setReligion($religion) {
        $this->religion = $religion;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setMobileNumber($mobileNumber) {
        $this->mobileNumber = $mobileNumber;
    }

    function setHomePhone($homePhone) {
        $this->homePhone = $homePhone;
    }

    function setSchool($school) {
        $this->school = $school;
    }

    function setHigherEducation($higherEducation) {
        $this->higherEducation = $higherEducation;
    }

    function setBlog($blog) {
        $this->blog = $blog;
    }

    function setLinkedin($linkedin) {
        $this->linkedin = $linkedin;
    }

    function setFavoriteSport($favoriteSport) {
        $this->favoriteSport = $favoriteSport;
    }

    function setFavoriteFilm($favoriteFilm) {
        $this->favoriteFilm = $favoriteFilm;
    }

    function setFavoriteBook($favoriteBook) {
        $this->favoriteBook = $favoriteBook;
    }

    function setFavoriteFood($favoriteFood) {
        $this->favoriteFood = $favoriteFood;
    }

    function setFavoriteSong($favoriteSong) {
        $this->favoriteSong = $favoriteSong;
    }

    function setFavoriteDrink($favoriteDrink) {
        $this->favoriteDrink = $favoriteDrink;
    }
    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $image;


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
}
