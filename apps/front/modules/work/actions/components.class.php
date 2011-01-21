<?php
/**
 * Obra components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 * 
 */
class workComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->workPager = $this->getPager($query);
  }

  public function executeListByArtist()
  {
    $query = $this->getListQuery();
    
    $this->workPager = $this->getPager($query);
  }


}
