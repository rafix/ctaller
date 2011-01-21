<?php
/**
 * Event components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 * 
 */
class eventComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery('event')
            ->addWhere('event.end >= ?', date('Y-m-d h:i:s', time()))
            ->orderBy('event.start ASC') ;
    
    $this->eventPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->event = $this->getRecord($query);
  }

  public function executeListSideNow()
  {
    $query = $this->getListQuery('event')
            ->addWhere('event.start <= ?', date('Y-m-d h:i:s', time()))
            ->andWhere('event.end >= ?', date('Y-m-d h:i:s', time()))
            ->orderBy('event.start ASC');
    $this->eventPager = $this->getPager($query);
  }

  public function executeListSideNexts()
  {
    $query = $this->getListQuery('event')
            ->addWhere('event.start >= ?', date('Y-m-d h:i:s', time()))
            ->orderBy('event.start ASC') ;

    $this->eventPager = $this->getPager($query);
  }

  public function executeListSideThisMonth()
  {
    $query = $this->getListQuery();
    
    $this->eventPager = $this->getPager($query);
  }


}
