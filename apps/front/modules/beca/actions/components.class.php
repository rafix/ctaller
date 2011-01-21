<?php
/**
 * Beca components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 */
class becaComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->becaPager = $this->getPager($query);
  }

  public function executeListByArtist()
  {
    $query = $this->getListQuery();
    
    $this->becaPager = $this->getPager($query);
  }


}
