<?php


namespace Local\Repositories;


class BasketCriteria
{

    /**
     * @var null|int
     */
    private $filterById;

    /**
     * @var null|string
     */
    private $filterByName;

    /**
     * @var null|int
     */
    private $limit;

    /**
     * @return int|null
     */
    public function getFilterById(): ?int
    {
        return $this->filterById;
    }

    /**
     * @param int|null $filterById
     * @return $this
     */
    public function setFilterById(?int $filterById): BasketCriteria
    {
        $this->filterById = $filterById;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilterByName(): ?string
    {
        return $this->filterByName;
    }

    /**
     * @param string|null $filterByName
     * @return $this
     */
    public function setFilterByName(?string $filterByName): BasketCriteria
    {
        $this->filterByName = $filterByName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     * @return $this
     */
    public function setLimit(?int $limit): BasketCriteria
    {
        $this->limit = $limit;
        return $this;
    }

}