<?php


namespace Local\Repositories;


class ProductCriteria
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
     * @return ProductCriteria
     */
    public function setFilterById(?int $filterById): ProductCriteria
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
     * @return ProductCriteria
     */
    public function setFilterByName(?string $filterByName): ProductCriteria
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
     * @return ProductCriteria
     */
    public function setLimit(?int $limit): ProductCriteria
    {
        $this->limit = $limit;
        return $this;
    }

}