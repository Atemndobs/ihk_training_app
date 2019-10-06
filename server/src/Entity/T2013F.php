<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T2013F
 *
 * @ORM\Table(name="t_2013_F")
 * @ORM\Entity
 */
class T2013F
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=45, nullable=true)
     */
    private $question;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer", type="string", length=45, nullable=true)
     */
    private $answer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="situation", type="string", length=45, nullable=true)
     */
    private $situation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hash_answer", type="string", length=45, nullable=true)
     */
    private $hashAnswer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response", type="string", length=45, nullable=true)
     */
    private $response;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(?string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getHashAnswer(): ?string
    {
        return $this->hashAnswer;
    }

    public function setHashAnswer(?string $hashAnswer): self
    {
        $this->hashAnswer = $hashAnswer;

        return $this;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(?string $response): self
    {
        $this->response = $response;

        return $this;
    }


}
