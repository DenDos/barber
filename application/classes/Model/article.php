<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Article extends Model
{
    protected $_tableArticles = 'first';
 
    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableArticles;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
}