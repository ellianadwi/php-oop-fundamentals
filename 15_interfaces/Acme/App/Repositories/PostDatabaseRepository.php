<?php

namespace Acme\App\Rpositories;

/**
 * The post repository that fetches posts from a database
 */
class PostdatabaseRepository implements PostRepositoryInterface
{
    protected $db;

    public function __construct()
    {
        // Store database connection
    }

    /**
     * @see \Acme\App\Repositories\ostRepositoryInterface::All()
     */
    public function All ()
    {
        //Fetch all posts from db
    }

    /**
     * @see \Acme\App\Repositories\PostRepositoryInterface::Find()
     */
    public function Find ($id)
    {
        // Fetch a single post from db
    }
}