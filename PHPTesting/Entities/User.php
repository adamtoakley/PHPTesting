<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="User")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $userId;
    /** @Column(length=140) */
    private $username;
    /** @Column(length=140) */
    private $firstName;
    /** @Column(length=140) */
    private $lastName;
}

?>