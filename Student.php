<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Student
{
    /*
     * Constructor to initialize class variables
     */
    function _construct()
    {
        $this-> surname = '';
        $this->first_name = '';
        $this->emails = array(); // holds an array of work/home emails
        $this->grades = array(); // holds an array of grades (preferably in int || double)
    }
    
    /*
     * Setter function to add emails 
     * 
     * $which email type parameter (work || home)
     * $address email address
     * 
     * @returns void
     */
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }
    
    /*
     * Setter function to add grades
     * 
     * $grade student's grade in int || double
     * 
     * @returns void
     */
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }
    
    /*
     * average() calculates the average of all the 
     * grades in the grades array
     * 
     * @returns average of all the grades in grades array
     */
    function average()
    {
        $total = 0;
        
        foreach($this->grades as $value)
        {
            $total += $value;
        }
        
        return $total / count($this->grades);
    }
    
    /*
     * toString() prints out all the student variables in a nice 
     * format
     * 
     * @returns a string containing Student name / Grade / Email addreses
     */
    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        
        $result .= '('.$this->average().")\n";
        
        foreach($this->emails as $which=>$what)
        {
            $result .= $which . ': ' . $what . "\n";
        }
        
        $result .= "\n";
        
        return '<pre>'.$result.'</pre>';
        
    }
}