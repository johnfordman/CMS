<?php
/**
 * Created by PhpStorm.
 * User: Fordman
 * Date: 27/05/15
 * Time: 11:03
 */

class Content
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this->getId();
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this->getTitle();
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this->getBody();
    }

    /**
     * @return mixed
     */
    public function getMenuTitle()
    {
        return $this->menuTitle;
    }

    /**
     * @param mixed $menuTitle
     */
    public function setMenuTitle($menuTitle)
    {
        $this->menuTitle = $menuTitle;
        return $this->getMenuTitle();
    }

    /**
     * @return mixed
     */
    public function getHeaderTitle()
    {
        return $this->headerTitle;
    }

    /**
     * @param mixed $headerTitle
     */
    public function setHeaderTitle($headerTitle)
    {
        $this->headerTitle = $headerTitle;
        return $this->getHeaderTitle();
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    protected $id;
    protected $title;
    protected $body;
    protected $menuTitle;
    protected $headerTitle;
    protected $created_at;
    protected $updated_at;

    public function add(){

    }
    public function delete(){

    }
    public function update(){

    }
    public function view(){

    }
    public function liste(){

    }
}