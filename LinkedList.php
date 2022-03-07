<?php
	class node{
	  public $data;
	  public $next;
	}
	
	class LinkedList{
	  public $head;
	  
	  public function __construct(){
	    $this->head = null;
	  }
	  
	  public function PrintList()
	  {
	    if($this->head == null)
	    {
	      echo "\nList is empty";
	    }
	    else{
	      $current = $this->head;
	      echo "\nList elements are as follows:\n";
	      while($current != null)
	      {
	        echo $current->data." ";
	        $current = $current->next;
	      }
	    }
	  }
	  
	  public function reverselist()
	  {
	    if($this->head != null)
	    {
	      if($this->head->next != null)
	      {
	        $current = $this->head;
	        $new = null;
	        
	        while($current != null)
	        {
	          $temp = $current->next;
	          $current->next = $new;
	          $new = $current;
	          $current = $temp;
	        }
	        
	        $this->head = $new;
	      }
	    }
	  }
	  
	  public function push($newelement){
	    
	    $newnode = new node();
	    
	    $newnode->data = $newelement;
	    $newnode->next = null;
	    
	    if($this->head == null){
	      $this->head = $newnode;
	    }
	    else{
	      $temp = new node();
	      $temp = $this->head;
	      
	      while($temp->next != null)
	      {
	        $temp = $temp->next;
	      }
	      
	      $temp->next = $newnode;
	    }
	  }
	  
	  public function deletenode($element)
	  {
	    if($this->head == null){
	      echo "List is empty";
	    }
	    else{
	      
	      $found = true;
	      $current = $previous = $this->head;
	      
	      while($current->data != $element)
	      {
	        if($current->next == null)
	        {
	          $found = false;
	          break;
	        }
	        $previous = $current;
	        $current = $current->next;
	      }
	      
	      if($found == false)
	      {
	        echo "element not in list";
	      }
	      else{
  	       if($current == $previous)
    	      {
    	        $this->head = $current->next;
    	      }
    	      $previous->next = $current->next;
	      }
	    }
	  }
	  
	  public function removeduplicate()
	  {
	    $current = new node;
	    $arr = array();
	    
	    $previous = $current = $this->head;
	    
	    while($current != null)
	    {
	      if(!in_array($current->data,$arr))
	      {
	        $arr[] = $current->data;
	        $previous = $current;
	        $current = $current->next;
	      }
	      else{
	        $previous->next = $current->next;
	        $current = $current->next;
	      }
	    }
	  }
	}
	
	$firstnode = new node();
	$firstnode->data = 10;
	$firstnode->next = null;
	
	$secondnode = new node();
	$secondnode->data = 20;
	$secondnode->next = null;
	
	$firstnode->next = $secondnode;
	
	$Mylist = new LinkedList();
	$Mylist->head = $firstnode;
	
	$Mylist->PrintList();
	
	//reverse LinkedList
	$Mylist->reverselist();
	$Mylist->PrintList();
	
	//add element to LinkedList
	$Mylist->push(12);
	$Mylist->PrintList();
	
	$Mylist->push(12);
	$Mylist->push(10);
	$Mylist->push(18);
	
	//delete element from LinkedList
	$Mylist->deletenode(10);
	$Mylist->PrintList();
	
	
	$Mylist->push(20);
	$Mylist->PrintList();
	
	//remove duplicate from LinkedList
	$Mylist->removeduplicate();
	$Mylist->PrintList();
		
?>