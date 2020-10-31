<?php

namespace App\Entity;

use App\Repository\ConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ConfigRepository::class)
 * @Vich\Uploadable
 */
class Config
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomSocieter;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $logo;

    /**
     * @Vich\UploadableField(mapping="logo_images", fileNameProperty="logo")
     * @var File
     */
    private $logoFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity=Email::class, mappedBy="config")
     */
    private $emails;

    /**
     * @ORM\OneToMany(targetEntity=Annuaire::class, mappedBy="config", cascade="all")
     */
    private $tels;

    public function __toString()
    {
        return $this->nomSocieter;
    }

    public function __construct()
    {
        $this->emails = new ArrayCollection();
        $this->tels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSocieter(): ?string
    {
        return $this->nomSocieter;
    }

    public function setNomSocieter(string $nomSocieter): self
    {
        $this->nomSocieter = $nomSocieter;

        return $this;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogoFile(File $logo = null)
    {
        $this->logoFile = $logo;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($logo) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getLogoFile()
    {
        return $this->logoFile;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


    /**
     * @return Collection|Email[]
     */
    public function getEmails(): Collection
    {
        return $this->emails;
    }

    public function addEmail(Email $email): self
    {
        if (!$this->emails->contains($email)) {
            $this->emails[] = $email;
            $email->setConfig($this);
        }

        return $this;
    }

    public function removeEmail(Email $email): self
    {
        if ($this->emails->contains($email)) {
            $this->emails->removeElement($email);
            // set the owning side to null (unless already changed)
            if ($email->getConfig() === $this) {
                $email->setConfig(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Annuaire[]
     */
    public function getTels(): Collection
    {
        return $this->tels;
    }

    public function addTel(Annuaire $tel): self
    {
        if (!$this->tels->contains($tel)) {
            $this->tels[] = $tel;
            $tel->setConfig($this);
        }

        return $this;
    }

    public function removeTel(Annuaire $tel): self
    {
        if ($this->tels->contains($tel)) {
            $this->tels->removeElement($tel);
            // set the owning side to null (unless already changed)
            if ($tel->getConfig() === $this) {
                $tel->setConfig(null);
            }
        }

        return $this;
    }
}
