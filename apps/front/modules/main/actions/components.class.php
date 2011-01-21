<?php
/**
 * Main components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 */
class mainComponents extends myFrontModuleComponents
{

  public function executeHeader()
  {
    // Your code here
  }

  public function executeFooter()
  {
    // Your code here
  }

  public function executeViewGallery()
  {
    $this->medias = Doctrine::getTable('Work')->getAllInGallery();
  }

  public function executeHr()
  {
    // Your code here
  }


}
