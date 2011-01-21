<?php
/**
 * Artist components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 */
class artistComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->artistPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->artist = $this->getRecord($query);
  }


}
