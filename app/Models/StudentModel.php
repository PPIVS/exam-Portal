<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class StudentModel extends Model {

    protected $table='studentexamtable';
    protected $primaryKey='SrNo';
    protected $allowedFields=[ 

    	'EnrolNo',
    	'StudentName',
    	'Gender',
    	'FathersName',
    	'StudentCnic',
    	'StudentDateBirth',
    	'StudentAddress',
    	'StudentEmail',
    	'StudentPhoneNo',
    	'StudentPhoto',
    	'StudentPass',

    ];

  }


 ?>