<?php

namespace App\Modules\QMS\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Modules\QMS\Repository\TicketRepository;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $refExternal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefExternal(): ?string
    {
        return $this->refExternal;
    }

    public function setRefExternal(string $refExternal): self
    {
        $this->refExternal = $refExternal;

        return $this;
    }
}
