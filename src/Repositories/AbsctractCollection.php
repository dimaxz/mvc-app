<?php


namespace Local\Repositories;


abstract class AbsctractCollection implements \Iterator, \Countable
{
    protected $_entities = array();

    protected $lastKey;


    /**
     * @return string
     */
    abstract protected function getEntityClass(): string;

    public function count()
    {
        return count($this->_entities);
    }

    public function current()
    {
        return current($this->_entities);
    }

    public function next()
    {
        next($this->_entities);
        return $this;
    }

    public function key()
    {
        return key($this->_entities);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }

    public function rewind()
    {
        reset($this->_entities);
        return $this;
    }


    /**
     * @param $value
     * @return $this
     */
    public function push( $value)
    {
        $this->offsetSet($value);
        return $this;
    }

    /**
     * Add an entity to the collection (implementation required by ArrayAccess interface)
     */
    public function offsetSet($entity, $key = null)
    {

        $className = $this->getEntityClass();

        if (!is_a($entity, $className)) {
            throw new Exceptions\Collection("The specified entity is not allowed for this collection.");
        }

        if (empty($key)) {
            $key = spl_object_hash($entity);
        }

        if (!isset($key)) {
            $this->_entities[] = $entity;
        } else {
            $this->_entities[$key] = $entity;
        }

        return true;
    }
}