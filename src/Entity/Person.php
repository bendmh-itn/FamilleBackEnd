<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PersonRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 * @ApiResource(
 *  attributes={
 *      "order": {"FamilyNumber" : "asc"}
 *  }
 * )
 * @ApiFilter(SearchFilter::class, properties={"FamilyNumber": "start", "generation" : "exact"})
 * @ApiFilter(RangeFilter::class, properties={"FamilyNumber"})
 */
class Person
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     * @Assert\Length(min=3, minMessage="Le nom doit faire au moins 3 caractères", max=25,  maxMessage="Le nom doit faire au plus 25 caractères")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     * @Assert\Length(min=3, minMessage="Le nom doit faire au moins 3 caractères", max=25,  maxMessage="Le nom doit faire au plus 25 caractères")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     * @Assert\Length(min=3, minMessage="Le nom doit faire au moins 3 caractères", max=25,  maxMessage="Le nom doit faire au plus 25 caractères")
     */
    private $familyName;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $birthday;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deathday;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide")
     */
    private $generation;

    /**
     * @ORM\Column(type="integer")
     */
    private $FamilyNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    public function setFamilyName(string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getDeathday(): ?\DateTimeInterface
    {
        return $this->deathday;
    }

    public function setDeathday(?\DateTimeInterface $deathday): self
    {
        $this->deathday = $deathday;

        return $this;
    }

    public function getGeneration(): ?int
    {
        return $this->generation;
    }

    public function setGeneration(int $generation): self
    {
        $this->generation = $generation;

        return $this;
    }

    public function getFamilyNumber(): ?int
    {
        return $this->FamilyNumber;
    }

    public function setFamilyNumber(int $FamilyNumber): self
    {
        $this->FamilyNumber = $FamilyNumber;

        return $this;
    }
}
