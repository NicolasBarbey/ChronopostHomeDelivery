<?php

namespace ChronopostHomeDelivery\Model\Base;

use \Exception;
use \PDO;
use ChronopostHomeDelivery\Model\ChronopostHomeDeliveryDeliveryMode as ChildChronopostHomeDeliveryDeliveryMode;
use ChronopostHomeDelivery\Model\ChronopostHomeDeliveryDeliveryModeQuery as ChildChronopostHomeDeliveryDeliveryModeQuery;
use ChronopostHomeDelivery\Model\Map\ChronopostHomeDeliveryDeliveryModeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'chronopost_home_delivery_delivery_mode' table.
 *
 *
 *
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery orderByFreeshippingActive($order = Criteria::ASC) Order by the freeshipping_active column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery orderByFreeshippingFrom($order = Criteria::ASC) Order by the freeshipping_from column
 *
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery groupById() Group by the id column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery groupByTitle() Group by the title column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery groupByCode() Group by the code column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery groupByFreeshippingActive() Group by the freeshipping_active column
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery groupByFreeshippingFrom() Group by the freeshipping_from column
 *
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery leftJoinChronopostHomeDeliveryPrice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ChronopostHomeDeliveryPrice relation
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery rightJoinChronopostHomeDeliveryPrice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ChronopostHomeDeliveryPrice relation
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery innerJoinChronopostHomeDeliveryPrice($relationAlias = null) Adds a INNER JOIN clause to the query using the ChronopostHomeDeliveryPrice relation
 *
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery leftJoinChronopostHomeDeliveryAreaFreeshipping($relationAlias = null) Adds a LEFT JOIN clause to the query using the ChronopostHomeDeliveryAreaFreeshipping relation
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery rightJoinChronopostHomeDeliveryAreaFreeshipping($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ChronopostHomeDeliveryAreaFreeshipping relation
 * @method     ChildChronopostHomeDeliveryDeliveryModeQuery innerJoinChronopostHomeDeliveryAreaFreeshipping($relationAlias = null) Adds a INNER JOIN clause to the query using the ChronopostHomeDeliveryAreaFreeshipping relation
 *
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOne(ConnectionInterface $con = null) Return the first ChildChronopostHomeDeliveryDeliveryMode matching the query
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildChronopostHomeDeliveryDeliveryMode matching the query, or a new ChildChronopostHomeDeliveryDeliveryMode object populated from the query conditions when no match is found
 *
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneById(int $id) Return the first ChildChronopostHomeDeliveryDeliveryMode filtered by the id column
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneByTitle(string $title) Return the first ChildChronopostHomeDeliveryDeliveryMode filtered by the title column
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneByCode(string $code) Return the first ChildChronopostHomeDeliveryDeliveryMode filtered by the code column
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneByFreeshippingActive(boolean $freeshipping_active) Return the first ChildChronopostHomeDeliveryDeliveryMode filtered by the freeshipping_active column
 * @method     ChildChronopostHomeDeliveryDeliveryMode findOneByFreeshippingFrom(double $freeshipping_from) Return the first ChildChronopostHomeDeliveryDeliveryMode filtered by the freeshipping_from column
 *
 * @method     array findById(int $id) Return ChildChronopostHomeDeliveryDeliveryMode objects filtered by the id column
 * @method     array findByTitle(string $title) Return ChildChronopostHomeDeliveryDeliveryMode objects filtered by the title column
 * @method     array findByCode(string $code) Return ChildChronopostHomeDeliveryDeliveryMode objects filtered by the code column
 * @method     array findByFreeshippingActive(boolean $freeshipping_active) Return ChildChronopostHomeDeliveryDeliveryMode objects filtered by the freeshipping_active column
 * @method     array findByFreeshippingFrom(double $freeshipping_from) Return ChildChronopostHomeDeliveryDeliveryMode objects filtered by the freeshipping_from column
 *
 */
abstract class ChronopostHomeDeliveryDeliveryModeQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \ChronopostHomeDelivery\Model\Base\ChronopostHomeDeliveryDeliveryModeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\ChronopostHomeDelivery\\Model\\ChronopostHomeDeliveryDeliveryMode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildChronopostHomeDeliveryDeliveryModeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryDeliveryModeQuery) {
            return $criteria;
        }
        $query = new \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryDeliveryModeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildChronopostHomeDeliveryDeliveryMode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ChronopostHomeDeliveryDeliveryModeTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ChronopostHomeDeliveryDeliveryModeTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return   ChildChronopostHomeDeliveryDeliveryMode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, TITLE, CODE, FREESHIPPING_ACTIVE, FREESHIPPING_FROM FROM chronopost_home_delivery_delivery_mode WHERE ID = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            $obj = new ChildChronopostHomeDeliveryDeliveryMode();
            $obj->hydrate($row);
            ChronopostHomeDeliveryDeliveryModeTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildChronopostHomeDeliveryDeliveryMode|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the freeshipping_active column
     *
     * Example usage:
     * <code>
     * $query->filterByFreeshippingActive(true); // WHERE freeshipping_active = true
     * $query->filterByFreeshippingActive('yes'); // WHERE freeshipping_active = true
     * </code>
     *
     * @param     boolean|string $freeshippingActive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByFreeshippingActive($freeshippingActive = null, $comparison = null)
    {
        if (is_string($freeshippingActive)) {
            $freeshipping_active = in_array(strtolower($freeshippingActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::FREESHIPPING_ACTIVE, $freeshippingActive, $comparison);
    }

    /**
     * Filter the query on the freeshipping_from column
     *
     * Example usage:
     * <code>
     * $query->filterByFreeshippingFrom(1234); // WHERE freeshipping_from = 1234
     * $query->filterByFreeshippingFrom(array(12, 34)); // WHERE freeshipping_from IN (12, 34)
     * $query->filterByFreeshippingFrom(array('min' => 12)); // WHERE freeshipping_from > 12
     * </code>
     *
     * @param     mixed $freeshippingFrom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByFreeshippingFrom($freeshippingFrom = null, $comparison = null)
    {
        if (is_array($freeshippingFrom)) {
            $useMinMax = false;
            if (isset($freeshippingFrom['min'])) {
                $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::FREESHIPPING_FROM, $freeshippingFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freeshippingFrom['max'])) {
                $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::FREESHIPPING_FROM, $freeshippingFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::FREESHIPPING_FROM, $freeshippingFrom, $comparison);
    }

    /**
     * Filter the query by a related \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPrice object
     *
     * @param \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPrice|ObjectCollection $chronopostHomeDeliveryPrice  the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByChronopostHomeDeliveryPrice($chronopostHomeDeliveryPrice, $comparison = null)
    {
        if ($chronopostHomeDeliveryPrice instanceof \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPrice) {
            return $this
                ->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $chronopostHomeDeliveryPrice->getDeliveryModeId(), $comparison);
        } elseif ($chronopostHomeDeliveryPrice instanceof ObjectCollection) {
            return $this
                ->useChronopostHomeDeliveryPriceQuery()
                ->filterByPrimaryKeys($chronopostHomeDeliveryPrice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByChronopostHomeDeliveryPrice() only accepts arguments of type \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPrice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ChronopostHomeDeliveryPrice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function joinChronopostHomeDeliveryPrice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ChronopostHomeDeliveryPrice');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ChronopostHomeDeliveryPrice');
        }

        return $this;
    }

    /**
     * Use the ChronopostHomeDeliveryPrice relation ChronopostHomeDeliveryPrice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPriceQuery A secondary query class using the current class as primary query
     */
    public function useChronopostHomeDeliveryPriceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinChronopostHomeDeliveryPrice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ChronopostHomeDeliveryPrice', '\ChronopostHomeDelivery\Model\ChronopostHomeDeliveryPriceQuery');
    }

    /**
     * Filter the query by a related \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshipping object
     *
     * @param \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshipping|ObjectCollection $chronopostHomeDeliveryAreaFreeshipping  the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function filterByChronopostHomeDeliveryAreaFreeshipping($chronopostHomeDeliveryAreaFreeshipping, $comparison = null)
    {
        if ($chronopostHomeDeliveryAreaFreeshipping instanceof \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshipping) {
            return $this
                ->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $chronopostHomeDeliveryAreaFreeshipping->getDeliveryModeId(), $comparison);
        } elseif ($chronopostHomeDeliveryAreaFreeshipping instanceof ObjectCollection) {
            return $this
                ->useChronopostHomeDeliveryAreaFreeshippingQuery()
                ->filterByPrimaryKeys($chronopostHomeDeliveryAreaFreeshipping->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByChronopostHomeDeliveryAreaFreeshipping() only accepts arguments of type \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshipping or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ChronopostHomeDeliveryAreaFreeshipping relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function joinChronopostHomeDeliveryAreaFreeshipping($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ChronopostHomeDeliveryAreaFreeshipping');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ChronopostHomeDeliveryAreaFreeshipping');
        }

        return $this;
    }

    /**
     * Use the ChronopostHomeDeliveryAreaFreeshipping relation ChronopostHomeDeliveryAreaFreeshipping object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshippingQuery A secondary query class using the current class as primary query
     */
    public function useChronopostHomeDeliveryAreaFreeshippingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinChronopostHomeDeliveryAreaFreeshipping($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ChronopostHomeDeliveryAreaFreeshipping', '\ChronopostHomeDelivery\Model\ChronopostHomeDeliveryAreaFreeshippingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildChronopostHomeDeliveryDeliveryMode $chronopostHomeDeliveryDeliveryMode Object to remove from the list of results
     *
     * @return ChildChronopostHomeDeliveryDeliveryModeQuery The current query, for fluid interface
     */
    public function prune($chronopostHomeDeliveryDeliveryMode = null)
    {
        if ($chronopostHomeDeliveryDeliveryMode) {
            $this->addUsingAlias(ChronopostHomeDeliveryDeliveryModeTableMap::ID, $chronopostHomeDeliveryDeliveryMode->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the chronopost_home_delivery_delivery_mode table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ChronopostHomeDeliveryDeliveryModeTableMap::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ChronopostHomeDeliveryDeliveryModeTableMap::clearInstancePool();
            ChronopostHomeDeliveryDeliveryModeTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildChronopostHomeDeliveryDeliveryMode or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildChronopostHomeDeliveryDeliveryMode object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public function delete(ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ChronopostHomeDeliveryDeliveryModeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ChronopostHomeDeliveryDeliveryModeTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        ChronopostHomeDeliveryDeliveryModeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ChronopostHomeDeliveryDeliveryModeTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

} // ChronopostHomeDeliveryDeliveryModeQuery
