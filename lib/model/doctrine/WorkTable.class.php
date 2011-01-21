<?php


class WorkTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Work');
    }

    public function addInGalleryQuery(Doctrine_Query $q = null) {

        if(is_null($q))
        {
            $q = Doctrine_Query::create()->from('Work w');
        }

        $alias = $q->getRootAlias();

        $q->andWhere($alias . '.in_gallery = ?', 1);

        return $q;
    }

    public function getAllInGallery(Doctrine_Query $q = null) {
        return $this->addInGalleryQuery($q)->execute();
    }

    public function getAllInGalleryCount(Doctrine_Query $q = null) {
        return $this->addInGalleryQuery($q)->count();
    }
}