<?php

namespace Acme\App\Repositories;

/**
 * the contract for all post repositories. They must all use emthhods defined in this interface.
 */
interface PostRepositoryInterface {

    /**
     * return all posts, as an array of objects
     * $post->title
     * $post->body
     *
     * @return array
     */
    public function All();

    /**
     * Return a singke post
     * $post->title
     * $post->body
     *
     * @param integer $id
     * @return object
     */
    pblic function Find($id);
}