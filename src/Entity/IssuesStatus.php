<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuesStatus
 *
 * @ORM\Table(name="issues_status")
 * @ORM\Entity
 */
class IssuesStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_title", type="string", length=50, nullable=true)
     */
    private $statusTitle;


}
